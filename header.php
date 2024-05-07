<?php
include 'account/config.php';

session_start();

error_reporting(0);

// if (isset($_SESSION['username'])) {
//     header("Location:index.php");
// }

if (isset($_POST['login'])) {
    $email = $_POST['log-email'];
    $password = md5($_POST['log-password']);

    $sql = "SELECT * FROM account WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location:index.php");
    } else {
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    }
}

?>

<header id="header" class="header-v3">
    <div id="topbar">
        <div class="container">
            <div class="topbar-left">
                <a class="facebook" href="https://www.facebook.com/open.sooq.abuslim" title="facebook"><i class="zmdi zmdi-facebook"></i></a>
                <a class="twitter" href="#" title="twitter"><i class="zmdi zmdi-twitter"></i></a>
                <a class="instagram" href="#" title="instagram"><i class="zmdi zmdi-instagram"></i></a>
                <a class="google" href="#" title="google"><i class="zmdi zmdi-google-glass"></i></a>

                <!-- End cart -->
            </div>
            <!-- End topBar-left -->
            <div class="topbar-right">
                <a href="#" title="Guarantee"><i class="zmdi zmdi-wrench"></i>Guarantee</a>
                <a href="#" title="Adress"><i class="zmdi zmdi-pin"></i>Store location</a>
                <div class="wrap-dollar-box dropdown">
                    <a href="#" title="Denar"><i class="zmdi zmdi-money-box"></i>Denar (LYD)<i class="zmdi zmdi-chevron-down"></i></a>
                    <div class="dollar-list dropdown-menu">
                        <ul>
                            <li><a href="#" title="denar(dl)">Dollar (US)</a></li>
                            <li><a href="#" title="dollar(us)">Denar (DL)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="wrap-sign-in cart dropdown">
                    <a class="sign-in" href="#" title="user"><i class="zmdi zmdi-account"></i>My account</a>
                    <div class="register-list cart-list dropdown-menu ">
                        <?php echo "<h1> " . $_SESSION['username'] . "</h1>"; ?>
                        <h3>My account</h3>
                        <form class="form-horizontal" method="POST" action="index.php">
                            <div class="acc-name">
                                <input class="form-control" name="log-email" type="text" placeholder="Your Email" id="inputacname">
                            </div>
                            <div class="acc-pass">
                                <input class="form-control" name="log-password" type="text" placeholder="Password" id="inputpass">
                            </div>
                            <div class="remember">
                                <input type="checkbox" id="me" name="nar" />
                                <label for="me">remember me</label>
                                <a class="help" href="#" title="help ?">help?</a>
                            </div>
                            <button type="submit" class="link-button" name="login">Submit</button>
                        </form>
                        <h3>Or register</h3>
                        <div class="form-horizontal">
                            <!-- <input type="text" placeholder="Your mail" id="inputmail" class="form-control">
                                <input type="text" placeholder="Password" id="inputpass1" class="form-control"> -->
                            <a href="account/register.php" class="link-button">register</a>
                        </div>
                        <!-- <h4>or register to</h4>
                            <div class="social">
                                <a class="facebook" href="#" title="facebook"><i class="zmdi zmdi-facebook"></i></a>
                                <a class="twitter" href="#" title="twitter"><i class="zmdi zmdi-twitter"></i></a>
                                <a class="instagram" href="#" title="instagram"><i class="zmdi zmdi-instagram"></i></a>
                                <a class="google" href="#" title="google"><i class="zmdi zmdi-google-glass"></i></a>
                            </div> -->
                    </div>
                </div>
            </div>
            <!-- End topbar-right -->
        </div>
        <!-- End container -->
    </div>
    <!-- End Top Bar -->
    <div class="header-top">
        <div class="container">
            <div class="inner-container">
                <p class="icon-menu-mobile"><span class="icon-bar"></span></p>
                <div class="logo"><a href="#" title="سوق أبوسليم المفتوح"><img src="assets/images/logo.png" width="150px" alt="Abu-saleem-Logo"></a></div>
                <div class="menu-top">
                    <ul class="nav-top">
                        <li class="level1"><a href="index.php" title="Hopme">Home</a></li>
                        <li class="level1"><a href="shop-listing.php" title="Hopme">Shop</a></li>
                        <li class="level1 active"><a href="#" title="Blog">Blog</a></li>
                        <li class="level1"><a href="#" title="Page">About us</a>
                            <ul class="menu-level-1">
                                <!-- <li class="level2"><a href="contact.html" title="" target="_blank">Contact</a></li>
                                    <li class="level2"><a href="contact2.html" title="" target="_blank">Contact 2</a>
                                    </li>
                                    <li class="level2"><a href="404.html" title="Page 404" target="_blank">Page 404</a>
                                    </li>
                                    <li class="level2"><a href="checkout.html" title="check out" target="_blank">Check
                                            out</a></li>
                                    <li class="level2"><a href="undercontruction.html" title="Undercontruction"
                                            target="_blank">Undercontruction</a></li> -->
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="search">
                    <div class="search-form">
                        <form action="#" method="get">
                            <div class="search-select">
                                <i class="zmdi zmdi-chevron-down"></i>
                                <select name="orderby" class="category-search">
                                    <option value="">Select Category</option>
                                    <option value="KIA">KIA</option>
                                    <option value="HYUNDAI">HYUNDAI</option>
                                    <option value="BMW">BMW</option>
                                    <option value="JEEP">JEEP</option>
                                    <option value="MITSUBISHI">MITSUBISHI</option>
                                </select>
                            </div>
                            <!-- End search Select -->
                            <input type="text" autocomplete="off" placeholder="search Keywork " value="" class="ajax_autosuggest_input ac_input" name="s">
                            <button type="submit" class="icon-search">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- End search -->
            </div>
            <!-- End inner container -->
        </div>
        <!-- End container -->
    </div>
    <!-- End header-top -->
    <nav class="menu-mobile">
        <ul class="nav">
            <li class="level1"><a href="index.php" title="Home">Home</a>
                <!-- <ul class="menu-level-1">
                        <li class="level2"><a href="#" title="shop" target="_blank">shop</a></li>
                        <li class="level2"><a href="#" title="blog" target="_blank">blog</a></li>
                        <li class="level2"><a href="#" title="about us" target="_blank">about us</a></li>
                    </ul> -->
            </li>
            <li class="level1">
                <a href="shop-listing.php" title="shop">shop</a>
                <!-- <ul class="menu-level-1">
                        <li class="level2">
                            <a href="#">YEARS</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="#" title="2007">2007</a></li>
                                <li class="level3"><a href="#" title="2008">2008</a></li>
                                <li class="level3"><a href="#" title="2010">2010</a></li>
                                <li class="level3"><a href="#" title="2012">2012</a></li>
                                <li class="level3"><a href="#" title="2015">2015</a></li>
                                <li class="level3"><a href="#" title="2018">2018</a></li>
                            </ul>
                        </li>
                        <li class="level2">
                            <a href="#">Category</a>
                            <ul class="menu-level-2">
                                <li class="level3"><a href="#" title="GRANDEUR">GRANDEUR</a></li>
                                <li class="level3"><a href="#" title="AVANTI">AVANTI</a></li>
                                <li class="level3"><a href="#" title="I30">I30</a></li>
                                <li class="level3"><a href="#" title="TUSCAN">TUSCAN</a></li>
                                
                            </ul>
                        </li>
                    </ul> -->
            </li>
            <li class="level1"><a href="#" title="blog">blog</a></li>
            <li class="level1"><a href="#" title="about us">about us</a></li>
        </ul>
    </nav>
    <!-- End menu  mobile -->
    <nav class="mega-menu">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <ul class="nav navbar-nav" id="navbar">
                <li class="level1 active"><a href="#" title="Headphone">KIA</a>
                    <ul class="menu-level-1">
                        <li class="level2"><a href="#" title="RIO">RIO</a></li>
                        <li class="level2"><a href="#" title="SORENTO">SORENTO</a></li>
                        <li class="level2"><a href="#" title="K7">K7</a></li>
                        <li class="level2"><a href="#" title="FORTE">FORTE</a></li>
                    </ul>
                </li>
                <li class="level1 dropdown">
                    <a href="#" title="men">HYUNDAI</a>
                    <div class="sub-menu dropdown-menu">
                        <ul class="menu-level-1">
                            <li class="level2"><a href="#">YEARS</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="#" title="2007">2007</a></li>
                                    <li class="level3"><a href="#" title="2008">2008</a></li>
                                    <li class="level3"><a href="#" title="2010">2010</a></li>
                                    <li class="level3"><a href="#" title="2012">2012</a></li>
                                    <li class="level3"><a href="#" title="2015">2015</a></li>
                                    <li class="level3"><a href="#" title="2018">2018</a></li>
                                </ul>
                            </li>
                            <li class="level2"><a href="#">Category</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="#" title="GRANDEUR">GRANDEUR</a></li>
                                    <li class="level3"><a href="#" title="AVANTI">AVANTI</a></li>
                                    <li class="level3"><a href="#" title="I30">I30</a></li>
                                    <li class="level3"><a href="#" title="TUSCAN">TUSCAN</a></li>
                                    <li class="level3"><a href="#" title="SONATA">SONATA</a></li>
                                </ul>
                            </li>
                            <li class="level2">
                                <img src="assets/images/images-menu.jpg" alt="Sub-Menu" />
                            </li>
                        </ul>
                    </div>
                    <!-- End Dropdow Menu -->
                </li>
                <li class="level1"><a href="#" title="BMW">BMW</a></li>
                <li class="level1"><a href="#">JEEP</a></li>
                <li class="level1"><a href="#" title="MITSUBISHI">MITSUBISHI</a></li>
                <li class="level1"><a href="#" title="VOLVO">VOLVO</a></li>
            </ul>
            <div class="menu-icon-right">
                <a class="refresh" href="add_product.php" title="twitter"><i class="zmdi zmdi-camera-add"></i></a>
                <a class="favor" href="#" title="sky"><i class="zmdi zmdi-favorite-outline"></i></a>

                <div class="cart dropdown">
                    <a class="icon-cart" href="#" title="Cart">
                        <i class="zmdi zmdi-shopping-cart-plus"></i>
                        <span class="cart-count">4</span>
                    </a>
                    <div class="cart-list dropdown-menu">
                        <ul class="list">
                            <li>
                                <a href="#" title="" class="cart-product-image"><img src="assets/images/products/1.jpg" alt="Product"></a>
                                <div class="text">
                                    <p class="product-name"> #2145</p>
                                    <p class="product-price">1 x $69.90</p>
                                </div>
                                <a href="#" class="delete-item">
                                    <i class="zmdi zmdi-close-circle-o"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="" class="cart-product-image"><img src="assets/images/products/1.jpg" alt="Product"></a>
                                <div class="text">
                                    <p class="product-name"> #2145</p>
                                    <p class="product-price">1 x $69.90</p>
                                </div>
                                <a href="#" class="delete-item">
                                    <i class="zmdi zmdi-close-circle-o"></i>
                                </a>
                            </li>
                        </ul>
                        <p class="total"><span>Total cost</span> $1121.98</p>
                        <a class="checkout" href="#" title="view cart">view cart</a>
                        <a class="checkout bg-black" href="#" title="check out">Check out</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End container -->
    </nav>
    <!-- End mega menu -->
</header><!-- /header -->