<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Alumni Tracer System - Officer Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
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

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-briefcase"></i> Job Tracking
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="/testimony">
                                <i class="fas fa-comment"></i> Testimonials
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/alumni-officer/Manage_donation">
                                <i class="fas fa-donate"></i> Donations
                            </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="/job-tracking">
                                <i class="fas fa-briefcase"></i> Job Tracking
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
                                        <h2 class="mb-0">{{ $users->count() }}</h2>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a href="/testimony" class="text-reset text-decoration-none">
                            <div class="card stat-card card-success">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="card-title">Approved testimonies</h6>
                                            <h2 class="mb-0">{{ $testimonies->where("is_Approved", "true")->count() }}
                                            </h2>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-briefcase"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="/alumni-officer/Manage_donation" class="text-reset text-decoration-none">
                            <div class="card stat-card card-warning">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="card-title">Donations</h6>
                                            <h2 class="mb-0">₱{{ number_format($donation->sum("amount"), 2) }}</h2>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-donate"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <!-- Donation Progress -->
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Alumni Donation Rate</h5>
                            </div>
                            <div class="card-body">
                                <h4>{{ $donation->unique('user_id')->count() }} of {{ $users->count() }}</h4>
                                <div class="progress mt-2">
                                    <div class="progress-bar bg-success" role="progressbar"
                                        style="width: {{ ($donation->unique('user_id')->count() / ($users->count())) * 100 }}%;"
                                        aria-valuenow="26" aria-valuemin="0" aria-valuemax="100">
                                        {{ ($donation->unique('user_id')->count() / ($users->count())) * 100 }}%
                                    </div>
                                </div>
                                <button class="btn btn-sm btn-outline-primary mt-3">
                                   <a href="/alumni-officer/export_donation" ><i class="fas fa-download me-1"></i> Export Report</a>
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
                                @foreach ($testimonies->sortByDesc("updated_at") as $testimony)
                                    <div class="activity-item">
                                        <h6>{{$testimony->user->full_name}}</h6>

                                              @if ($testimony->is_Approved == "false")
                                           <p class="text-muted small">Posted new Testimony </p> 
                                        @elseif ($testimony->is_Approved == "true")
                                            <p class="text-muted small">The testimony  have been
                                                <strong>approved! ✅</strong> </p>
                                                @else
                                                 <p class="text-muted small">The testimony have been
                                            <strong>rejected. ❌</strong>
                                        </p>
                                        @endif


                                    </div>
                                @endforeach
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
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user->full_name }}</td>
                                                    <td>{{ $user->degree }}</td>
                                                    <td>
                                                        @if ($user->role == 'Admin')
                                                            <span class="badge bg-success">Admin</span>
                                                        @elseif ($user->role == 'Officer')
                                                            <span class="badge bg-warning text-dark">Officer</span>
                                                        @elseif ($user->role == 'Alumnus')
                                                            <span class="badge bg-info">Alumnus</span>
                                                        @endif
                                                    <td><a href="/profile/{{ $user->id }}"><button
                                                                class="btn btn-sm btn-outline-secondary">View</button></a>
                                                    </td>
                                                </tr>
                                            @endforeach
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
        $("#privacyToggle").on("click", function (e) {
            $.ajax({
                url: '/testimony/update/all',
                type: 'POST',
                data: $("#update_all").serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    // handle success
                    console.log(response);
                },
                error: function (xhr, status, error) {
                    // handle error
                    console.error(error);
                }
            });
        });

    </script>
</body>

</html>