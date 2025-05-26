<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Tracer - Testimonial Approval</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        :root {
            --primary-color: #34495e;
            --secondary-color: #3498db;
            --success-color: #2ecc71;
            --danger-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #34495e;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background-color: var(--secondary-color);
            color: white;
            padding: 15px 0;
            margin-bottom: 30px;
            box-shadow: var(--shadow);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        .page-title {
            margin-bottom: 20px;
            color: var(--secondary-color);
            border-bottom: 2px solid var(--primary-color);
            padding-bottom: 10px;
        }

        .testimonial-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: var(--shadow);
            padding: 20px;
            margin-bottom: 20px;
            position: relative;
        }

        .testimonial-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            align-items: center;
        }

        .alumni-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .alumni-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--light-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--dark-color);
            font-weight: bold;
            font-size: 20px;
        }

        .alumni-name {
            font-weight: bold;
            font-size: 18px;
        }

        .alumni-batch {
            color: #7f8c8d;
            font-size: 14px;
        }

        .submission-date {
            color: #7f8c8d;
            font-size: 14px;
        }

        .testimonial-content {
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .testimonial-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-approve {
            background-color: var(--success-color);
            color: white;
        }

        .btn-approve:hover {
            background-color: #27ae60;
        }

        .btn-reject {
            background-color: var(--danger-color);
            color: white;
        }

        .btn-reject:hover {
            background-color: #c0392b;
        }

        .btn-edit {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-edit:hover {
            background-color: #2980b9;
        }

        .status-badge {
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
        }

        .status-pending {
            background-color: #f39c12;
            color: white;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            gap: 5px;
        }

        .pagination-btn {
            padding: 8px 12px;
            border: 1px solid #ddd;
            background-color: white;
            cursor: pointer;
            border-radius: 4px;
        }

        .pagination-btn.active {
            background-color: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        .pagination-btn:hover:not(.active) {
            background-color: #f1f1f1;
        }

        .no-testimonials {
            text-align: center;
            padding: 40px;
            background-color: white;
            border-radius: 8px;
            box-shadow: var(--shadow);
            color: #7f8c8d;
        }

        .search-filter {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            gap: 15px;
        }

        .search-box {
            flex-grow: 1;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .filter-select {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: white;
        }

        @media (max-width: 768px) {
            .testimonial-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .search-filter {
                flex-direction: column;
            }

            .testimonial-actions {
                justify-content: flex-start;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="container header-content">

            <div class="logo">Alumni Tracer System</div>
            <div class="user-info">
                <a href="javascript:history.back()" class="dashboard-link"
                    style="color: #fff; text-decoration: none; font-size: 16px; margin-right: 20px;">
                    <i class="fas fa-arrow-left" style="margin-right: 6px;"></i> Back
                </a>
                <span>{{ auth()->user()->full_name }}</span>
                <img src="{{ asset('storage/images/' . auth()->user()->profilePicture) }}" alt="Profile Picture"
                    class="user-avatar" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">

            </div>
        </div>
    </header>

    <main class="container">
        <h1 class="page-title">Testimonial Approvals</h1>

        <div class="search-filter">
            <input type="text" class="search-box" placeholder="Search testimonials...">
            <select class="filter-select">
                <option value="all">All Statuses</option>
                <option value="pending" selected>Pending</option>
                <option value="approved">Approved</option>
                <option value="rejected">Rejected</option>
            </select>
        </div>

        <div id="testimonials-container">
            @foreach ($testimonies as $testimony)
                <!-- Testimonial Card 1 -->
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="alumni-info">
                            <div class="alumni-avatar">
                                <img src="{{ asset('storage/images/' . $testimony->user->profilePicture) }}"
                                    alt="Profile Picture"
                                    style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                            </div>
                            <div>
                                <div class="alumni-name">{{ $testimony->user->full_name }}</div>
                                <div class="alumni-batch">{{ $testimony->user->degree }}, Class of
                                    {{ $testimony->user->graduation_year }}
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="status-badge 
                                            @if($testimony->is_Approved == "true") 
                                                status-approved
                                            @elseif($testimony->is_Approved == "false") 
                                                status-pending
                                            @else 
                                                status-rejected
                                            @endif " id="{{ $testimony->id }}">

                                @if($testimony->is_Approved == "true")
                                    Approved
                                @elseif($testimony->is_Approved == "false")
                                    Pending Review
                                @else
                                    Rejected
                                @endif
                            </span>
                            <div class="submission-date">Submitted: {{ $testimony->created_at->format("M d Y") }}</div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <p>"{{ $testimony->content }}"</p>
                    </div>

                    <div class="testimonial-actions">
                        <button class="btn btn-reject"><i class="fas fa-times"></i>
                            Reject</button>
                        <button class="btn btn-approve"><i class="fas fa-check"></i>
                            Approve</button>
                    </div>
                </div>

            @endforeach
        </div>

        <div class="pagination">
            <button class="pagination-btn"><i class="fas fa-angle-left"></i></button>
            <button class="pagination-btn active">1</button>
            <button class="pagination-btn">2</button>
            <button class="pagination-btn">3</button>
            <button class="pagination-btn"><i class="fas fa-angle-right"></i></button>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Approve button functionality
            document.querySelectorAll('.btn-approve').forEach(button => {
                button.addEventListener('click', function () {
                    const card = this.closest('.testimonial-card');
                    const statusBadge = card.querySelector('.status-badge');

                    statusBadge.textContent = 'Approved';
                    statusBadge.className = 'status-badge';
                    statusBadge.classList.add('status-approved');

                    // In a real app, you would send an AJAX request to update the status
                    updateTestimonialStatus(statusBadge.id, "true");

                    // Optional: Remove the card after approval
                    // card.style.display = 'none';
                });
            });

            // Reject button functionality
            document.querySelectorAll('.btn-reject').forEach(button => {
                button.addEventListener('click', function () {
                    const card = this.closest('.testimonial-card');
                    const statusBadge = card.querySelector('.status-badge');

                    statusBadge.textContent = 'Rejected';
                    statusBadge.className = 'status-badge';
                    statusBadge.classList.add('status-rejected');


                    updateTestimonialStatus(statusBadge.id, "Rejected");

                    // Optional: Remove the card after rejection
                    // card.style.display = 'none';
                });
            });

            // Search functionality
            const searchBox = document.querySelector('.search-box');
            searchBox.addEventListener('input', function () {
                const searchTerm = this.value.toLowerCase();
                const cards = document.querySelectorAll('.testimonial-card');

                cards.forEach(card => {
                    const text = card.textContent.toLowerCase();
                    if (text.includes(searchTerm)) {
                        card.style.display = '';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });

            // Filter functionality
            const filterSelect = document.querySelector('.filter-select');
            filterSelect.addEventListener('change', function () {
                const filterValue = this.value;
                const cards = document.querySelectorAll('.testimonial-card');

                cards.forEach(card => {
                    const status = card.querySelector('.status-badge').textContent.toLowerCase();

                    if (filterValue === 'all' || status.includes(filterValue)) {
                        card.style.display = '';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // AJAX format for approving/rejecting testimonial
        function updateTestimonialStatus(testimonyId, status) {
            $.ajax({
                url: '/testimony/update/' + testimonyId,
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    is_Approved: status
                },
                success: function (response) {
                    // Optionally handle success (e.g., show a toast, reload, etc.)
                    // location.reload();
                },
                error: function (xhr) {
                    alert('Error updating status: ' + response.error);
                }
            });
        }
    </script>
</body>

</html>