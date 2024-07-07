<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0f8ff;
            padding: 20px;
        }
        .table {
            margin-top: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .table th {
            background-color: #007bff;
            color: #fff;
        }
        .section-title {
            margin-top: 40px;
            font-size: 24px;
            color: #007bff;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center">Transaction History</h1>

    <h2 class="section-title">Payments</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Amount</th>
            <th>Description</th>
            <th>Transaction Type</th>
            <th>Payment Method</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($payments as $payment)
            <tr>
                <td>{{ $payment->id }}</td>
                <td>{{ $payment->amount }}</td>
                <td>{{ $payment->description }}</td>
                <td>{{ $payment->transaction_type }}</td>
                <td>{{ $payment->payment_method }}</td>
                <td>{{ $payment->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <h2 class="section-title">Transfers</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Amount</th>
            <th>Description</th>
            <th>Transaction Type</th>
            <th>Payment Method</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($transfers as $transfer)
            <tr>
                <td>{{ $transfer->id }}</td>
                <td>{{ $transfer->amount }}</td>
                <td>{{ $transfer->description }}</td>
                <td>{{ $transfer->transaction_type }}</td>
                <td>{{ $transfer->payment_method }}</td>
                <td>{{ $transfer->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <h2 class="section-title">Deposits</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Amount</th>
            <th>Description</th>
            <th>Payment Method</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($deposits as $deposit)
            <tr>
                <td>{{ $deposit->id }}</td>
                <td>{{ $deposit->amount }}</td>
                <td>{{ $deposit->description }}</td>
                <td>{{ $deposit->payment_method }}</td>
                <td>{{ $deposit->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <h2 class="section-title">Loans</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Loan Purpose</th>
            <th>Loan Amount</th>
            <th>Occupation</th>
            <th>Company Name</th>
            <th>Monthly Income</th>
            <th>Monthly Liabilities</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($applyLoans as $loan)
            <tr>
                <td>{{ $loan->id }}</td>
                <td>{{ $loan->loanPurpose }}</td>
                <td>{{ $loan->loanAmount }}</td>
                <td>{{ $loan->occupation }}</td>
                <td>{{ $loan->companyName }}</td>
                <td>{{ $loan->monthlyIncome }}</td>
                <td>{{ $loan->monthlyLiabilities }}</td>
                <td>{{ $loan->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWld/H1IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq3CmJ2Azi85WmW6n3y8/s6mKobukQzA6l/p8lXZnaXf8X2V5D" crossorigin="anonymous"></script>
</body>
</html> -->
