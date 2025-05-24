<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Tracer System - Officer Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --accent: #1abc9c;
            --light: #ecf0f1;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        .sidebar {
            background-color: var(--primary);
            min-height: 100vh;
            color: white;
        }

        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 5px;
            border-radius: 5px;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .sidebar .nav-link i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        .stat-card {
            border-radius: 10px;
            transition: transform 0.3s;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-card .icon {
            font-size: 2rem;
            opacity: 0.7;
        }

        .card-primary {
            background-color: var(--secondary);
            color: white;
        }

        .card-success {
            background-color: var(--accent);
            color: white;
        }

        .card-warning {
            background-color: #f39c12;
            color: white;
        }

        .privacy-badge {
            cursor: pointer;
        }

        .encrypted-field {
            position: relative;
        }

        .encrypted-field::after {
            content: "🔒";
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }

        .activity-item {
            border-left: 3px solid var(--secondary);
            padding-left: 15px;
            margin-bottom: 15px;
        }

        .progress {
            height: 10px;
        }

        .testimonial-card {
            border-left: 4px solid var(--accent);
        }

        .table-responsive {
            overflow-x: auto;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 d-md-block sidebar collapse bg-primary">
                <div class="position-sticky pt-3">
                    <div class="text-center mb-4">
                        <h4 class="text-white">Alumni Tracer</h4>
                        <small class="text-white-50">Officer Dashboard</small>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-users"></i> Alumni Management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-briefcase"></i> Job Tracking
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-comment"></i> Testimonials
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/alumni-officer/Manage_donation">
                                <i class="fas fa-donate"></i> Donations
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <!-- Header -->
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard Overview</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                <i class="fas fa-bell"></i>
                                <span class="badge bg-danger ms-1">3</span>
                            </button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                <i class="fas fa-user-circle"></i> Officer
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card stat-card card-primary">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="card-title">Total Alumni</h6>
                                        <h2 class="mb-0">1,240</h2>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card stat-card card-success">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="card-title">Active Job Postings</h6>
                                        <h2 class="mb-0">28</h2>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card stat-card card-warning">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="card-title">Donations</h6>
                                        <h2 class="mb-0">$5,200</h2>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-donate"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Alumni Privacy Toggle -->
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Privacy Controls</h5>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="privacyToggle" checked>
                                    <label class="form-check-label" for="privacyToggle">Enable Privacy</label>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">When enabled, contact details are hidden from public view.</p>
                                <span class="badge bg-success privacy-badge">
                                    <i class="fas fa-lock me-1"></i> Currently Active
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Donation Progress -->
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Annual Donation Progress</h5>
                            </div>
                            <div class="card-body">
                                <h4>$5,200 of $20,000</h4>
                                <div class="progress mt-2">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 26%;"
                                        aria-valuenow="26" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <button class="btn btn-sm btn-outline-primary mt-3">
                                    <i class="fas fa-download me-1"></i> Export Report
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Recent Activity</h5>
                            </div>
                            <div class="card-body">
                                <div class="activity-item">
                                    <h6>New Testimonial Submission</h6>
                                    <p class="text-muted small">John Doe (BS Computer Science 2020)</p>
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn-outline-success">Approve</button>
                                        <button class="btn btn-outline-danger">Reject</button>
                                    </div>
                                </div>
                                <div class="activity-item">
                                    <h6>Job Status Updated</h6>
                                    <p class="text-muted small">Jane Smith is now at <strong>Google</strong> as Senior
                                        Developer</p>
                                </div>
                                <div class="activity-item">
                                    <h6>New Donation Received</h6>
                                    <p class="text-muted small">$500 from Michael Johnson</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Alumni Table Preview -->
                    <div class="col-lg-6 mb-4">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Recent Alumni Updates</h5>
                                <a href="#" class="btn btn-sm btn-outline-primary">View All</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Degree</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Maria Garcia</td>
                                                <td>BS Nursing</td>
                                                <td><span class="badge bg-success">Employed</span></td>
                                                <td><button class="btn btn-sm btn-outline-secondary">View</button></td>
                                            </tr>
                                            <tr>
                                                <td class="encrypted-field">Robert Chen</td>
                                                <td>BS Computer Science</td>
                                                <td><span class="badge bg-warning text-dark">Job Hunting</span></td>
                                                <td><button class="btn btn-sm btn-outline-secondary">View</button></td>
                                            </tr>
                                            <tr>
                                                <td>Sarah Johnson</td>
                                                <td>MBA</td>
                                                <td><span class="badge bg-info">Promoted</span></td>
                                                <td><button class="btn btn-sm btn-outline-secondary">View</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle privacy badge color
        document.getElementById('privacyToggle').addEventListener('change', function () {
            const badge = document.querySelector('.privacy-badge');
            if (this.checked) {
                badge.classList.remove('bg-secondary');
                badge.classList.add('bg-success');
                badge.innerHTML = '<i class="fas fa-lock me-1"></i> Currently Active';
            } else {
                badge.classList.remove('bg-success');
                badge.classList.add('bg-secondary');
                badge.innerHTML = '<i class="fas fa-unlock me-1"></i> Privacy Disabled';
            }
        });
    </script>
</body>

</html>