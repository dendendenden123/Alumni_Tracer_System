<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Records</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #4a6fa5;
            padding-bottom: 10px;
        }

        .header h1 {
            color: #2c3e50;
            margin-bottom: 5px;
        }

        .header p {
            color: #7f8c8d;
            margin-top: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }

        th {
            background-color: #4a6fa5;
            color: white;
            padding: 12px 15px;
            text-align: left;
            font-weight: 600;
        }

        td {
            padding: 10px 15px;
            border-bottom: 1px solid #e0e0e0;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        tr:hover {
            background-color: #f1f7fd;
        }

        .status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8em;
            font-weight: 600;
        }

        .verified {
            background-color: #d4edda;
            color: #155724;
        }

        .unverified {
            background-color: #fff3cd;
            color: #856404;
        }

        .amount {
            font-weight: 600;
            color: #2c3e50;
        }

        .footer {
            margin-top: 30px;
            text-align: right;
            font-size: 0.9em;
            color: #7f8c8d;
            border-top: 1px solid #eee;
            padding-top: 10px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Donation Records</h1>
        <p>Generated on <?php echo date('F j, Y'); ?></p>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Donor Name</th>
                <th>Occupation</th>
                <th>Amount(PHP)</th>
                <th>Payment Method</th>
                <th>Purpose</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample data - replace with PHP loop in actual implementation -->
            @foreach ($donations as $donation)
                <tr>
                    <td>{{ $donation->id }}</td>
                    <td>{{ $donation->user->full_name }}</td>
                    <td>{{ $donation->user->job_title }}</td>
                    <td class="amount">
                        {{ number_format($donation->amount, 2) }}
                    </td>
                    <td>{{ $donation->payment_method }}</td>
                    <td>{{ $donation->purpose }}</td>
                    <td>{{ $donation->updated_at->format("M d Y")}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        <p>Total Records: {{ $donations->count() }} | Total Amount: Php {{ $donations->sum("amount") }}</p>
    </div>
</body>

</html>