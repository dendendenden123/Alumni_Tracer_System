<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Profile Update</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        :root {
            --primary: #4e73df;
            --secondary: #858796;
            --success: #1cc88a;
        }
        
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fc;
            padding: 2rem;
        }
        
        .card {
            border: none;
            border-radius: 0.5rem;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
            overflow: hidden;
        }
        
        .card-header {
            background-color: #f8f9fc;
            border-bottom: 1px solid #e3e6f0;
            padding: 1.5rem;
        }
        
        .card-body {
            padding: 2rem;
        }
        
        .form-floating label {
            padding-left: 2.5rem;
            color: #6e707e;
        }
        
        .form-floating .form-control, 
        .form-floating .form-select {
            padding-left: 2.5rem;
            height: calc(3.5rem + 2px);
            border: 1px solid #d1d3e2;
            border-radius: 0.35rem;
        }
        
        .form-floating .form-control:focus, 
        .form-floating .form-select:focus {
            border-color: #bac8f3;
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }
        
        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            z-index: 4;
            color: #b7b9cc;
        }
        
        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
            padding: 0.5rem 1.75rem;
        }
        
        .btn-outline-secondary {
            padding: 0.5rem 1.75rem;
        }
        
        .invalid-feedback {
            margin-left: 2.5rem;
        }
        
        .profile-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        .profile-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #fff;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <div class="profile-header">
                            <h3 class="mb-0"><i class="fas fa-user-edit me-2"></i>Update Alumni Profile</h3>
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($user->full_name) }}&background=4e73df&color=fff" 
                                 class="profile-avatar" 
                                 alt="Profile Image">
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" class="updateForm needs-validation" novalidate>
                            @csrf
                            @method('POST')
                            
                            <div class="row g-4">
                                <!-- Personal Information Section -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <i class="fas fa-user input-icon"></i>
                                        <input type="text" class="form-control" id="full-name-column" 
                                               placeholder="Full Name" name="full_name" 
                                               value="{{ $user->full_name }}" required>
                                        <label for="full-name-column">Full Name</label>
                                        <div class="invalid-feedback">
                                            Please provide a full name
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <i class="fas fa-phone input-icon"></i>
                                        <input type="tel" class="form-control" id="phone-number-column" 
                                               placeholder="Phone Number" name="phone_number"
                                               value="{{ $user->phone_number }}">
                                        <label for="phone-number-column">Phone Number</label>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <i class="fas fa-calendar-day input-icon"></i>
                                        <input type="date" class="form-control" id="dob-year-column" 
                                               name="dob" value="{{ $user->dob }}">
                                        <label for="dob-year-column">Date of Birth</label>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <i class="fas fa-map-marker-alt input-icon"></i>
                                        <input type="text" class="form-control" id="address-floating" 
                                               name="address" placeholder="Address"
                                               value="{{ $user->address }}">
                                        <label for="address-floating">Address</label>
                                    </div>
                                </div>
                                
                                <!-- Education Section -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <i class="fas fa-graduation-cap input-icon"></i>
                                        <input type="text" class="form-control" id="degree-column" 
                                               name="degree" placeholder="Degree"
                                               value="{{ $user->degree }}" required>
                                        <label for="degree-column">Degree</label>
                                        <div class="invalid-feedback">
                                            Please provide a degree
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <i class="fas fa-calendar-alt input-icon"></i>
                                        <input type="number" class="form-control" id="graduation-year-column" 
                                               name="graduation_year" placeholder="Graduation Year"
                                               value="{{ $user->graduation_year }}" min="1900" max="{{ date('Y') + 5 }}">
                                        <label for="graduation-year-column">Graduation Year</label>
                                    </div>
                                </div>
                                
                                <!-- Employment Section -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <i class="fas fa-briefcase input-icon"></i>
                                        <input type="text" class="form-control" id="job-title-column" 
                                               name="job_title" placeholder="Job Title"
                                               value="{{ $user->job_title }}">
                                        <label for="job-title-column">Job Title</label>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <i class="fas fa-building input-icon"></i>
                                        <input type="text" class="form-control" id="company-column" 
                                               name="company" placeholder="Company"
                                               value="{{ $user->company }}">
                                        <label for="company-column">Company</label>
                                    </div>
                                </div>
                                
                                <!-- Account Settings -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <i class="fas fa-user-tag input-icon"></i>
                                        <select class="form-select" id="role-column" name="role" required>
                                            <option value="Admin" {{ $user->role == 'Admin' ? 'selected' : '' }}>Admin</option>
                                            <option value="Officer" {{ $user->role == 'Officer' ? 'selected' : '' }}>Officer</option>
                                            <option value="Alumnus" {{ $user->role == 'Alumnus' ? 'selected' : '' }}>Alumnus</option>
                                        </select>
                                        <label for="role-column">Role</label>
                                    </div>
                                </div>

                                       <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <i class="fas fa-user-tag input-icon"></i>
                                        <select class="form-select" id="role-column" name="status" required>
                                            <option value="employed" {{ $user->role == 'employed' ? 'selected' : '' }}>Employed</option>
                                            <option value="seeking" {{ $user->role == 'seeking' ? 'selected' : '' }}>Seeking</option>
                                            <option value="promoted" {{ $user->role == 'promoted' ? 'selected' : '' }}>Promoted</option>
                                        </select>
                                        <label for="role-column">Status</label>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <i class="fas fa-envelope input-icon"></i>
                                        <input type="email" class="form-control" id="email-column" 
                                               name="email" placeholder="Email"
                                               value="{{ $user->email }}" required>
                                        <label for="email-column">Email</label>
                                        <div class="invalid-feedback">
                                            Please provide a valid email
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Form Actions -->
                                <div class="col-12">
                                    <div class="d-flex justify-content-end gap-3 pt-3">
                                        <a onclick="window.history.back();"><button type="reset" class="btn btn-outline-secondary">
                                            <i class="fas fa-undo me-2"></i>Back
                                        </button>
                                        </a>
                                        <button type="submit" class="btn btn-primary submit">
                                            <i class="fas fa-save me-2"></i>Save Changes
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery and Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        $(document).ready(function() {
            // Form validation
            (function() {
                'use strict'
                
                const forms = document.querySelectorAll('.needs-validation')
                
                Array.from(forms).forEach(form => {
                    form.addEventListener('submit', event => {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        
                        form.classList.add('was-validated')
                    }, false)
                })
            })()
            
            // AJAX form submission
            $('.submit').on('click', function(e) {
                e.preventDefault();
                
                if ($('.updateForm')[0].checkValidity()) {
                    $.ajax({
                        url: "/user/update/{{ $user->id }}",
                        type: 'POST',
                        data: $(".updateForm").serialize(),
                        success: function(response) {
                            Swal.fire({
                                title: 'Success!',
                                text: 'Profile updated successfully',
                                icon: 'success',
                                confirmButtonText: 'OK',
                                customClass: {
                                    confirmButton: 'btn btn-primary'
                                },
                                buttonsStyling: false
                            }).then(() => {
                              window.location.href = document.referrer;
                            });
                        },
                        error: function(xhr) {
                            let errors = xhr.responseJSON.errors;
                            let errorMessages = '';
                            
                            for (let field in errors) {
                                errorMessages += errors[field].join('<br>') + '<br>';
                            }
                            
                            Swal.fire({
                                title: 'Validation Error',
                                html: errorMessages,
                                icon: 'error',
                                confirmButtonText: 'OK',
                                customClass: {
                                    confirmButton: 'btn btn-danger'
                                },
                                buttonsStyling: false
                            });
                        }
                    });
                } else {
                    $('.updateForm').addClass('was-validated');
                }
            });
        });
    </script>
</body>
</html>