<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Application Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
        @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @elseif (session('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif
            <form id="HomeLoan" class="form-horizontal" action="{{ route('apply_loan.store') }}" method="POST">
                @csrf
                <fieldset>
                    <legend class="text-center legend">Personal Information</legend>
                    <div class="form-group row mb-3">
                        <label for="gender" class="col-sm-4 col-form-label">You Are</label>
                        <div class="col-sm-8">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="fullName" class="col-sm-4 col-form-label">Full Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter Your Full Name">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="phoneNo" class="col-sm-4 col-form-label">Phone No.</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="phoneNo" name="phoneNo" placeholder="Enter Your Phone No.">
                            <small class="form-text text-muted">We'll never share your phone number with anyone else.</small>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="dob" class="col-sm-4 col-form-label">Date of Birth</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Your Date of Birth">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="email" class="col-sm-4 col-form-label">Email ID</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email ID">
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend class="text-center legend">Loan Detail</legend>
                    <div class="form-group row mb-3">
                        <label for="loanPurpose" class="col-sm-4 col-form-label">Purpose for Loan</label>
                        <div class="col-sm-8">
                            <input list="loanPurposes" class="form-control" id="loanPurpose" name="loanPurpose" placeholder="Select or Enter Purpose for Loan">
                            <datalist id="loanPurposes">
                                <option value="Ready to move">
                                <option value="Under Construction">
                                <option value="Buy a Plot of Land">
                                <option value="Home Renovation">
                            </datalist>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="loanAmount" class="col-sm-4 col-form-label">Loan Amount</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" id="loanAmount" name="loanAmount" placeholder="Enter Loan Amount">
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend class="text-center legend">Professional Detail</legend>
                    <div class="form-group row mb-3">
                        <label for="occupation" class="col-sm-4 col-form-label">Nature of Occupation</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="occupation" name="occupation">
                                <option value="" disabled selected>Select Nature of Occupation</option>
                                <option>Salaried</option>
                                <option>Self Employed</option>
                                <option>Self Employed Professional</option>
                                <option>Retired</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="companyName" class="col-sm-4 col-form-label">Working With</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Enter Company Name">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="monthlyIncome" class="col-sm-4 col-form-label">Monthly Income</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="text" class="form-control" id="monthlyIncome" name="monthlyIncome" placeholder="Enter Your Monthly Income">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="monthlyLiabilities" class="col-sm-4 col-form-label">Monthly Liabilities</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="text" class="form-control" id="monthlyLiabilities" name="monthlyLiabilities" placeholder="Enter Your Monthly Liabilities">
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="text-center">
                    <button id="SaveAccount" type="submit" class="btn btn-primary">Submit</button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="submitModal" tabindex="-1" aria-labelledby="submitModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body text-center">
                                <img src="https://s28.postimg.org/n1msg47n1/logo.png" class="img-rounded mb-3">
                                <h4>Thanks for choosing us.</h4>
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-XMcwF6yCE7Gg3ZXBgDOfmA4ZshdtnhMLw+M4y93e8mra2N5eF9M3A7PHTlJwhSQ/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq3CmJ2Azi85WmW6n3y8/s6mKobukQzA6l/p8lXZnaXf8X2V5D" crossorigin="anonymous"></script>
</body>
</html>
