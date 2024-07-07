<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>P2P - Community Lending</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">Websterbank</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="/home" class="nav-item nav-link">Home</a>
                        <a href="/about" class="nav-item nav-link">About</a>
                        <a href="/service" class="nav-item nav-link">Service</a>
                        <a href="/project" class="nav-item nav-link">Project</a>
                        <!-- <a href="/team" class="nav-item nav-link">Our Team</a> -->
                         
                        <a href="/contact" class="nav-item nav-link">Contact</a>
                        
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link " data-bs-toggle="dropdown">Withdraw/Deposit</a>
                            <div class="dropdown-menu m-0">
                                <a href="/loancal" class="dropdown-item">Loan Calculator</a>
                                <a href="/payment" class="dropdown-item">Withdraw & Money Transfer</a>
                                <a href="/deposit" class="dropdown-item">Deposit</a>
                                <a href="/applyloan" class="dropdown-item">Apply For Loan</a>
                                <!-- <a href="/transfer" class="dropdown-item">Transfer</a> -->
                                <a href="/records" class="dropdown-item">Transaction History</a>

                            </div>
                        </div>
                        <!-- <a href="/payment" class="nav-item nav-link">Payment</a> -->

                    </div>
                <a href="/profile" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">{{ Auth::user()->name }}</a>
                    <form action="{{ route ('logout') }}" method="POST" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block" role="search">
                        @csrf
                        @method('DELETE')  <button class="btn  " type="submit">Logout</button>
                    </form>
                    
                </div>
            </nav>

            <!-- <div class="container">
                <h1> Welcome, {{ Auth::user()->name }}</h1>
            </div> -->

            <div class="container-xxl bg-primary hero-header">
                <div class="container px-lg-5">
                    <div class="row g-5 align-items-end">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">Building a Stronger Community, One Loan at a Time</h1>
                            <p class="text-white pb-3 animated slideInDown">We knows there is more than one way to succeed. We are committed to helping build communities that foster success and to providing the support needed to help communities and families thrive.</p>
                            <a href="" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Read More</a>
                            <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="img/teamwork.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->