<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="assets/images/logo.png" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/sass/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/owl-slider.css" />
    <title>Product Details</title>
</head>

<body>

    <?php include "header.php"; ?>

    <div class="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li class="active">Product Details</li>
            </ul>
        </div>
        <!-- End container -->
    </div>

    <?php
    // $num_post = $_GET['num_post'];
    $name = $_GET['name'];
    $model = $_GET['model'];
    $date = $_GET['date'];
    $customs = $_GET['customs'];
    $engine = $_GET['engine'];
    $traveled = $_GET['traveled'];
    $import = $_GET['import'];
    $motion = $_GET['motion'];
    $price = $_GET['price'];
    $feature = $_GET['features'];
    $chkfeature = explode(",", $feature);
    $defect = $_GET['defects'];
    $chkdefect = explode(",", $defect);
    $notes = $_GET['notes'];
    $pic = $_GET['pic'];
    $pics = explode(",", $pics);
    $color = $_GET['color'];
    ?>

    <div class="main-content">
        <div class="container">
            <div class="product-details-content">
                <div class="col-md-6 col-sm-6">
                    <div class="product-img-box">
                        <a id="image-view" title="Product Image">
                            <img id="image" src="images/<?php echo "$pic" ?>" alt="Product" />
                        </a>
                        <div class="product-thumb">
                            <ul class="thumb-content">
                                <li class="thumb"><a href="images/<?php echo "$pic" ?>" title="thumb product view1" onclick="swap(this);return false;"><img src="images/<?php echo "$pic" ?>" alt="thumb product1"></a></li>
                                <li class="thumb"><a href="images/<?php echo "$pic" ?>" title="thumb product view1" onclick="swap(this);return false;"><img src="images/<?php echo "$pic" ?>" alt="thumb product2"></a></li>
                                <li class="thumb"><a href="images/<?php echo "$pic" ?>" title="thumb product view1" onclick="swap(this);return false;"><img src="images/<?php echo "$pic" ?>" alt="thumb product3"></a></li>
                                <li class="thumb"><a href="images/<?php echo "$pic" ?>" title="thumb product view1" onclick="swap(this);return false;"><img src="images/<?php echo "$pic" ?>" alt="thumb product4"></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End product-img-box -->
                    <div class="share-tags">
                        <div class="share">
                            <span>Share this:</span>
                            <a class="facebook" href="#" title="facebook"><i class="zmdi zmdi-facebook"></i></a>
                            <a class="twitter" href="#" title="twitter"><i class="zmdi zmdi-twitter"></i></a>
                            <a class="instagram" href="#" title="instagram"><i class="zmdi zmdi-instagram"></i></a>
                            <a class="google" href="#" title="google"><i class="zmdi zmdi-google-glass"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-sm-6">
                    <div class="product-box-content">
                        <div class="product-name">
                            <h1><?php echo "$name" ?></h1>
                            <p class="cat"><b><?php echo "$model" ?></b> Imported <b><?php echo "$import" ?></b> </p>
                        </div>
                        <!-- End product-name -->
                        <div class="rating">
                            <div class="overflow-h">
                                <div class="icon-rating">
                                    <p>Production Date <b> <?php echo "$date" ?></b> </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Rating -->
                        <div class="wrap-price">
                            <p class="price">LYD <?php echo "$price" ?></p>
                        </div>
                        <!-- End Price -->
                        <p class='description'><?php echo "$notes" ?></p>
                        <?php

                        for ($f = 0; $f < count($chkfeature); $f++) {
                            echo "<span class='description' style='color:#e9e9e9'> $chkfeature[$f] </span>";
                        }
                        echo "<br>";
                        for ($d = 0; $d < count($chkdefect); $d++) {
                            echo "<span class='description' style='color:#e9e9e9'> $chkdefect[$d] </span>";
                        }

                        ?>



                        <div class="options">
                            <p>Customs</p>
                            <ul class="size">
                                <li><a href="#"><?php echo "$customs" ?></a></li>
                            </ul>
                            <p>Motion Vector</p>
                            <ul class="size">
                                <li><a href="#"><?php echo "$motion" ?></a></li>
                            </ul>
                            <p>Color</p>
                            <ul class="color">
                                <?php
                                if ($color == "red") {
                                    echo  "<li><a class='red'></a></li>";
                                } else if ($color == "blue") {
                                    echo  "<li><a class='blue'></a></li>";
                                } else if ($color == "green") {
                                    echo  "<li><a class='green'></a></li>";
                                } else if ($color == "gray") {
                                    echo  "<li><a class='gray'></a></li>";
                                } else if ($color == "black") {
                                    echo  "<li><a class='black'></a></li>";
                                } else if ($color == "white") {
                                    echo  "<li><a class='white'></a></li>";
                                } else if ($color == "yelow") {
                                    echo  "<li><a class='yelow'></a></li>";
                                } else if ($color == "blue-light") {
                                    echo  "<li><a class='blue-light'></a></li>";
                                } else if ($color == "dark-gray") {
                                    echo  "<li><a class='dark-gray'></a></li>";
                                } else if ($color == "gold") {
                                    echo  "<li><a class='gold'></a></li>";
                                } else if ($color == "brown") {
                                    echo  "<li><a class='brown'></a></li>";
                                } else if ($color == "purple") {
                                    echo  "<li><a class='purple'></a></li>";
                                } else if ($color == "orange") {
                                    echo  "<li><a class='orange'></a></li>";
                                } else if ($color == "teal") {
                                    echo  "<li><a class='teal'></a></li>";
                                } else if ($color == "brown") {
                                    echo  "<li><a class='brown'></a></li>";
                                } else if ($color == "silver") {
                                    echo  "<li><a class='silver'></a></li>";
                                } else if ($color == "pink") {
                                    echo  "<li><a class='pink'></a></li>";
                                }
                                ?>
                            </ul>
                            <div class="quantity">
                                <p style='color:#e9e9e9'>Traveled Distance <b> <?php echo "$traveled" ?></b></p>
                                <p style='color:#e9e9e9'>Motion Vector <b> <?php echo "$motion" ?></b></p>
                            </div>
                            <!-- End quanity -->
                            <a title="link" href="#" class="link-v2"><span>Buy now</span><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                            <a title="link" href="#" class="link-v2 link-v2-bg"><span>Wishlist</span><i class="zmdi zmdi-favorite-outline"></i></a>
                        </div>
                        <!-- End Options -->
                    </div>
                    <!-- End product box -->
                </div>
                <!-- End col-md-6 -->
            </div>
            <!-- End product-details-content -->
            <div class="hoz-tab-container space-padding-tb-40">
                <ul class="tabs">
                    <li class="item" rel="overview">Overview</li>
                    <li class="item" rel="specification">Specification</li>
                    <li class="item" rel="reviews">Reviews</li>
                </ul>
                <div class="tab-container">
                    <div id="overview" class="tab-content">
                        <h2>About This Product</h2>
                        <p><b>The Next Big Thing Is Here</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                        <div class="panel-body">
                            <div class="media images col-md-6">
                                <div class="pull-right">
                                    <img src="assets/images/product-details-tab-1.jpg" class="media-object img-circle" alt="images">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Circular Interface</h4>
                                    <p>A revolutionary design keeps everything you need at your fingertips. The circular interface and unique rotating bezel let you navigate through notifications, apps and widgets quickly without covering the display.</p>
                                    <!-- Nested media object -->
                                </div>
                            </div>
                            <div class="media images col-md-6">
                                <div class="pull-right">
                                    <img src="assets/images/product-details-tab-1.jpg" class="media-object img-circle" alt="images">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">3G or 4G2 Network Connectivity</h4>
                                    <p>A revolutionary design keeps everything you need at your fingertips. The circular interface and unique rotating bezel let you navigate through notifications, apps and widgets quickly without covering the display.</p>
                                </div>
                            </div>
                            <div class="media images col-md-12">
                                <div class="pull-right">
                                    <img src="assets/images/product-details-tab-1.jpg" class="media-object img-circle" alt="images">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Circular Interface</h4>
                                    <p>A revolutionary design keeps everything you need at your fingertips. The circular interface and unique rotating bezel let you navigate through notifications, apps and widgets quickly without covering the display.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="specification" class="tab-content">
                        <table class="table">
                            <tr>
                                <td>Category</td>
                                <td><b>Gear S2 3G/4G</b></td>
                            </tr>
                            <tr>
                                <td>Carrier</td>
                                <td><b>AT&T</b></td>
                            </tr>
                            <tr>
                                <td>Form Factor</td>
                                <td>Wearable Tech</td>
                            </tr>
                            <tr>
                                <td>Color</td>
                                <td><b>Dark Gray</b></td>
                            </tr>
                            <tr>
                                <td>OS</td>
                                <td><b>Tizen based wearable platform</b></td>
                            </tr>
                            <tr>
                                <td>Size</td>
                                <td><b>51g</b></td>
                            </tr>
                            <tr>
                                <td>Battery</td>
                                <td><b>BATTERY TYPE AND SIZE</b></td>
                            </tr>
                            <tr>
                                <td>Battery</td>
                                <td><b>INTERNAL MEMORY </b></td>
                            </tr>
                        </table>
                    </div>
                    <div id="reviews" class="tab-content">
                        <div class="col-md-6">
                            <div class="coment-container">
                                <div class="panel-body">
                                    <ul class="media-list">
                                        <li class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object img-circle" src="assets/images/avatar1.jpg" alt="images">
                                            </a>
                                            <div class="media-body">
                                                <p class="date">April 9, 2016</p>
                                                <h4 class="media-heading">jennifer lopez</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                                                <p class="tags">
                                                    <a href="#" title="like"><i class="zmdi zmdi-favorite-outline"></i>3</a>
                                                    <a href="#" title="reply"><i class="zmdi zmdi-mail-reply"></i>3</a>
                                                </p>
                                                <!-- Nested media object -->
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object img-circle" src="assets/images/avatar2.jpg" alt="images">
                                                    </a>
                                                    <div class="media-body">
                                                        <p class="date">April 9, 2016</p>
                                                        <h4 class="media-heading">jennifer lopez</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                                                        <p class="tags">
                                                            <a href="#" title="like"><i class="zmdi zmdi-favorite-outline"></i>3</a>
                                                            <a href="#" title="reply"><i class="zmdi zmdi-mail-reply"></i>3</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object img-circle" src="assets/images/avatar3.jpg" alt="images">
                                            </a>
                                            <div class="media-body">
                                                <p class="date">April 9, 2016</p>
                                                <h4 class="media-heading">jennifer lopez</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                                                <p class="tags">
                                                    <a href="#" title="like"><i class="zmdi zmdi-favorite-outline"></i>3</a>
                                                    <a href="#" title="reply"><i class="zmdi zmdi-mail-reply"></i>3</a>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End comment -->
                        </div>
                        <div class="col-md-6">
                            <div class="title-ver2">
                                <h3>Add your review</h3>
                            </div>
                            <p class="vote">Vote:</p>
                            <div class="icon-rating">
                                <input type="radio" id="bird-horizontal-rating-1" name="bird-horizontal-rating" checked="">
                                <label for="bird-horizontal-rating-1"><i class="fa fa-star"></i></label>
                                <input type="radio" id="bird-horizontal-rating-2" name="bird-horizontal-rating" checked="">
                                <label for="bird-horizontal-rating-2"><i class="fa fa-star"></i></label>
                                <input type="radio" id="bird-horizontal-rating-3" name="bird-horizontal-rating">
                                <label for="bird-horizontal-rating-3"><i class="fa fa-star"></i></label>
                                <input type="radio" id="bird-horizontal-rating-4" name="bird-horizontal-rating">
                                <label for="bird-horizontal-rating-4"><i class="fa fa-star"></i></label>
                                <input type="radio" id="bird-horizontal-rating-5" name="bird-horizontal-rating">
                                <label for="bird-horizontal-rating-5"><i class="fa fa-star"></i></label>
                            </div>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class=" control-label" for="inputName">Nick Name*</label>
                                    <input type="text" class="form-control" id="inputName" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label class=" control-label" for="inputsumary">Summary of Your Review *</label>
                                    <input type="text" class="form-control" id="inputsumary" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label class=" control-label" for="inputReview">Review*</label>
                                    <input type="text" class="form-control" id="inputReview" placeholder="Review*">
                                </div>
                                <button class="btn link-button link-button-v2" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- tab-container -->
            <div class="title-text">
                <h3><span>R</span>elated products</h3>
            </div>
            <!-- End title -->
            <div class="upsell-product products">
                <div class="item-inner">
                    <div class="product">
                        <p class="product-title">Apple watch sport green</p>
                        <p class="product-price"><span>price: </span>$ 650.99</p>
                        <a class="product-images" href="#" title="">
                            <img class="primary_image" src="assets/images/products/1.jpg" alt="images" />
                            <img class="secondary_image" src="assets/images/products/1.jpg" alt="images" />
                        </a>
                        <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <div class="action">
                            <a class="refresh" href="#"><i class="zmdi zmdi-refresh-sync"></i></a>
                            <a href="#" title="Like"><i class="zmdi zmdi-favorite-outline"></i></a>
                            <a href="#" title="add-to-cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item-inner">
                    <div class="product">
                        <p class="product-title">Apple watch sport green</p>
                        <p class="product-price"><span>price: </span>$ 650.99</p>
                        <a class="product-images" href="#" title="">
                            <img class="primary_image" src="assets/images/products/1.jpg" alt="images" />
                            <img class="secondary_image" src="assets/images/products/1.jpg" alt="images" />
                        </a>
                        <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <div class="action">
                            <a class="refresh" href="#"><i class="zmdi zmdi-refresh-sync"></i></a>
                            <a href="#" title="Like"><i class="zmdi zmdi-favorite-outline"></i></a>
                            <a href="#" title="add-to-cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item-inner">
                    <div class="product sale">
                        <p class="product-title">Apple watch sport green</p>
                        <div class="product-price">
                            <span>price: </span><span class="price">$ 650.99</span>
                            <span class="price-old">$ 670.99</span>
                        </div>
                        <a class="product-images" href="#" title="">
                            <img class="primary_image" src="assets/images/products/1.jpg" alt="images" />
                            <img class="secondary_image" src="assets/images/products/1.jpg" alt="images" />
                        </a>
                        <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <div class="action">
                            <a class="refresh" href="#"><i class="zmdi zmdi-refresh-sync"></i></a>
                            <a href="#" title="Like"><i class="zmdi zmdi-favorite-outline"></i></a>
                            <a href="#" title="add-to-cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item-inner">
                    <div class="product ">
                        <span class="new lable">New</span>
                        <p class="product-title">Apple watch sport green</p>
                        <p class="product-price"><span>price: </span>$ 650.99</p>
                        <a class="product-images" href="#" title="">
                            <img class="primary_image" src="assets/images/products/1.jpg" alt="images" />
                            <img class="secondary_image" src="assets/images/products/1.jpg" alt="images" />
                        </a>
                        <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <div class="action">
                            <a class="refresh" href="#"><i class="zmdi zmdi-refresh-sync"></i></a>
                            <a href="#" title="Like"><i class="zmdi zmdi-favorite-outline"></i></a>
                            <a href="#" title="add-to-cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End container -->
    </div>
    <!-- End MainContent -->
    <div class="bottom-product-footer space-padding-tb-50 wow fadeInUp">
        <div class="container">
            <div class="col-md-4">
                <div class="title-text size-25">
                    <h3><span>F</span>eature product</h3>
                </div>
                <div class="product">
                    <a class="product-images" href="#" title="">
                        <img class="primary_image" src="assets/images/products/1.jpg" alt="" />
                    </a>
                    <div class="product-content">
                        <a class="category" href="#" title="category">watch</a>
                        <a class="product-name" href="#" title="Mens Hugo Boss Chronograph Watch">Mens Hugo Boss Chronograph Watch</a>
                        <p class="product-price"><span>Price: </span>$60.99</p>
                        <div class="action">
                            <a class="refresh" href="#"><i class="zmdi zmdi-refresh-sync"></i></a>
                            <a href="#" title="Like"><i class="zmdi zmdi-favorite-outline"></i></a>
                            <a href="#" title="add-to-cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                        </div>
                    </div>
                    <!-- End product content -->
                </div>
                <!-- end produt item -->
                <div class="product">
                    <a class="product-images" href="#" title="">
                        <img class="primary_image" src="assets/images/products/1.jpg" alt="" />
                    </a>
                    <div class="product-content">
                        <a class="category" href="#" title="category">watch</a>
                        <a class="product-name" href="#" title="Mens Hugo Boss Chronograph Watch">BOSS HUGO BOSS Quartz Aviator Chronograph Watch</a>
                        <p class="product-price"><span>Price: </span>$60.99</p>
                        <div class="action">
                            <a class="refresh" href="#"><i class="zmdi zmdi-refresh-sync"></i></a>
                            <a href="#" title="Like"><i class="zmdi zmdi-favorite-outline"></i></a>
                            <a href="#" title="add-to-cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                        </div>
                    </div>
                    <!-- End product content -->
                </div>
                <!-- end produt item -->
                <div class="product">
                    <a class="product-images" href="#" title="">
                        <img class="primary_image" src="assets/images/products/1.jpg" alt="" />
                    </a>
                    <div class="product-content">
                        <a class="category" href="#" title="category">watch</a>
                        <a class="product-name" href="#" title="Mens Hugo Boss Chronograph Watch">Tory Burch Watches 37mm Tory Stainless </a>
                        <p class="product-price"><span>Price: </span>$60.99</p>
                        <div class="action">
                            <a class="refresh" href="#"><i class="zmdi zmdi-refresh-sync"></i></a>
                            <a href="#" title="Like"><i class="zmdi zmdi-favorite-outline"></i></a>
                            <a href="#" title="add-to-cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                        </div>
                    </div>
                    <!-- End product content -->
                </div>
                <!-- end produt item -->
            </div>
            <!-- End col-md-4 -->
            <div class="col-md-4">
                <div class="title-text size-25">
                    <h3><span>T</span>op Review</h3>
                </div>
                <div class="product">
                    <a class="product-images" href="#" title="">
                        <img class="primary_image" src="assets/images/products/1.jpg" alt="" />
                    </a>
                    <div class="product-content">
                        <a class="category" href="#" title="category">watch</a>
                        <a class="product-name" href="#" title="Mens Hugo Boss Chronograph Watch">HP ENVY Curved All-in-One PC</a>
                        <p class="product-price"><span>Price: </span>$60.99</p>
                        <p class="star">
                            <a href="#" title="star"><i class="fa fa-star"></i></a>
                            <a href="#" title="star"><i class="fa fa-star"></i></a>
                            <a href="#" title="star"><i class="fa fa-star"></i></a>
                            <a href="#" title="star"><i class="fa fa-star"></i></a>
                            <a href="#" title="star"><i class="fa fa-star-o"></i></a>
                        </p>
                        <div class="action">
                            <a class="refresh" href="#"><i class="zmdi zmdi-refresh-sync"></i></a>
                            <a href="#" title="Like"><i class="zmdi zmdi-favorite-outline"></i></a>
                            <a href="#" title="add-to-cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                        </div>
                    </div>
                    <!-- End product content -->
                </div>
                <!-- end produt item -->
                <div class="product">
                    <a class="product-images" href="#" title="">
                        <img class="primary_image" src="assets/images/products/1.jpg" alt="" />
                    </a>
                    <div class="product-content">
                        <a class="category" href="#" title="category">watch</a>
                        <a class="product-name" href="#" title="Mens Hugo Boss Chronograph Watch">skullcandy headphones grind</a>
                        <p class="product-price"><span>Price: </span>$60.99</p>
                        <p class="star">
                            <a href="#" title="star"><i class="fa fa-star"></i></a>
                            <a href="#" title="star"><i class="fa fa-star"></i></a>
                            <a href="#" title="star"><i class="fa fa-star"></i></a>
                            <a href="#" title="star"><i class="fa fa-star"></i></a>
                            <a href="#" title="star"><i class="fa fa-star-o"></i></a>
                        </p>
                        <div class="action">
                            <a class="refresh" href="#"><i class="zmdi zmdi-refresh-sync"></i></a>
                            <a href="#" title="Like"><i class="zmdi zmdi-favorite-outline"></i></a>
                            <a href="#" title="add-to-cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                        </div>
                    </div>
                    <!-- End product content -->
                </div>
                <!-- end produt item -->
                <div class="product">
                    <a class="product-images" href="#" title="">
                        <img class="primary_image" src="assets/images/products/1.jpg" alt="" />
                    </a>
                    <div class="product-content">
                        <a class="category" href="#" title="category">watch</a>
                        <a class="product-name" href="#" title="Mens Hugo Boss Chronograph Watch">Inspire 1 Pro White Edition</a>
                        <p class="product-price"><span>Price: </span>$60.99</p>
                        <p class="star">
                            <a href="#" title="star"><i class="fa fa-star"></i></a>
                            <a href="#" title="star"><i class="fa fa-star"></i></a>
                            <a href="#" title="star"><i class="fa fa-star"></i></a>
                            <a href="#" title="star"><i class="fa fa-star"></i></a>
                            <a href="#" title="star"><i class="fa fa-star-o"></i></a>
                        </p>
                        <div class="action">
                            <a class="refresh" href="#"><i class="zmdi zmdi-refresh-sync"></i></a>
                            <a href="#" title="Like"><i class="zmdi zmdi-favorite-outline"></i></a>
                            <a href="#" title="add-to-cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                        </div>
                    </div>
                    <!-- End product content -->
                </div>
                <!-- end produt item -->
            </div>
            <!-- End col-md-4 -->
            <div class="col-md-4">
                <div class="title-text size-25">
                    <h3><span>P</span>opular</h3>
                </div>
                <div class="product">
                    <a class="product-images" href="#" title="">
                        <img class="primary_image" src="assets/images/products/1.jpg" alt="" />
                    </a>
                    <div class="product-content">
                        <a class="category" href="#" title="category">watch</a>
                        <a class="product-name" href="#" title="Mens Hugo Boss Chronograph Watch">Canon EOS 1200D</a>
                        <p class="product-price"><span>Price: </span>$60.99</p>
                        <div class="action">
                            <a class="refresh" href="#"><i class="zmdi zmdi-refresh-sync"></i></a>
                            <a href="#" title="Like"><i class="zmdi zmdi-favorite-outline"></i></a>
                            <a href="#" title="add-to-cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                        </div>
                    </div>
                    <!-- End product content -->
                </div>
                <!-- end produt item -->
                <div class="product">
                    <a class="product-images" href="#" title="">
                        <img class="primary_image" src="assets/images/products/1.jpg" alt="" />
                    </a>
                    <div class="product-content">
                        <a class="category" href="#" title="category">watch</a>
                        <a class="product-name" href="#" title="Mens Hugo Boss Chronograph Watch">Skullcandy shakedown x5shfz 820</a>
                        <p class="product-price"><span>Price: </span>$60.99</p>
                        <div class="action">
                            <a class="refresh" href="#"><i class="zmdi zmdi-refresh-sync"></i></a>
                            <a href="#" title="Like"><i class="zmdi zmdi-favorite-outline"></i></a>
                            <a href="#" title="add-to-cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                        </div>
                    </div>
                    <!-- End product content -->
                </div>
                <!-- end produt item -->
                <div class="product">
                    <a class="product-images" href="#" title="">
                        <img class="primary_image" src="assets/images/products/1.jpg" alt="" />
                    </a>
                    <div class="product-content">
                        <a class="category" href="#" title="category">watch</a>
                        <a class="product-name" href="#" title="Mens Hugo Boss Chronograph Watch">Philips spa 60 2.0 speaker with usb plug</a>
                        <p class="product-price"><span>Price: </span>$60.99</p>
                        <div class="action">
                            <a class="refresh" href="#"><i class="zmdi zmdi-refresh-sync"></i></a>
                            <a href="#" title="Like"><i class="zmdi zmdi-favorite-outline"></i></a>
                            <a href="#" title="add-to-cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                        </div>
                    </div>
                    <!-- End product content -->
                </div>
                <!-- end produt item -->
            </div>
            <!-- End col-md-4 -->
        </div>
        <!-- End conntainer -->
    </div>
    <!-- End product-footer -->
    <div class="brand-container space-50">
        <div class="container">
            <div class="slider-brand">
                <div class="item">
                    <a href="#" title="Brand">
                        <img src="assets/images/Dama-brand1.jpg" alt="Brand">
                    </a>
                </div>
                <!-- End item -->
                <div class="item">
                    <a href="#" title="Brand">
                        <img src="assets/images/Dama-brand1.jpg" alt="Brand">
                    </a>
                </div>
                <!-- End item -->
                <div class="item">
                    <a href="#" title="Brand">
                        <img src="assets/images/Dama-brand1.jpg" alt="Brand">
                    </a>
                </div>
                <!-- End item -->
                <div class="item">
                    <a href="#" title="Brand">
                        <img src="assets/images/Dama-brand1.jpg" alt="Brand">
                    </a>
                </div>
                <!-- End item -->
                <div class="item">
                    <a href="#" title="Brand">
                        <img src="assets/images/Dama-brand1.jpg" alt="Brand">
                    </a>
                </div>
                <!-- End item -->
                <div class="item">
                    <a href="#" title="Brand">
                        <img src="assets/images/Dama-brand1.jpg" alt="Brand">
                    </a>
                </div>
                <!-- End item -->
            </div>
            <!-- End brand slider -->
        </div>
        <!-- End Container -->
    </div>
    <!-- End Brand Container -->
    <div class="newsletter">
        <div class="container">
            <h3><a href="#" title="sign up">sign up</a> to newsletter</h3>
            <p>and receilve $20 coupon for first shopping</p>
            <form action="#" method="get" accept-charset="utf-8">
                <input type="text" onblur="if (this.value == '') {this.value = 'Enter your email';}" onfocus="if(this.value != '') {this.value = '';}" value="Enter your emaill" class="input-text required-entry validate-email" title="Sign up for our newsletter" id="newsletter" name="email">
                <button class="button button1" title="Subscribe" type="submit"></button>
            </form>
        </div>
        <!-- End container -->
    </div>
    <!-- End newsletter -->

    <?php include "footer.php" ?>

    <script type="text/javascript" src="assets/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.elevatezoom.js"></script>
    <script type="text/javascript" src="assets/js/store.js"></script>
</body>

</html>