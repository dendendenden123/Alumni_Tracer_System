<x-defaultLayout>
    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form method="POST" class="updateForm">
                                @csrf
                                @method('POST')
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="full-name-column">Full Name</label>
                                            <input type="text" id="full-name-column" class="form-control"
                                                placeholder="Full Name" name="full_name" value="{{ $user->full_name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="phone-number-column">Phone Number</label>
                                            <input type="text" id="phone-number-column" class="form-control"
                                                placeholder="Phone Number" name="phone_number"
                                                value="{{ $user->phone_number }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="dob-year-column">Date of Birth</label>
                                            <input type="text" id="dob-year-column" class="form-control"
                                                placeholder="Year" name="dob" value="{{ $user->dob }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="address-floating">Address</label>
                                            <input type="text" id="address-floating" class="form-control" name="address"
                                                placeholder="Address" value="{{ $user->address }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="degree-column">Degree</label>
                                            <input type="text" id="degree-column" class="form-control" name="degree"
                                                placeholder="Degree" value="{{ $user->degree }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="graduation-year-column">Graduation Year</label>
                                            <input type="number" id="graduation-year-column" class="form-control"
                                                name="graduation_year" placeholder="Graduation Year"
                                                value="{{ $user->graduation_year }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="job-title-column">Job Title</label>
                                            <input type="text" id="job-title-column" class="form-control"
                                                name="job_title" placeholder="Job Title" value="{{ $user->job_title }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">Company</label>
                                            <input type="text" id="company-column" class="form-control" name="company"
                                                placeholder="Company" value="{{ $user->company }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="role-column">Role</label>
                                            <select id="role-column" class="form-control" name="role">
                                                <option value="Admin" {{ $user->role == 'Admin' ? 'selected' : '' }}>Admin
                                                </option>
                                                <option value="Officer" {{ $user->role == 'Officer' ? 'selected' : '' }}>
                                                    Officer</option>
                                                <option value="Alumnus" {{ $user->role == 'Alumnus' ? 'selected' : '' }}>
                                                    Alumnus</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-column">Email</label>
                                            <input type="email" id="email-column" class="form-control" name="email"
                                                placeholder="Email" value="{{ $user->email }}">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="form-group col-12">
                                <div class="form-check">
                                    <div class="checkbox">
                                        <input type="checkbox" id="checkbox5" class="form-check-input" checked>
                                        <label for="checkbox5">Remember Me</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1 submit">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script>
        $(document).ready(function () {
            $('.submit').on('click', function (e) {
                e.preventDefault();
                $.ajax({
                    url: "/user/update/{{ $user->id }}",
                    type: 'POST',
                    data: $(".updateForm").serialize(),
                    success: function (response) {
                        // Handle success response
                        Swal.fire({
                            title: 'Success!',
                            text: 'User Updated successfully',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            // Redirect to the user list page or perform any other action
                            window.location.href = "/";
                        });
                    },
                    error: function (xhr, status, error) {
                        // Handle error response
                        alert('Error deleting user ' + error);
                    }
                });
            });
        });

    </script>
</x-defaultLayout>