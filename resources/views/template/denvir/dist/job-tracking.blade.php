<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Tracking | Alumni Tracer System</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        :root {
            --primary: #4e73df;
            --secondary: #858796;
            --success: #1cc88a;
            --info: #36b9cc;
            --warning: #f6c23e;
            --danger: #e74a3b;
            --light: #f8f9fc;
            --dark: #5a5c69;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fc;
        }

        .sidebar {
            background-color: var(--dark);
            min-height: 100vh;
            color: white;
        }

        .navbar {
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
        }

        .card {
            border: none;
            border-radius: 0.5rem;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.1);
        }

        .card-header {
            background-color: #f8f9fc;
            border-bottom: 1px solid #e3e6f0;
            font-weight: 600;
        }

        .status-badge {
            font-size: 0.75rem;
            padding: 0.35rem 0.65rem;
            border-radius: 0.25rem;
            font-weight: 600;
        }

        .badge-employed {
            background-color: rgba(28, 200, 138, 0.1);
            color: var(--success);
        }

        .badge-seeking {
            background-color: rgba(246, 194, 62, 0.1);
            color: var(--warning);
        }

        .badge-promoted {
            background-color: rgba(54, 185, 204, 0.1);
            color: var(--info);
        }

        .encrypted-badge {
            background-color: rgba(133, 135, 150, 0.1);
            color: var(--secondary);
            cursor: help;
        }

        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid #d1d3e2;
            border-radius: 0.35rem;
            padding: 0.375rem 0.75rem;
        }

        .dataTables_wrapper .dataTables_length select {
            border: 1px solid #d1d3e2;
            border-radius: 0.35rem;
        }

        .job-table th {
            background-color: #f8f9fc;
            font-weight: 600;
            color: var(--dark);
        }

        .action-btn {
            width: 30px;
            height: 30px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .avatar-sm {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            object-fit: cover;
        }

        .chart-container {
            height: 300px;
            position: relative;
        }

        .nav-pills .nav-link.active {
            background-color: var(--primary);
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->


            <!-- Main Content -->
            <main class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
                <!-- Top Navigation -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <div class="container-fluid justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" onclick="history.back(); return false;" class="nav-link d-flex align-items-center">
                                    <i class="fas fa-arrow-left me-1"></i>
                                    <span class="fw-bold text-primary">Back</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                    <span class="me-2 d-none d-lg-inline text-gray-600 small">Admin User</span>
                                    <img class="img-profile rounded-circle"
                                        src="https://ui-avatars.com/api/?name=Admin+User&background=4e73df&color=fff"
                                        width="32">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i> Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i> Settings
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i> Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Job Tracking Dashboard</h1>
                    
                </div>

                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Total Alumni</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $users->count() }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Employed</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $users->where("status", "employed")->count() }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-briefcase fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Job Seekers</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $users->where("status", "seeking")->count() }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-search fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            Promotions</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $users->where("status", "promoted")->count() }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-chart-line fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->
                <div class="row">
                    <!-- Job Listings Table -->
                    <div class="col-lg-8 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Recent Job Updates</h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow">
                                        <a class="dropdown-item" href="#">Export Data</a>
                                        <a class="dropdown-item" href="#">Refresh</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Settings</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered job-table" id="dataTable" width="100%"
                                        cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Alumni</th>
                                                <th>Job Title</th>
                                                <th>Company</th>
                                                <th>Status</th>
                                                <th>Last Update</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users->sortByDesc("updated_at") as $user)
                                                <tr id="{{ $user->id }}">
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{ asset('storage/images/' . $user->profilePicture) }}"
                                                                class=" avatar-sm me-2">
                                                            <div>
                                                                <div class="fw-bold">{{ $user->full_name }}</div>
                                                                <div class="text-muted small">{{ $user->degree }}
                                                                    {{  $user->year_graduated }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td> {{  $user->job_title }}</td>
                                                    <td> {{  $user->company }}</td>
                                                    <td><span class="status-badge 
                                                    @switch($user->status)
                                                        @case('employed')
                                                            badge-employed
                                                        @break
                                                        @case('seeking')
                                                            badge-seeking
                                                        @break
                                                        @case('promoted')
                                                            badge-promoted
                                                        @break
                                                        @default
                                                            badge-secondary
                                                    @endswitch
                                                    ">
                                                    @switch($user->status)
                                                        @case('employed')
                                                            Employed
                                                        @break
                                                        @case('seeking')
                                                            Seeking
                                                        @break
                                                        @case('promoted')
                                                            Promoted
                                                        @break
                                                        @default

                                                    @endswitch
                                                    </span></td>
                                                    <td>{{$user->updated_at->format("M d Y") }}</td>
                                                    <td>
                                                        
                                                        <button class="btn btn-sm btn-outline-success action-btn"
                                                            title="Edit" @if($user->role == "Admin" && auth()->user()->role != "Admin") disabled @endif>
                                                            <a href="/user/edit/{{ $user->id }}">
                                                            <i class="fas fa-edit"></i>
                                                            </a>
                                                        </button>

                                                        <form action="user/delete/{{ $user->id }}" class="delete-form"
                                                            method="POST" style="display: inline;">
                                                            @csrf
                                                        <button type="submit" class="btn btn-sm btn-outline-danger action-btn"
                                                            title="Delete" @if($user->id == auth()->user()->id || $user->role == "Admin") disabled @endif>
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

                    <!-- Job Status Distribution -->
                    <div class="col-lg-4 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Employment Status</h6>
                            </div>
                            <div class="card-body">
                                <div class="chart-container">
                                    <canvas id="jobStatusChart"></canvas>
                                </div>
                                <div class="mt-4 text-center small">
                                    <span class="me-2">
                                        <i class="fas fa-circle text-success"></i> Employed
                                    </span>
                                    <span class="me-2">
                                        <i class="fas fa-circle text-warning"></i> Seeking
                                    </span>
                                    <span class="me-2">
                                        <i class="fas fa-circle text-info"></i> Promoted
                                    </span>
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
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Initialize DataTable
        $(document).ready(function () {
            $('#dataTable').DataTable({
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search alumni...",
                }
            });

            // Job Status Chart
            var ctx = document.getElementById('jobStatusChart').getContext('2d');
            var jobStatusChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Employed', 'Job Seeking', 'Recently Promoted'],
                    datasets: [{
                        data: [{{ $users->where("status", "employed")->count() }}, {{ $users->where("status", "seeking")->count() }}, {{ $users->where("status", "promoted")->count() }}],
                        backgroundColor: ['#1cc88a', '#f6c23e', '#36b9cc'],
                        hoverBackgroundColor: ['#17a673', '#dda20a', '#2c9faf'],
                        hoverBorderColor: "rgba(234, 236, 244, 1)",
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    plugins: {
                        tooltip: {
                            backgroundColor: "rgb(255,255,255)",
                            bodyColor: "#858796",
                            borderColor: '#dddfeb',
                            borderWidth: 1,
                            padding: 15,
                            displayColors: false,
                            caretPadding: 10,
                        },
                        legend: {
                            display: false
                        },
                    },
                    cutout: '80%',
                },
            });

            // Encrypted field tooltip
            $('[title="Encrypted"]').tooltip();
        });
    </script>
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