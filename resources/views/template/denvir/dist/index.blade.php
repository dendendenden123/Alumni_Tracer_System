<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Alumni Tracer System</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --accent: #1abc9c;
            --danger: #e74c3c;
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

        .stat-card {
            border-radius: 10px;
            transition: transform 0.3s;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .admin-badge {
            font-size: 0.75rem;
            padding: 3px 8px;
        }

        .encrypted-badge {
            background-color: #6c757d;
            cursor: help;
        }

        .user-role {
            font-size: 0.8rem;
            padding: 3px 8px;
            border-radius: 10px;
        }

        .role-admin {
            background-color: var(--danger);
            color: white;
        }

        .role-officer {
            background-color: var(--secondary);
            color: white;
        }

        .role-alumnus {
            background-color: var(--accent);
            color: white;
        }

        .security-settings {
            border-left: 4px solid var(--danger);
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
                        <small class="text-white-50">Admin Dashboard</small>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/job-tracking">
                                <i class="fas fa-briefcase"></i> Job Tracking
                            </a>
                        </li>
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
                            <a class="nav-link" href="/alumni-officer/export_donation">
                                <i class="fas fa-download"></i> Donation Record (PDF)
                            </a>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">
                                <i class="fas fa-sign-out-alt"></i> Log Out
                            </a>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <!-- Header -->
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Admin Overview</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-light position-relative">
                                <i class="fas fa-bell"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">4</span>
                            </button>
                            <button type="button" class="btn btn-sm btn-danger">
                                <i class="fas fa-user-shield me-1"></i> Super Admin
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card stat-card bg-primary text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="card-title">Total Alumni</h6>
                                        <h2 class="mb-0">{{ $users->count() }}</h2>
                                    </div>
                                    <i class="fas fa-users fa-2x opacity-50"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card bg-success text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="card-title">Total Donations</h6>
                                        <h2 class="mb-0">₱{{ $donations->sum("amount") }}</h2>
                                    </div>
                                    <i class="fas fa-briefcase fa-2x opacity-50"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card bg-warning text-dark">
                            <div class="card-body">
                                <a href="/alumni-officer/Manage_donation" class="text-decoration-none text-dark">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="card-title">Approved Testimonies</h6>
                                            <h2 class="mb-0">{{ $testomonies->where("id_Approved", "true")->count() }}
                                            </h2>
                                        </div>
                                        <i class="fas fa-shield-alt fa-2x opacity-50"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card bg-danger text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="card-title">Unemployed Alumni</h6>
                                        <h2 class="mb-0">{{ $users->where("status", "seeking")->count() }}</h2>
                                    </div>
                                    <i class="fas fa-exclamation-circle fa-2x opacity-50"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- User Management Table -->
                    <div class="col-lg-12 mb-4">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">All Users</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover align-middle">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Role</th>
                                                <th>Acounted Created</th>
                                                <th>Donation</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr id="{{ $user->id }}">
                                                    <td>
                                                        <strong>{{ $user->full_name }}</strong><br>
                                                        <small class="text-muted">{{ $user->email }}</small>
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="user-role 
                                                                                                                                                                                                                                                                          @if($user->role == "Admin") role-admin
                                                                                                                                                                                                                                                                          @elseif($user->role == "Officer") role-officer
                                                                                                                                                                                                                                                                              @else role-alumnus 
                                                                                                                                                                                                                                                                         @endif">
                                                            @if($user->role == "Admin") Admin
                                                            @elseif($user->role == "Officer") Alumni Officer
                                                                @else Alumnus
                                                            @endif
                                                        </span>
                                                    </td>
                                                    <td>{{ $user->created_at->format("M d Y") }}</td>
                                                    <td><span
                                                            class="badge {{$donations->where("user_id", $user->id)->sum("amount") > 0 ? 'bg-success' : 'bg-secondary' }}">₱{{ $donations->where("user_id", $user->id)->sum("amount") }}</span>
                                                    </td>
                                                    <td>
                                                        <a href="user/edit/{{ $user->id }}"><button
                                                                class="btn btn-sm btn-outline-secondary" title="Edit">
                                                                <i class="fas fa-edit"></i>
                                                            </button> </a>
                                                        <form action="user/delete/{{ $user->id }}" class="delete-form"
                                                            method="POST" style="display: inline;">
                                                            @csrf
                                                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                                                title="Delete User">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
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



        $(document).ready(function () {
            $('.delete-form').on('submit', function (e) {
                e.preventDefault();
                const url = $(this).attr('action');
                const data = $(this).serialize();
                const matches = url.match(/\d+/g); // Finds all sequences of digits
                const userId = matches ? matches[matches.length - 1] : null;
                sendRequest(url, data, userId);//delete
            });
        });

        function sendRequest(url, data, userId) {
            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                success: function (response) {
                    // Handle success response
                    Swal.fire({
                        title: 'Success!',
                        text: 'User deleted successfully',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        // Remove tr that has an id of userId
                        $(`tbody #${userId}`).remove();
                    });
                },
                error: function (xhr, status, error) {
                    // Handle error response
                    alert('Error deleting user' + error);
                }
            });
        }
    </script>

</body>

</html>