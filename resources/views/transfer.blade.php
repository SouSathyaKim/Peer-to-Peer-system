<!DOCTYPE html>
<html>
<head>
    <title>Payment Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS for animation -->
    <style>
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container mt-5 fade-in">
    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @elseif (session('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif
        <div class="card">
            <div class="card-header">
                <h3>Transfer Form</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('transfer.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="pin">PIN:</label>
                        <input type="password" id="pin" name="pin" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount:</label>
                        <input type="text" id="amount" name="amount" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" id="description" name="description" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="transaction_type">Transaction Type:</label>
                        <select id="transaction_type" name="transaction_type" class="form-control" required>
                            <option value="Transfer">Transfer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="payment_method">Payment Method:</label>
                        <select id="payment_method" name="payment_method" class="form-control" required>
                            <option value="Credit Card">Credit Card</option>
                            <option value="PayPal">PayPal</option>
                            <option value="Bank Transfer">Bank Transfer</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Payment</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
