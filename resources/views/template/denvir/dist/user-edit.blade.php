<x-defaultLayout>
    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="user/update/{{ $user->id }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="full-name-column">Full Name</label>
                                            <input type="text" id="full-name-column" class="form-control"
                                                placeholder="Full Name" name="full_name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="phone-number-column">Phone Number</label>
                                            <input type="number" id="phone-number-column" class="form-control"
                                                placeholder="Phone Number" name="phone_number">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="dob-year-column">Date of Birth</label>
                                            <input type="number" id="dob-year-column" class="form-control"
                                                placeholder="Year" name="dob" min="1900" max="2099" step="1">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="address-floating">Address</label>
                                            <input type="text" id="address-floating" class="form-control" name="address"
                                                placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="degree-column">Degree</label>
                                            <input type="text" id="degree-column" class="form-control" name="degree"
                                                placeholder="Degree">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="graduation-year-column">Graduation Year</label>
                                            <input type="number" id="graduation-year-column" class="form-control"
                                                name="graduation_year" placeholder="Graduation Year">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="job-title-column">Job Title</label>
                                            <input type="text" id="job-title-column" class="form-control"
                                                name="job_title" placeholder="Job Title">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">Company</label>
                                            <input type="text" id="company-column" class="form-control" name="company"
                                                placeholder="Company">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="role-column">Role</label>
                                            <select id="role-column" class="form-control" name="role">
                                                <option value="Admin">Admin</option>
                                                <option value="Officer">Officer</option>
                                                <option value="Alumnus">Alumnus</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-column">Email</label>
                                            <input type="email" id="email-column" class="form-control" name="email"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <div class="form-check">
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox5" class="form-check-input" checked>
                                                <label for="checkbox5">Remember Me</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
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
</x-defaultLayout>