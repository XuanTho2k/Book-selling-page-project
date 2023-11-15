<?php 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $data['page_title'] ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="<?php echo ASSETS ?>/bookstore/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo ASSETS ?>/bookstore/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo ASSETS ?>/bookstore/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo ASSETS ?>/bookstore/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ASSETS ?>/bookstore/css/login.css">
    <style>
        :root {
            /* fonts */
            --font-staatliches: Staatliches;
            --font-montserrat: Montserrat;
            --font-anton: Anton;

            /* font sizes */
            --font-size-10xl-3: 1.83rem;
            --font-size-3xs: 0.63rem;
            --font-size-140xl-6: 9.98rem;

            /* Colors */
            --color-coral: #ffefb7;
            --color-gainsboro: black;
            --primary-blue-1: #07324a;
        }

        .design1 {
            font-weight: 300;
        }

        .designshot,
        .tm {
            position: relative;
        }

        .tm {
            font-size: 0.5rem;
        }

        .frame-wrapper,
        .layer-2-icon {
            position: absolute;
            height: 1.63rem;
        }

        .frame-wrapper {
            top: 0.47rem;
            left: 12.81rem;
            width: 9.69rem;
        }

        .layer-2-icon {
            top: 0.53rem;
            left: 0;
            width: 10.56rem;
        }

        .group-child,
        .group-parent {
            position: absolute;
            height: 2.63rem;
        }

        .group-child {
            top: 0;
            left: 11.67rem;
            width: 0.03rem;
        }

        .group-parent {
            top: 56.75rem;
            left: 36.81rem;
            width: 22.5rem;
        }

        .cover-septa-404-child {
            position: absolute;
            top: 18.09rem;
            left: 0;
            width: 21.73rem;
            height: 17.38rem;
        }

        .cover-septa-404-item {
            position: absolute;
            top: 0;
            left: 15.05rem;
            width: 34.83rem;
            height: 23.69rem;
        }

        .div,
        .div1 {
            position: absolute;
            top: 7.55rem;
            left: 16.49rem;
            font-family: var(--font-anton);
            display: inline-block;
            width: 4.95rem;
            height: 15.03rem;
        }

        .div1 {
            left: 28.44rem;
        }

        .skate-2-icon {
            position: absolute;
            top: 10.21rem;
            left: 21.02rem;
            width: 8.15rem;
            height: 9.15rem;
            object-fit: fill;
            overflow: hidden;
        }

        .oops-youve-lost-container,
        .we-cant-find {
            position: relative;
            display: inline-block;
            width: 10.6rem;
            height: 1.52rem;
            flex-shrink: 0;
        }

        .we-cant-find {
            font-size: 0.62rem;
            width: 14.55rem;
            height: 0.76rem;
        }

        .oops-youve-lost-parent {
            position: absolute;
            top: 21.4rem;
            left: calc(50% - 116px);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            gap: 0.19rem;
            font-size: 1.25rem;
        }

        .go-home {
            position: relative;
            font-size: 0.83rem;
            font-weight: 600;
            font-family: var(--font-montserrat);
            color: var(--color-gainsboro);
            text-align: left;
        }

        .go-home-wrapper,
        .search-icon {
            position: absolute;
            overflow: hidden;
        }

        .go-home-wrapper {
            cursor: pointer;
            border: 0;
            padding: 0.56rem 1.31rem;
            background-color: var(--color-coral);
            top: 25.39rem;
            left: 21.47rem;
            border-radius: 22.17px;
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: flex-start;
        }

        .cover-septa-404 {
            position: absolute;
            top: 0;
            bottom: 0;
            left: calc(50% - 391.5px);
            background-color: white;
            width: 49.88rem;
            height: 35.47rem;
            overflow: hidden;
            font-size: var(--font-size-140xl-6);
            color: var(--color-gainsboro);
        }

        .design {
            position: relative;
            background-color: white;
            width: 100%;
            height: 29.5rem;
            overflow: hidden;
            text-align: left;
            font-size: 1.31rem;
            color: var(--primary-blue-1);
            font-family: var(--font-montserrat);
        }
    </style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="About">About</a>
                    <a class="text-body mr-3" href="contact">Contact</a>
                    <a class="text-body mr-3" href="">Help</a>
                    <a class="text-body mr-3" href="">FAQs</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My Account</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <?php if (!isset($_SESSION['user_id'])) {

                            ?>
                                <a href="login" class="dropdown-item">Sign in</a>
                                <a href="signup" class="dropdown-item">Sign up</a>
                            <?php } else {
                            ?>
                                <span class="dropdown-item"> Hello, <?php echo $_SESSION['user_name'] ?></span>
                                <a href="cart" class="dropdown-item">Your Cart</a>
                                <a href="cart" class="dropdown-item">Your Bill</a>
                                <?php if (isset($_SESSION['user_role'])) {
                                ?>
                                    <a href="admin">Admin Dashboard</a>
                                <?php
                                } ?>
                                <a href="logout" class="dropdown-item">Log Out</a>
                            <?php
                            } ?>

                        </div>
                    </div>
                    <div class="btn-group mx-2">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">USD</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">EUR</button>
                            <button class="dropdown-item" type="button">GBP</button>
                            <button class="dropdown-item" type="button">CAD</button>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">EN</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">FR</button>
                            <button class="dropdown-item" type="button">AR</button>
                            <button class="dropdown-item" type="button">RU</button>
                        </div>
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="home" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Book</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Land</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Customer Service</p>
                <h5 class="m-0">+012 345 6789</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dresses <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Men's Dresses</a>
                                <a href="" class="dropdown-item">Women's Dresses</a>
                                <a href="" class="dropdown-item">Baby's Dresses</a>
                            </div>
                        </div>
                        <?php 
                        foreach ($data['header_cate'] as $row) {
                        ?>

                        <a href="shop?cate_id=<?php echo $row->getId() ?>" class="nav-item nav-link"><?php echo $row->getName() ?></a>
                            <?php 
                            }
                        ?>
                       
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="home" class="nav-item nav-link active">Home</a>
                            <a href="shop" class="nav-item nav-link">Shop</a>
                            <a href="detail" class="nav-item nav-link">Shop Detail</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="cart" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            <a href="contact" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->