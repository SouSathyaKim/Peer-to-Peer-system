<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        body {
            background-color: #f0f8ff;
        }
        .form-horizontal {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
        }
        .legend {
            color: #007bff;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s, transform 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
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
        .modal-content {
            animation: slideIn 0.5s ease-in-out;
        }
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form id="DepositForm" class="form-horizontal animate__animated animate__fadeInUp" action="{{ route('deposit.store') }}" method="POST">
                @csrf
                <fieldset>
                    <legend class="text-center legend">Deposit Information</legend>
                    @if (session('success'))
                        <div class="alert alert-success animate__animated animate__fadeInDown">{{ session('success') }}</div>
                    @elseif (session('error'))
                        <div class="alert alert-error animate__animated animate__fadeInDown">{{ session('error') }}</div>
                    @endif
                    <div class="form-group row mb-3 animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                        <label for="user_id" class="col-sm-4 col-form-label">User ID</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="user_id" name="user_id" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3 animate__animated animate__fadeInUp" style="animation-delay: 0.4s;">
                        <label for="amount" class="col-sm-4 col-form-label">Amount</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="amount" name="amount" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3 animate__animated animate__fadeInUp" style="animation-delay: 0.6s;">
                        <label for="description" class="col-sm-4 col-form-label">Description</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="description" name="description" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3 animate__animated animate__fadeInUp" style="animation-delay: 0.8s;">
                        <label for="deposit_method" class="col-sm-4 col-form-label">Deposit Method</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="deposit_method" name="deposit_method" required>
                        </div>
                    </div>
                </fieldset>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary w-100 animate__animated animate__fadeInUp" style="animation-delay: 1s;">Submit Deposit</button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="submitModal" tabindex="-1" aria-labelledby="submitModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body text-center">
                                <img src="https://s28.postimg.org/n1msg47n1/logo.png" class="img-rounded mb-3">
                                <h4>Thanks for your deposit.</h4>
                                <p>We try to be as responsive as possible. We'll get back to you soon.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWld/H1IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq3CmJ2Azi85WmW6n3y8/s6mKobukQzA6l/p8lXZnaXf8X2V5D" crossorigin="anonymous"></script>
</body>
</html>
