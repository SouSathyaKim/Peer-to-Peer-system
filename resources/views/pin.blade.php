<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create PIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        body {
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
            width: 100%;
            max-width: 400px;
        }
        .form-container h2 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }
        .form-container .form-control {
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s, transform 0.3s;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        .alert {
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
        }
        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
        .alert-error {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="form-container animate__animated animate__fadeInUp">
        <h2>Create PIN</h2>
        @if (session('success'))
            <div class="alert alert-success animate__animated animate__fadeInDown">{{ session('success') }}</div>
        @elseif (session('error'))
            <div class="alert alert-error animate__animated animate__fadeInDown">{{ session('error') }}</div>
        @endif
        <form action="{{ route('pin.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="pin" class="form-label">Enter PIN:</label>
                <input type="password" id="pin" name="pin" pattern="\d{4}" title="PIN must be a 4-digit number" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="pin_confirmation" class="form-label">Confirm PIN:</label>
                <input type="password" id="pin_confirmation" name="pin_confirmation" pattern="\d{4}" title="PIN must be a 4-digit number" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Create PIN</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWld/H1IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq3CmJ2Azi85WmW6n3y8/s6mKobukQzA6l/p8lXZnaXf8X2V5D" crossorigin="anonymous"></script>
</body>
</html>
