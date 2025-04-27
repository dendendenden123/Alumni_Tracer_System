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
                            <input type="text" name="full_name" class="form-control form-control-xl" placeholder="Full Name" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person-badge"></i>
                            </div>
                        </div>

                        <!-- Phone Number -->
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="number" name="phone_number" class="form-control form-control-xl" placeholder="Phone Number" required>
                            <div class="form-control-icon">
                                <i class="bi bi-phone"></i>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="address" class="form-control form-control-xl" placeholder="Address" required>
                            <div class="form-control-icon">
                                <i class="bi bi-house-door"></i>
                            </div>
                        </div>

                        <!-- Date of Birth -->
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="date" name="dob" class="form-control form-control-xl" placeholder="Date of Birth" required>
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
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5" id="submit-button">Sign Up</button>
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
    <script src="{{ asset('assets/js/register.js') }}"></script>
</body>
</html>
