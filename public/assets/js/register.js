document.addEventListener('DOMContentLoaded', function () {
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm-password');
    const emailStatus = document.getElementById('email-status');
    const passwordStatus = document.getElementById('password-status');
    const confirmPasswordStatus = document.getElementById('confirm-password-status');
    const submitButton = document.getElementById('submit-button');
    const form = document.querySelector('form');

    function checkPasswordMatch() {
        const password = passwordInput.value;
        const confirmPassword = confirmPasswordInput.value;
        if (!confirmPassword) {
            confirmPasswordStatus.textContent = '';
            return;
        }
        if (password === confirmPassword) {
            confirmPasswordStatus.textContent = 'Passwords match.';
            confirmPasswordStatus.style.color = 'green';
            submitButton.disabled = false;
        } else {
            confirmPasswordStatus.textContent = 'Passwords do not match.';
            confirmPasswordStatus.style.color = 'red';
            submitButton.disabled = true;
        }
    }

    passwordInput.addEventListener('input', checkPasswordMatch);
    confirmPasswordInput.addEventListener('input', checkPasswordMatch);

    emailInput.addEventListener('input', async function () {
        const email = emailInput.value;
        if (email) {
            const res = await fetch(`/check-email?email=${encodeURIComponent(email)}`);
            const data = await res.json();
            // emailStatus.textContent = data.exists ? 'This email is already taken.' : 'This email is available.';
            if (data.exists) {
                emailStatus.textContent = 'This email is already taken.';
                submitButton.disabled = true;
            }else{
                emailStatus.textContent = 'This email is available.';
                submitButton.disabled = false;
            }
            emailStatus.style.color = data.exists ? 'red' : 'green';
        } else {
            emailStatus.textContent = '';
        }
    });

    passwordInput.addEventListener('input', async function () {
        const password = passwordInput.value;
        if (password) {
            const res = await fetch(`/check-password-strength?password=${encodeURIComponent(password)}`);
            const data = await res.json();
            passwordStatus.textContent = data.strong ? 'Password is strong.' : 'Password is weak.';
            passwordStatus.style.color = data.strong ? 'green' : 'red';
        } else {
            passwordStatus.textContent = '';
        }
    });

    form.addEventListener('submit', async function (e) {
        e.preventDefault();

        const formData = new FormData(form);
        const email = formData.get('email');
        const password = formData.get('password');

        if (!email || !password) {
            Swal.fire('Error', 'Please complete all required fields.', 'error');
            return;
        }

        try {
            const emailResponse = await fetch('/email-Confirmation', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                    'Accept': 'application/json'
                },
                body: formData
            });

            const emailResult = await emailResponse.json();

            if (!emailResponse.ok || !emailResult.success) {
                throw new Error(emailResult.message || 'Failed to send verification code.');
            }

            const { value: verificationCode } = await Swal.fire({
                title: 'Email Verification',
                input: 'text',
                inputLabel: 'We sent a 6-digit code to your email.',
                inputPlaceholder: 'Enter code here',
                showCancelButton: true,
                confirmButtonText: 'Verify',
                inputValidator: (value) => !value && 'You must enter the verification code.'
            });

            if (!verificationCode) return;

            const verifyResponse = await fetch('/email-Confirmation/verify', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ email, code: verificationCode })
            });

            const verifyResult = await verifyResponse.json();

            if (verifyResult.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Verified!',
                    text: 'Email verified successfully. Registering...',
                    timer: 1500,
                    showConfirmButton: false
                }).then(() => {
                    const tempForm = document.createElement('form');
                    tempForm.action = form.action;
                    tempForm.method = form.method;

                    for (const [key, value] of formData.entries()) {
                        const input = document.createElement('input');
                        input.type = 'hidden';
                        input.name = key;
                        input.value = value;
                        tempForm.appendChild(input);
                    }

                    document.body.appendChild(tempForm);
                    tempForm.submit();
                });
            } else {
                Swal.fire('Invalid Code', verifyResult.message || 'The verification code is incorrect.', 'error');
            }
        } catch (error) {
            Swal.fire('Oops!', error.message || 'Something went wrong.', 'error');
        }
    });
});