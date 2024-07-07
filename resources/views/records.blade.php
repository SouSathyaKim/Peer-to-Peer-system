<!DOCTYPE html>
<html>
<head>
    <title>Records</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start; /* Align items at the start of the page */
            min-height: 100vh;
            padding-bottom: 20px; /* Add padding to the bottom */
        }
        .container {
            width: 80%;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            padding: 20px;
            margin-bottom: 20px;
        }
        h1 {
            text-align: center;
            margin: 0;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            margin-bottom: 20px; /* Add margin to the bottom of each table */
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #009879;
            color: white;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f3f3f3;
        }
        tr:hover {
            background-color: #f1f1f1;
            transition: background-color 0.3s ease;
        }
        thead {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .pagination {
            display: flex;
            justify-content: center;
            padding: 20px;
        }
        .pagination a {
            margin: 0 5px;
            padding: 8px 16px;
            text-decoration: none;
            background-color: #009879;
            color: white;
            border-radius: 4px;
        }
        .pagination a:hover {
            background-color: #006f56;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Withdraw & Transfer Records</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>Amount</th>
                    <th>Transaction Type</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $payment)
                    <tr>
                        <td>{{ $payment->id }}</td>
                        <td>{{ $payment->user_id }}</td>
                        <td>${{ number_format($payment->amount, 2) }}</td>
                        <td>{{ $payment->transaction_type }}</td>
                        <td>{{ $payment->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination">
            {{ $payments->links() }}
        </div>
    </div>

    <div class="container">
        <h1>Deposit Records</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>Amount</th>
                    <th>Deposit Method</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deposits as $deposit)
                    <tr>
                        <td>{{ $deposit->id }}</td>
                        <td>{{ $deposit->user_id }}</td>
                        <td>${{ number_format($deposit->amount, 2) }}</td>
                        <td>{{ $deposit->deposit_method }}</td>
                        <td>{{ $deposit->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination">
            {{ $deposits->links() }}
        </div>
    </div>

    <div class="container">
        <h1>Loan Application Records</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Loan Amount</th>
                    <th>Loan Purpose</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($loans as $loan)
                    <tr>
                        <td>{{ $loan->id }}</td>
                        <td>{{ $loan->fullName }}</td>
                        <td>{{ $loan->email }}</td>
                        <td>${{ number_format($loan->loanAmount, 2) }}</td>
                        <td>{{ $loan->loanPurpose }}</td>
                        <td>{{ $loan->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination">
            {{ $loans->links() }}
        </div>
    </div>
</body>
</html>
