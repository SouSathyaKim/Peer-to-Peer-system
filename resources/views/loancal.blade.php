<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/loan.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Loan Calculator</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .heading {
            color: #343a40;
        }
        .input-group-text {
            background-color: #343a40;
            color: #ffffff;
            border: none;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #343a40;
        }
        .btn-dark {
            background-color: #343a40;
            border: none;
        }
        .btn-dark:hover {
            background-color: #23272b;
        }
        #loading {
            display: none;
        }
        #results {
            display: none;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-body text-center">
                <h1 class="heading display-5 pb-3">Loan Calculator</h1>
                <form id="loan-form">
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">USD</span>
                            </div>
                            <input type="number" id="amount" placeholder="Loan Amount" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Percent</span>
                            </div>
                            <input type="number" id="interest" placeholder="Interest" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <input type="number" id="years" placeholder="Years To Repay" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <input type="submit" value="Calculate" class="btn btn-dark btn-block">
                    </div>
                </form>
                <!-- Loader  -->
                <div id="loading" class="d-flex justify-content-center align-items-center">
                    <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Loading_icon.gif" alt="Loading Gif" style="height: 100px;" class="img-fluid"> -->
                </div>
                <!-- Result  -->
                <div id="results" class="pt-4">
                    <h5>Results:</h5>
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Monthly Payment</span>
                            </div>
                            <input type="number" id="monthly-payment" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Total Payment</span>
                            </div>
                            <input type="number" id="total-payment" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Total Interest</span>
                            </div>
                            <input type="number" id="total-interest" class="form-control" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-XMcwF6yCE7Gg3ZXBgDOfmA4ZshdtnhMLw+M4y93e8mra2N5eF9M3A7PHTlJwhSQ/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq8Al6mWnT1D9do4du7j6clz2n5RaYj6zs72sf5e8x8zF4pAnF" crossorigin="anonymous"></script>
<script src="js/loan.js"></script>
</body>
</html>
