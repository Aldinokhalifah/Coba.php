<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
        
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar position-sticky navbar-expand-lg navbar-light bg-secondary  ">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand text-light" href="">AL's Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active text-light" aria-current="page" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="#!">About </a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center "><a class="btn btn-outline-light mt-3 bi-cart-fill me-1" href="{{ route('chart') }}"><span class="badge bg-dark text-dark ms-1 rounded-pill text-white">0</span></a></div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0"> The best place to
                         find your dream shoes with a wide selection of styles and top quality </p>
                </div>
            </div>
        </header>