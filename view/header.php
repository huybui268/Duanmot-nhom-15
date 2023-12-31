<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dự án 1</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        ul li ul.dropdown li {
            display: block;
            background: #333;
            margin: 2px 0px;
        }

        ul li ul.dropdown {
            width: auto;
            background: #00FF8C;
            position: absolute;
            z-index: 999;
            display: none;
        }

        ul li a:hover {
            background: #222;
        }

        ul li:hover ul.dropdown {
            display: block;
        }
        .logo{
           width:200px;
           height:150px;
        }
    </style>
</head>

<body>

    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="index.php?act=my"><i class="fa fa-user"></i> My Account</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                            <li><a href="index.php?act=mybill"><i class="fa fa-user"></i> My Cart</a></li>
                            <li><a href="checkout.html"><i class="fa fa-user"></i> Checkout</a></li>

                            <li>
                                <?php if (!isset($_SESSION['user'])) { 
        ?>
                                <a href="index.php?act=login"><i class="fa fa-user"></i> Login</a>
                                <?php
                            }else { extract($_SESSION['user'])
                            ?>

                            <li>
                                <a href="index.php?act=login"><i class="fa fa-user"></i>
                                    <?php echo $user ?>
                                </a>
                                <ul class="dropdown">


                                    <li><a href="index.php?act=logout"><i class="fa fa-user"></i>Đăng Xuất</a></li>
                                    <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                                    <li><a href="index.php?act=doimk">Đổi mật khẩu</a></li>
                                    <li><a href="index.php?act=edit_tk&idtk=<?php echo $id ?>">Cập nhật thông tin</a>
                                    </li>
                                    <?php if($role==1){ ?>
                                    <li><a href="../admin/index.php">Đăng nhập trang Admin</a></li>
                                    <?php } ?>

                                </ul>
                            </li>




                            <?php
                            }
                            ?>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span
                                        class="key">currency :</span><span class="value">USD </span><b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">INR</a></li>
                                    <li><a href="#">GBP</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span
                                        class="key">language :</span><span class="value">English </span><b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./"><img src="../assets/logo2.jpg.png"></a></h1>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="shopping-item">

                        <a href="index.php?act=viewcart">Cart - <span class="cart-amunt"></span> <i
                                class="fa fa-shopping-cart"></i> <span id="totalProduct">
                                <?= !empty($_SESSION['mycart']) ? count($_SESSION['mycart']) : 0
                         ?>
                            </span></a>

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php?act=sp">Shop page</a></li>
                        <li><a href="single-product.html">Single product</a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="#">Category</a></li>
                        <li><a href="#">Others</a></li>
                        <li><a href="admin/index.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- End mainmenu area -->