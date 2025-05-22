<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Our Cause | GCash Donations</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .donation-card {
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }

        .donation-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }

        .gcash-bg {
            background: linear-gradient(135deg, #0033A0 0%, #00A0E9 100%);
        }

        #screenshotPreview {
            max-height: 300px;
            display: none;
        }
    </style>
</head>

<body class="bg-gray-50 font-sans">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-sm py-6">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-3xl md:text-4xl font-bold text-blue-800">Support Our Mission</h1>
                <p class="mt-2 text-gray-600">Your donation helps us make a difference</p>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow container mx-auto px-4 py-12">
            <div class="max-w-4xl mx-auto">
                <!-- GCash Donation Section -->
                <div class="bg-white rounded-xl p-6 donation-card max-w-md mx-auto">
                    <div class="text-center mb-6">
                        <div
                            class="w-16 h-16 rounded-full gcash-bg flex items-center justify-center text-white mx-auto mb-3">
                            <i class="fab fa-gg text-2xl"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-800">GCash Donation</h2>
                        <p class="text-gray-600">Follow these simple steps:</p>
                    </div>

                    <!-- Donation Steps -->
                    <div class="mb-8 space-y-4">
                        <div class="flex items-start">
                            <div
                                class="w-8 h-8 rounded-full bg-blue-100 text-blue-800 flex items-center justify-center mr-3 flex-shrink-0">
                                1</div>
                            <div>
                                <p class="font-medium">Scan the QR Code below</p>
                                <p class="text-sm text-gray-500">Or send to GCash number: <span
                                        class="font-bold">09107909642</span></p>
                                <p class="text-sm text-gray-500">Acount Name: <span class="font-bold">Denvir De
                                        Jesus</span></p>
                            </div>
                        </div>

                        <!-- QR Code -->
                        <div
                            class="border-4 border-blue-100 p-4 rounded-lg mx-auto w-48 h-48 flex items-center justify-center">
                            <img src="{{ asset('storage/images/gcash.jpg')}}" alt="GCash QR Code">
                        </div>

                        <div class="flex items-start">
                            <div
                                class="w-8 h-8 rounded-full bg-blue-100 text-blue-800 flex items-center justify-center mr-3 flex-shrink-0">
                                2</div>
                            <div>
                                <p class="font-medium">Enter donation amount</p>
                                <p class="text-sm text-gray-500">Suggested: ₱100, ₱200, ₱500, or any amount</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div
                                class="w-8 h-8 rounded-full bg-blue-100 text-blue-800 flex items-center justify-center mr-3 flex-shrink-0">
                                3</div>
                            <div>
                                <p class="font-medium">Take a screenshot</p>
                                <p class="text-sm text-gray-500">Capture your payment confirmation</p>
                            </div>
                        </div>
                    </div>

                    <!-- Screenshot Upload Form -->
                    <form id="donationForm" action="/donation-store" class="space-y-4" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label class="block text-gray-700 mb-2 font-medium">Upload Payment Screenshot</label>
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
                                <input type="file" name="payment_screenshot" id="screenshotUpload" accept="image/*"
                                    capture="environment" class="hidden">
                                <label for="screenshotUpload" class="cursor-pointer">
                                    <i class="fas fa-camera text-3xl text-gray-400 mb-2"></i>
                                    <p class="text-gray-500">Click to upload or take photo</p>
                                    <p class="text-xs text-gray-400">(JPEG, PNG, or screenshot)</p>
                                </label>
                                <img id="screenshotPreview" class="mt-3 mx-auto rounded-lg">
                            </div>
                        </div>

                        <div>
                            <label for="donorName" class="block text-gray-700 mb-2">Purpose (Optional)</label>
                            <input type="text" name="purpose" id="donorName" class="w-full px-3 py-2 border rounded-lg">
                        </div>

                        <button type="submit"
                            class="w-full gcash-bg text-white py-3 px-6 rounded-lg font-bold hover:opacity-90 transition flex items-center justify-center">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Submit Donation Proof
                        </button>
                        <a href="javascript:history.back();"
                            class="w-full bg-gray-300 text-gray-700 py-3 px-6 rounded-lg font-bold hover:bg-gray-400 transition flex items-center justify-center">
                            <i class="fas fa-times mr-2"></i>
                            Cancel
                        </a>
                    </form>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-white border-t py-6 mt-12">
            <div class="container mx-auto px-4 text-center text-gray-600">
                <p>© 2023 Your Organization Name. All rights reserved.</p>
                <p class="mt-2 text-sm">For donation inquiries: <a href="mailto:donations@example.com"
                        class="text-blue-600">donations@example.com</a></p>
            </div>
        </footer>
    </div>

    <script>
        // Preview uploaded screenshot
        document.getElementById('screenshotUpload').addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (event) {
                    const preview = document.getElementById('screenshotPreview');
                    preview.src = event.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        });

        $('#donationForm').on('submit', function (e) {
            e.preventDefault();

            Swal.fire({
                title: 'Processing...',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            var formData = new FormData(this);

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    Swal.fire({
                        title: 'Thank You!',
                        text: 'Your donation proof has been submitted successfully.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        window.location.href = '/thank-you';
                    });
                },
                error: function (xhr) {
                    let errorMsg = 'There was a problem submitting your proof.';
                    if (xhr.responseJSON && xhr.responseJSON.error) {
                        errorMsg = xhr.responseJSON.error;
                    }
                    Swal.fire('Error', errorMsg, 'error');
                }
            });
        });

    </script>
</body>
//

</html>