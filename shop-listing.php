<?php include "backend/connection.php"; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="assets/images/logo.png" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/range-price.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/owl-slider.css" />
    <title>Shop Listing 1</title>
</head>

<body>

    <?php include "header.php"; ?>

    <div class="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Shop</li>
                <li class="active">Cars</li>
            </ul>
        </div>
        <!-- End container -->
    </div>
    <div class="listing-ver1">
        <div class="container">
            <div id="secondary" class="widget-area col-xs-12 col-md-3">
                <h3 class="title-secondary">Cars</h3>
                <aside class="widget widget_color_option">
                    <h4 class="active">Warehouse Options</h4>
                    <div class="menu block">
                        <form action="#" method="get">
                            <input type="checkbox" id="c1" name="cc" />
                            <label for="c1"><span class="icon"></span>CHINA<span class="count">112</span></label>
                            <input type="checkbox" id="c2" name="cc" />
                            <label for="c2"><span class="icon"></span>US<span class="count">130</span></label>
                            <input type="checkbox" id="c3" name="cc" />
                            <label for="c3"><span class="icon"></span>Korea<span class="count">80</span></label>
                            <input type="checkbox" id="c4" name="cc" />
                            <label for="c4"><span class="icon"></span>Canada<span class="count">50</span></label>
                            <input type="checkbox" id="c5" name="cc" />
                            <label for="c5"><span class="icon"></span>Switzerland<span class="count">72</span></label>
                        </form>
                    </div>
                </aside>
                <aside class="widget widget_subcategory">
                    <h4 class="active">Narrow Search Results</h4>
                    <div class="menu block">
                        <form action="#" method="get">
                            <input type="checkbox" id="nar1" name="nar" />
                            <label for="nar1"><span class="icon"></span>ON SALE<span class="count">112</span></label>
                            <input type="checkbox" id="nar2" name="nar" />
                            <label for="nar2"><span class="icon"></span>PRESALE<span class="count">130</span></label>
                        </form>
                    </div>
                </aside>
                <aside class="widget widget_size_option">
                    <h4 class="active">CATEGORY</h4>
                    <div class="menu block">
                        <form action="#" method="get">
                            <input type="checkbox" id="os1" name="nar" />
                            <label for="os1"><span class="icon"></span>KIA<span class="count">280</span></label>
                            <input type="checkbox" id="os2" name="nar" />
                            <label for="os2"><span class="icon"></span>HYUNDAI<span class="count">162</span></label>
                            <input type="checkbox" id="os3" name="nar" />
                            <label for="os3"><span class="icon"></span>JEEP<span class="count">46</span></label>
                            <input type="checkbox" id="os4" name="nar" />
                            <label for="os4"><span class="icon"></span>MITSUBISHI<span class="count">24</span></label>
                        </form>
                    </div>
                </aside>
                <aside class="widget">
                    <h4 class="active">Price Range</h4>
                    <div class="layout-slider">
                        <span><input id="Slider1" type="text" name="price" value="10000;200000" /></span>
                    </div>
                </aside>
                <aside class="widget widget_size_option">
                    <h4 class="active">Year</h4>
                    <div class="menu block">
                        <form action="#" method="get">
                            <input type="checkbox" id="chip1" name="nar" />
                            <label for="chip1"><span class="icon"></span>2010<span class="count">112</span></label>
                            <input type="checkbox" id="chip2" name="nar" />
                            <label for="chip2"><span class="icon"></span>2012<span class="count">130</span></label>
                            <input type="checkbox" id="chip3" name="nar" />
                            <label for="chip3"><span class="icon"></span>2014<span class="count">80</span></label>
                            <input type="checkbox" id="chip4" name="nar" />
                            <label for="chip4"><span class="icon"></span>2018<span class="count">72</span></label>
                            <input type="checkbox" id="chip5" name="nar" />
                            <label for="chip5"><span class="icon"></span>2020<span class="count">50</span></label>
                        </form>
                    </div>
                </aside>
                <aside class="widget widget_size_option">
                    <h4>Color</h4>
                    <ul class="color">
                        <li><a class="gray" href="#" title="gray"></a></li>
                        <li><a class="blue" href="#" title="blue"></a></li>
                        <li><a class="brown" href="#" title="brown"></a></li>
                        <li><a class="green" href="#" title="green"></a></li>
                        <li><a class="yellow" href="#" title="yellow"></a></li>
                        <li><a class="blue-light" href="#" title="blue-light"></a></li>
                        <li><a class="purple" href="#" title="purple"></a></li>
                        <li><a class="orange" href="#" title="orange"></a></li>
                        <li><a class="red" href="#" title="red"></a></li>
                        <li><a class="white" href="#" title="white"></a></li>
                    </ul>
                </aside>
                <aside class="widget">
                    <h4>Discount</h4>
                    <div class="discount-down">
                        <button class="discount_selector">Choose your discount</button>
                        <ul class="discount-list">
                            <li> 25%</li>
                            <li> 30%</li>
                            <li> 40%</li>
                            <li> 50%</li>
                        </ul>
                    </div>
                    <script type="text/javascript">
                        var trigger = $('.discount_selector');
                        var list = $('.discount-list');
                        var list_li = $('.discount-list li');
                        trigger.click(function() {
                            trigger.toggleClass('active');
                            list.slideToggle(200);
                        });
                        // this is optional to close the list while the new page is loading
                        list_li.click(function() {
                            trigger.click();
                            trigger.text($(this).text());
                        });
                    </script>
                </aside>
            </div>
            <!-- End Secondary -->
            <div id="primary" class="col-xs-12 col-md-9">
                <!-- End Banner Grid -->
                <div class="ordering">
                    <div class="ordering-left">
                        <span>Short by:</span>
                        <a href="#" title="NewestArrivals">NewestArrivals</a>
                        <a href="#" title="Price high to low">Price high to low</a>
                        <a href="#" title="Price low to high">Price low to high</a>
                        <a href="#" title="Most populer">Most populer</a>
                    </div>
                    <!-- end left -->
                    <div class="ordering-right">
                        <span class="list"></span>
                        <span class="col active"></span>
                        <form action="#" method="get" class="order-by">
                            <select class="orderby" name="orderby">
                                <option>40 per page</option>
                                <option>30 per page</option>
                                <option>20 per page</option>
                                <option>10 per page</option>
                            </select>
                        </form>
                    </div>
                    <!-- End right -->
                </div>
                <!-- End ordering -->
                <div class="products grid_full grid_sidebar">

                    <?php
                    $results_per_page = 12;

                    $sql_show = "SELECT * FROM cars ORDER BY carId ASC ";
                    $result_page = mysqli_query($db, $sql_show);
                    $number_of_result = mysqli_num_rows($result_page);

                    // Determine number of total pages available
                    $number_of_pages = ceil($number_of_result / $results_per_page);

                    // Determine which page number visitor is currently on
                    if (!isset($_GET['page'])) {
                        $page = 1;
                    } else {
                        $page = $_GET['page'];
                    }

                    // Determine the sql LIMIT starting number for the results on the displaying page
                    $this_page_first_result = ($page - 1) * $results_per_page;

                    // Retrieve selected result from database and display them on page
                    $sql_show = "SELECT * FROM cars ORDER BY carId ASC LIMIT " . $this_page_first_result . ',' . $results_per_page;
                    $result_page = mysqli_query($db, $sql_show);


                    // $sql_show = "SELECT * FROM cars";
                    // $result_page = mysqli_query($db, $sql_show);
                    // $number_of_result = mysqli_num_rows($result_page);
                    // $name = $row['name'];
                    // $model = $row['model'];
                    // $date = $row['production_date'];
                    // $customs = $row['customs'];
                    // $engine = $row['engine_capacity'];
                    // $traveled = $row['traveled_distance'];
                    // $import = $row['import'];
                    // $motion = $row['motion_vector'];
                    // $price = $row['price'];
                    // $feature = $row['features'];
                    // // $chkfeature = implode(",", $feature);
                    // $defect = $row['defect'];
                    // $chkdefect = implode(",", $defects);
                    // // $notes = $row['notes'];

                    while ($row = mysqli_fetch_array($result_page)) {

                        $pic = $row['pic'];
                        $pics = explode(",", $pic);

                    ?>



                        <div class="item-inner">
                            <div class="product">
                                <p class="product-title" name="name_car"><?php echo $row['name']; ?></p>
                                <p class="product-price"><span>price: </span>$ <?php echo $row['price']; ?></p>
                                <a class="product-images" href="product-detail.php?name=<?php echo $row['name'] ?>  &model=<?php echo $row['model'] ?>  &import=<?php echo $row['import'] ?>  &date=<?php echo $row['production_date'] ?>  &customs=<?php echo $row['customs'] ?>  &defects=<?php echo $row['defects'] ?>  &engine=<?php echo $row['engine_capacity'] ?>  &traveled=<?php echo $row['traveled_distance'] ?>  &motion=<?php echo $row['motion_vector'] ?>  &features=<?php echo $row['features'] ?>  &pic=<?php echo $row['pic'] ?>  &price=<?php echo $row['price'] ?>  &notes=<?php echo $row['notes'] ?>  &color=<?php echo $row['color'] ?>" title="">
                                    <?php for ($p = 0; $p < count($pics); $p++) {
                                        echo ' <img class="" src="images/' . $pics[$p] . '" alt="images" height="171px" />';
                                        //    echo'   <img class="secondary_image" src="images/'.$pics[$p].'" alt="images" />';
                                    } ?>
                                </a>
                                <p class="description"><?php echo $row['notes']; ?>
                                </p>
                                <div class="action">
                                    <a class="refresh" href="#"><i class="zmdi zmdi-refresh-sync"></i></a>
                                    <a href="#" title="Like"><i class="zmdi zmdi-favorite-outline"></i></a>
                                    <a href="#" title="add-to-cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                </div>
                            </div>
                        </div>

                    <?php  } ?>

                </div>
                <!-- End product-content products  -->
                <div class="pagination-container">
                    <nav class="pagination">
                        <?php
                        for ($page = 1; $page <= $number_of_pages; $page++) {
                            echo '   <a class="page-numbers current" href="shop-listing.php?page=' . $page . '">' . $page . '</a>';
                        }
                        ?>
                        <!-- <a class="page-numbers" href="#">2</a>
                        <a class="page-numbers" href="#">3</a>
                        ...
                        <a class="page-numbers" href="#">8</a> -->
                    </nav>
                </div>
                <!-- End pagination-container -->
            </div>
            <!-- End Primary -->
        </div>
        <!-- End conainer -->
    </div>
    <!-- End listing-ver1 -->

    <div class="bottom-product-footer space-padding-tb-50">
        <div class="container">
            <div class="col-md-4">
                <div class="title-text size-25">
                    <h3><span>F</span>eature product</h3>
                </div>
                <div class="product">
                    <a class="product-images" href="#" title="">
                        <img class="primary_image" src="assets/images/products/k1.jpg" alt="" />
                    </a>
                    <div class="product-content">
                        <a class="category" href="#" title="category">KIA</a>
                        <a class="product-name" href="#" title="Mens Hugo Boss Chronograph Watch">KIA LOTZE 2010 FULL
                            OPTION</a>
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
                        <img class="primary_image" src="assets/images/products/h_tuscan.jpg" alt="" />
                    </a>
                    <div class="product-content">
                        <a class="category" href="#" title="category">Hyundai</a>
                        <a class="product-name" href="#" title="Mens Hugo Boss Chronograph Watch">HYUNDAI TUSCAN FULL
                            OPTION</a>
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
                        <img class="primary_image" src="assets/images/products/bmw.jpg" alt="" />
                    </a>
                    <div class="product-content">
                        <a class="category" href="#" title="category">BMW</a>
                        <a class="product-name" href="#" title="Mens Hugo Boss Chronograph Watch">BMW 528i 2009 FULL
                            OPTION</a>
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
                        <img class="primary_image" src="assets/images/products/SORENTO.jpg" alt="" />
                    </a>
                    <div class="product-content">
                        <a class="category" href="#" title="category">KIA</a>
                        <a class="product-name" href="#" title="Mens Hugo Boss Chronograph Watch">KIA SORENTO</a>
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
                        <img class="primary_image" src="assets/images/products/kia_k7.jpg" alt="" />
                    </a>
                    <div class="product-content">
                        <a class="category" href="#" title="category">KIA</a>
                        <a class="product-name" href="#" title="Mens Hugo Boss Chronograph Watch">KIA K7 FULL OPTION</a>
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
                        <img class="primary_image" src="assets/images/products/h_GRANDEUR .jpg" alt="" />
                    </a>
                    <div class="product-content">
                        <a class="category" href="#" title="category">Hyundai</a>
                        <a class="product-name" href="#" title="Mens Hugo Boss Chronograph Watch">HYUNDAI GRANDEUR 2007

                        </a>
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
                        <img class="primary_image" src="assets/images/products/h_GRANDEUR .jpg" alt="" />
                    </a>
                    <div class="product-content">
                        <a class="category" href="#" title="category">Hyundai</a>
                        <a class="product-name" href="#" title="Mens Hugo Boss Chronograph Watch">HYUNDAI GRANDEUR 2007

                        </a>
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
                        <img class="primary_image" src="assets/images/products/k1.jpg" alt="" />
                    </a>
                    <div class="product-content">
                        <a class="category" href="#" title="category">KIA</a>
                        <a class="product-name" href="#" title="Mens Hugo Boss Chronograph Watch">KIA LOTZE 2010 FULL
                            OPTION</a>
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
                        <img class="primary_image" src="assets/images/products/bmw.jpg" alt="" />
                    </a>
                    <div class="product-content">
                        <a class="category" href="#" title="category">BMW</a>
                        <a class="product-name" href="#" title="Mens Hugo Boss Chronograph Watch">BMW 528i 2009 FULL
                            OPTION</a>
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
                        <img src="assets/images/Hyundai_400px.png" alt="Brand">
                    </a>
                </div>
                <!-- End item -->
                <div class="item">
                    <a href="#" title="Brand">
                        <img src="assets/images/bmw_480px.png" alt="Brand">
                    </a>
                </div>
                <!-- End item -->
                <div class="item">
                    <a href="#" title="Brand">
                        <img src="assets/images/mitsubishi_96px.png" alt="Brand">
                    </a>
                </div>
                <!-- End item -->
                <div class="item">
                    <a href="#" title="Brand">
                        <img src="assets/images/volvo_500px.png" alt="Brand">
                    </a>
                </div>
                <!-- End item -->
                <div class="item">
                    <a href="#" title="Brand">
                        <img src="assets/images/jeep_96px.png" alt="Brand">
                    </a>
                </div>
                <!-- End item -->
                <div class="item">
                    <a href="#" title="Brand">
                        <img src="assets/images/lamborghini_500px.png" alt="Brand">
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
            <!-- <p>and receilve $20 coupon for first shopping</p> -->
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
    <script type="text/javascript" src="assets/js/price-range.js"></script>
    <script type="text/javascript" src="assets/js/wow.min.js"></script>
    <script type="text/javascript">
        jQuery("#Slider1").slider({
            from: 3000,
            to: 250000,
            step: 100,
            smooth: true,
            round: 0,
            skin: "plastic"
        });
    </script>
    <script type="text/javascript" src="assets/js/store.js"></script>
</body>

</html>