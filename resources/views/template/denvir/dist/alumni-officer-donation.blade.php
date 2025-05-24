<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donations Management | Alumni Tracer</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --success: #28a745;
            --danger: #dc3545;
            --warning: #ffc107;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        .donation-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .donation-img:hover {
            transform: scale(1.8);
            z-index: 100;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .status-badge {
            font-size: 0.8rem;
            padding: 5px 10px;
        }

        .nav-pills .nav-link.active {
            background-color: var(--primary);
        }

        .nav-pills .nav-link {
            color: var(--primary);
        }

        .action-btn {
            width: 30px;
            height: 30px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 0 3px;
        }

        .receipt-preview {
            max-width: 100%;
            max-height: 300px;
            display: block;
            margin: 10px auto;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">


            <!-- Main Content -->
            <main class="col-md-0 ms-sm-auto col-lg-100 px-md-4 py-4">
                <!-- Header -->
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Donations Management</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <a href="/officer" class="btn btn-outline-secondary me-2">
                            <i class="fas fa-home me-1"></i> Dashboard
                        </a>
                        <div class="btn-group me-2">
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-download me-1"></i> Export
                            </button>
                            <button class="btn btn-sm btn-primary">
                                <i class="fas fa-plus me-1"></i> New Donation
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Status Tabs -->
                <ul class="nav nav-pills mb-4" id="donationTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pending-tab" data-bs-toggle="pill" data-bs-target="#pending"
                            type="button" role="tab">
                            <i class="fas fa-clock me-1"></i> Pending
                            <span
                                class="badge bg-warning text-dark ms-1">{{ $donations->where("is_Verify", "false")->count() }}</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="approved-tab" data-bs-toggle="pill" data-bs-target="#approved"
                            type="button" role="tab">
                            <i class="fas fa-check-circle me-1"></i> Approved
                            <span
                                class="badge bg-success ms-1">{{ $donations->where("is_Verify", "true")->count() }}</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="rejected-tab" data-bs-toggle="pill" data-bs-target="#rejected"
                            type="button" role="tab">
                            <i class="fas fa-times-circle me-1"></i> Rejected
                            <span
                                class="badge bg-danger ms-1">{{ $donations->where("is_Verify", "rejected")->count() }}</span>
                        </button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="donationTabsContent">
                    <!-- Pending Tab -->
                    <div class="tab-pane fade show active" id="pending" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover align-middle">
                                        <thead>
                                            <tr>
                                                <th width="80px">Receipt</th>
                                                <th>Donor</th>
                                                <th>Amount &#8369;</th>
                                                <th>Date</th>
                                                <th>Payment Method</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($donations as $donation)
                                                @if($donation->is_Verify !== "false")
                                                    @continue
                                                @endif
                                                <tr>
                                                    <form method="Post"
                                                        action="/alumni-officer/update_donation/{{ $donation->id }}">
                                                        @csrf

                                                        <td>
                                                            <img src="https://via.placeholder.com/150?text=Receipt+1"
                                                                class="donation-img" data-bs-toggle="modal"
                                                                data-bs-target="#receiptModal"
                                                                data-bs-img="https://via.placeholder.com/600?text=Receipt+1">
                                                        </td>
                                                        <td>
                                                            <strong>{{ $donation->user->full_name  }}</strong><br>
                                                            <small class="text-muted">{{ $donation->user->degree  }}
                                                                {{ $donation->user->graduation_year  }}</small>
                                                        </td>
                                                        <td>


                                                            <input type="number" name="amount"
                                                                class="form-control form-control-sm" step="0.01" min="0">
                                                        </td>
                                                        </td>
                                                        <td>{{ $donation->updated_at->format('F j, Y') }}</td>
                                                        <td>{{ $donation->payment_method }}</td>
                                                        <td>
                                                            <button type="submit" class="btn btn-sm btn-success action-btn"
                                                                title="Approve">
                                                                <i class="fas fa-check"></i>
                                                            </button>
                                                            <button class="btn btn-sm btn-danger action-btn" title="Reject">
                                                                <i class="fas fa-times"></i>
                                                            </button>
                                                            <button class="btn btn-sm btn-primary action-btn"
                                                                title="View Details">
                                                                <i class="fas fa-eye"></i>
                                                            </button>
                                                        </td>
                                                    </form>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Approved Tab -->
                    <div class="tab-pane fade" id="approved" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover align-middle">
                                        <thead>
                                            <tr>
                                                <th width="80px">Receipt</th>
                                                <th>Donor</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($donations as $donation)
                                                @if($donation->is_Verify !== "true")
                                                    @continue
                                                @endif

                                                <tr>
                                                    <td>
                                                        <img src="https://via.placeholder.com/150?text=Receipt+3"
                                                            class="donation-img" data-bs-toggle="modal"
                                                            data-bs-target="#receiptModal"
                                                            data-bs-img="https://via.placeholder.com/600?text=Receipt+3">
                                                    </td>
                                                    <td>
                                                        <strong>{{ $donation->user->full_name }}</strong><br>
                                                        <small
                                                            class="text-muted">{{ $donation->user->degree }} {{ $donation->user->graduation_year }}</small>
                                                    </td>
                                                    <td>&#8369;{{ $donation->amount }}</td>
                                                    <td>{{ $donation->updated_at->format('F j, Y') }}</td>
                                                    <td><span class="badge status-badge bg-success">Verified</span></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-primary action-btn" title="View">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-secondary action-btn" title="Receipt">
                                                            <i class="fas fa-file-download"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Rejected Tab -->
                    <div class="tab-pane fade" id="rejected" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover align-middle">
                                        <thead>
                                            <tr>
                                                <th width="80px">Receipt</th>
                                                <th>Donor</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>Reason</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="https://via.placeholder.com/150?text=Receipt+4"
                                                        class="donation-img" data-bs-toggle="modal"
                                                        data-bs-target="#receiptModal"
                                                        data-bs-img="https://via.placeholder.com/600?text=Receipt+4">
                                                </td>
                                                <td>
                                                    <strong>Sarah Johnson</strong><br>
                                                    <small class="text-muted">BS Education 2017</small>
                                                </td>
                                                <td>$300.00</td>
                                                <td>March 15, 2023</td>
                                                <td>Invalid receipt</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary action-btn" title="View">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-warning action-btn"
                                                        title="Re-evaluate">
                                                        <i class="fas fa-redo"></i>
                                                    </button>
                                                </td>
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

    <!-- Receipt Preview Modal -->
    <div class="modal fade" id="receiptModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Donation Receipt</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="receiptPreview" class="receipt-preview" src="" alt="Donation receipt">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">
                        <i class="fas fa-download me-1"></i> Download
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>