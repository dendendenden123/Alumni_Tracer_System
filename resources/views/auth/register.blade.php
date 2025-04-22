<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Denvir Admin Dashboard</title>
    
    <!-- Fonts & Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index"><img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Sign Up</h1>
                    <p class="auth-subtitle mb-5">Input your data to register to our website.</p>

                    <form method="POST" action="{{ url('register') }}">
                        @csrf
                        <!-- Email -->
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" name="email" id="email" class="form-control form-control-xl" placeholder="Email" required>
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <small id="email-status"></small>
                        </div>

                        <!-- Username -->
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="name" class="form-control form-control-xl" placeholder="Username" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" id="password" class="form-control form-control-xl" placeholder="Password" required>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            <small id="password-status"></small>
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password_confirmation" id="confirm-password" class="form-control form-control-xl" placeholder="Confirm Password" required>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            <small id="confirm-password-status"></small>
                        </div>

                        <!-- Full Name -->
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="full_name" class="form-control form-control-xl" placeholder="Full Name">
                            <div class="form-control-icon">
                                <i class="bi bi-person-badge"></i>
                            </div>
                        </div>

                        <!-- Phone Number -->
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="phone_number" class="form-control form-control-xl" placeholder="Phone Number">
                            <div class="form-control-icon">
                                <i class="bi bi-phone"></i>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="address" class="form-control form-control-xl" placeholder="Address">
                            <div class="form-control-icon">
                                <i class="bi bi-house-door"></i>
                            </div>
                        </div>

                        <!-- Date of Birth -->
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="date" name="dob" class="form-control form-control-xl" placeholder="Date of Birth">
                            <div class="form-control-icon">
                                <i class="bi bi-calendar"></i>
                            </div>
                        </div>

                        <!-- Validation Errors -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Submit -->
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                    </form>

                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Already have an account? 
                            <a href="{{ url('login') }}" class="font-bold">Log in</a>.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right"></div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script defer>
        document.addEventListener('DOMContentLoaded', function () {
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const confirmPasswordInput = document.getElementById('confirm-password');
            const emailStatus = document.getElementById('email-status');
            const passwordStatus = document.getElementById('password-status');
            const confirmPasswordStatus = document.getElementById('confirm-password-status');
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
                } else {
                    confirmPasswordStatus.textContent = 'Passwords do not match.';
                    confirmPasswordStatus.style.color = 'red';
                }
            }

            passwordInput.addEventListener('input', checkPasswordMatch);
            confirmPasswordInput.addEventListener('input', checkPasswordMatch);

            emailInput.addEventListener('input', async function () {
                const email = emailInput.value;
                if (email) {
                    const res = await fetch(`/check-email?email=${encodeURIComponent(email)}`);
                    const data = await res.json();
                    emailStatus.textContent = data.exists ? 'This email is already taken.' : 'This email is available.';
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
    </script>
</body>
</html>
