<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop bán quần áo</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <?php
    require('functions.php');
    ?>
</head>
<body">

    <!-- start #header -->
    <header id="header" style="width: 98%; margin: auto">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-rale font-size-14 m-0" style="color: #eb4800">Miễn phí giao hàng trên toàn quốc với đơn hàng trên 499k</p>
            <div class="font-rale font-size-14">
                <a href="register.php" class="px-3 border-end" style="color: #eb4800">Đăng Ký</a>
                <a href="login.php" class="px-3" style="color: #eb4800">Đăng Nhập</a>
            </div>
        </div>

        <!-- Primary Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg px-4 py-1">
            <a class="navbar-brand" href="index.php">Clothing Stores<img src="assets/baseball-cap.png" alt="baseball cap" style="height: 30px; margin-left:5px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav nav-pills navbar-nav ms-auto mb-2 mb-lg-0 fs-5 font-baloo">
                    <li class="nav-item">
                        <a class="nav-link text-dark" aria-current="page" href="#">Sản phẩm</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Quần áo</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Quần Jeans</a></li>
                            <li><a class="dropdown-item" href="#">Quần âu</a></li>
                            <li><a class="dropdown-item" href="#">Quần Jogger</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sản phẩm đặc biệt</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled text-dark" href="#" tabindex="-1" aria-disabled="true">Bài viết</a>
                    </li>
                </ul>
                <form action="#" class="font-size-14 font-rubik pl-2">
                    <a href="cart.php" class="py-2 rounded-pill bg-dark">
                        <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')) ?></span>
                    </a>
                </form>
            </div>
        </nav>
        <!-- !Primary Navigation -->

    </header>
    <!-- !start #header -->

    <!-- start #main-site -->
    <main id="main-site">