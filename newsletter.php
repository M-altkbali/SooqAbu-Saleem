<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="shortcut icon" href="assets/images/logo.png" />
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="assets/vendor/owl-slider.css"/>
        <link rel="stylesheet" type="text/css" href="assets/vendor/settings.css"/>
        <link rel="stylesheet" type="text/css" href="assets/vendor/animate.css"/>
        <title>Home Version1</title>
    </head>
    <body>
        <div class="newsletterpopup">
            <div class="newsletter-contetn">
                <span class="close-popup"></span>
                <div class="images">
                    <img src="assets/images/newsletter-images.png" alt="newsletter">
                </div>
                <div class="text">
                    <h3>newsletter</h3>
                    <p>Sign up to receive the coupon 10% off for your first purchase via email and get informations.</p>
                    <div class="newsletter newsletter-v2">
                         <form accept-charset="utf-8" method="get" action="#">
                            <input type="text" name="email" id="newsletter" title="Sign up for our newsletter" class="input-text required-entry validate-email" value="Enter your emaill" onfocus="if(this.value != '') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter your email';}">
                            <button type="submit" title="Subscribe" class="button button1"></button>
                        </form>
                     </div>
                     <!-- end newletter -->
                     <a class="link1 link2" href="#" title="Subscribe">Subscribe <i class="zmdi zmdi-check"></i></a>
                     <p>Questions? E-mail us at info@dama.com</p>
                     <span class="check">Do not show it anymore</span>
                </div>
            </div>
            <!-- End content -->
        </div>
        <!-- End popup -->
        <header id="header" class="header-v1">
            <div id="topbar">
                <div class="container">
                    <div class="topbar-left">
                        <a class="refresh" href="#" title="twitter"><i class="zmdi zmdi-refresh-sync"></i></a>
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
                                        <p class="product-name">Duma #2145</p>
                                        <p class="product-price">1 x $69.90</p>
                                    </div>
                                    <a href="#" class="delete-item">
                                        <i class="zmdi zmdi-close-circle-o"></i>
                                    </a>
                                </li> 
                                <li>
                                    <a href="#" title="" class="cart-product-image"><img src="assets/images/products/1.jpg" alt="Product"></a>
                                    <div class="text">
                                        <p class="product-name">Duma #2145</p>
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
                    <!-- End topBar-left -->
                    <div class="topbar-right">
                        <a href="#" title="Guarantee"><i class="zmdi zmdi-wrench"></i>Guarantee</a>
                        <a href="#" title="Adress"><i class="zmdi zmdi-pin"></i>Store location</a>
                        <div class="wrap-dollar-box dropdown">
                            <a href="#" title="Dollar"><i class="zmdi zmdi-money-box"></i>Dollar (US)<i class="zmdi zmdi-chevron-down"></i></a>
                            <div class="dollar-list dropdown-menu">
                                <ul>
                                    <li><a href="#" title="dollar(us)">Dollar (US)</a></li>
                                    <li><a href="#" title="Euro(EUR)">Euro(EUR)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="wrap-sign-in cart dropdown">
                        <a class="sign-in" href="#" title="user"><i class="zmdi zmdi-account"></i>My account</a>
                            <div class="register-list cart-list dropdown-menu ">
                                <h3>My account</h3>
                                <form class="form-horizontal" method="POST">
                                    <div class="acc-name">
                                        <input class="form-control" type="text" placeholder="Account name" id="inputacname">
                                    </div>
                                    <div class="acc-pass">
                                        <input class="form-control" type="text" placeholder="Password" id="inputpass"> 
                                    </div>
                                    <div class="remember">
                                        <input type="checkbox" id="me" name="nar" />
                                        <label for="me">remember me</label>
                                        <a class="help" href="#" title="help ?">help?</a>   
                                    </div>           
                                    <button type="submit" class="link-button">Submit</button>
                                </form>
                                <h3>Or register</h3>
                                <form class="form-horizontal" method="POST">
                                    <input type="text" placeholder="Your mail" id="inputmail" class="form-control">                  
                                    <input type="password" placeholder="Password" id="inputpass1" class="form-control">                   
                                    <button type="submit" class="link-button">register</button>
                                </form>
                                <h4>or register to</h4>
                                <div class="social">
                                    <a class="facebook" href="#" title="facebook"><i class="zmdi zmdi-facebook"></i></a>
                                    <a class="twitter" href="#" title="twitter"><i class="zmdi zmdi-twitter"></i></a>
                                    <a class="instagram" href="#" title="instagram"><i class="zmdi zmdi-instagram"></i></a>
                                    <a class="google" href="#" title="google"><i class="zmdi zmdi-google-glass"></i></a>
                                </div>
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
                    <div class="logo"><a href="#" title="Dana-Logo"><img src="assets/images/Dana-menu-logo.png" alt="Dana-Logo"></a></div>
                    <div class="search">
                        <div class="search-form">
                            <form method="get" action="#">
                                <div class="search-select">
                                    <i class="zmdi zmdi-chevron-down"></i>
                                    <select class="category-search" name="orderby">
                                        <option value="">Select Category</option>
                                        <option value="Headphone">Headphone</option>
                                        <option value="Smart phone">Smart phone</option>
                                        <option value="game consoles">game consoles</option>
                                        <option value="Laptop">Laptop</option>
                                        <option value="televison">televison</option>
                                    </select>
                                </div>
                                <!-- End search Select -->
                                <input type="text" name="s" class="ajax_autosuggest_input ac_input" value="" placeholder="search Keywork " autocomplete="off">
                                <button class="icon-search" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="menu-top menu-top-v2">
                        <ul class="nav-top">
                                <li class="level1"><a href="#" title="Hopme">Home</a>
                                    <ul class="menu-level-1">
                                        <li class="level2"><a href="home_v1.html" title="Home 1" target="_blank">Home</a></li>
                                        <li class="level2"><a href="about.html" title="Home 2" target="_blank">About us</a></li>
                                        <li class="level2"><a href="contact.html" title="Home 3" target="_blank">Contact us</a></li>
                                    </ul>
                                </li>
                                <li class="level1"><a href="#" title="Product">Product</a>
                                    <ul class="menu-level-1">
                                        <li class="level2"><a href="#" title="New" target="_blank">New</a></li>
                                        <li class="level2"><a href="#" title="Featured" target="_blank">Featured</a></li>
                                        <li class="level2"><a href="#" title="Sale off" target="_blank">Sale  off</a></li>
                                        
                                    </ul>
                                </li>
                                <li class="level1 active"><a href="#" title="Blog">Blog</a>
                                    <ul class="menu-level-1">
                                        <li class="level2"><a href="#" title="New Blog" target="_blank">New Blog</a></li>
                                        <li class="level2"><a href="#" title="lester" target="_blank">lester</a></li>
                                    </ul>
                                </li>
                            </ul>
                    </div>
                    <!-- End menutop -->
                </div>  
                <!-- End inner container -->
                <nav class="mega-menu mega-menu-v2">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <span class="icon-menu-header"></span>
                  <ul class="nav navbar-nav" id="navbar">
                    <li class="level1"><a href="#" title="Headphone"><span class="icon-mega icon-headphone"></span></a>
                    </li>
                    <li class="level1 dropdown">
                        <a href="#" title="men"><span class="icon-mega icon-watch"></span></a>
                        <div class="sub-menu dropdown-menu">
                          <ul class="menu-level-1">
                            <li class="level2"><a href="#">Laptop</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="#" title="Apple">Apple</a></li>
                                    <li class="level3"><a href="#" title="Samsung">Samsung</a></li>
                                    <li class="level3"><a href="#" title="Sony">Sony</a></li>
                                    <li class="level3"><a href="#" title="HTC">HTC</a></li>
                                    <li class="level3"><a href="#" title="Xaomi">Xaomi</a></li>
                                    <li class="level3"><a href="#" title="LG">LG</a></li>
                                </ul>
                            </li>
                            <li class="level2"><a href="#">Accessories</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="#" title="Submenu1">Submenu1</a></li>
                                    <li class="level3"><a href="#" title="Submenu2">Submenu2</a></li>
                                    <li class="level3"><a href="#" title="Submenu3">Submenu3</a></li>
                                    <li class="level3"><a href="#" title="Submenu4">Submenu4</a></li>
                                    <li class="level3"><a href="#" title="Submenu5">Submenu5</a></li>
                                </ul>
                            </li>
                            <li class="level2">
                                <img src="assets/images/images-menu.jpg" alt="Sub-Menu" />
                            </li>
                          </ul>
                      </div>
                      <!-- End Dropdow Menu -->
                    </li>
                    <li class="level1 dropdown"><a href="#" title="Smart phone "><span class="icon-mega icon-phone"></span></a>
                        <div class="sub-menu dropdown-menu">
                          <ul class="menu-level-1">
                            <li class="level2"><a href="#">Laptop</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="#" title="Apple">Apple</a></li>
                                    <li class="level3"><a href="#" title="Samsung">Samsung</a></li>
                                    <li class="level3"><a href="#" title="Sony">Sony</a></li>
                                    <li class="level3"><a href="#" title="HTC">HTC</a></li>
                                    <li class="level3"><a href="#" title="Xaomi">Xaomi</a></li>
                                    <li class="level3"><a href="#" title="LG">LG</a></li>
                                </ul>
                            </li>
                            <li class="level2"><a href="#">Accessories</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="#" title="Submenu1">Submenu1</a></li>
                                    <li class="level3"><a href="#" title="Submenu2">Submenu2</a></li>
                                    <li class="level3"><a href="#" title="Submenu3">Submenu3</a></li>
                                    <li class="level3"><a href="#" title="Submenu4">Submenu4</a></li>
                                    <li class="level3"><a href="#" title="Submenu5">Submenu5</a></li>
                                </ul>
                            </li>
                            <li class="level2">
                                <img src="assets/images/images-menu.jpg" alt="Sub-Menu" />
                            </li>
                          </ul>
                      </div>
                      <!-- End Dropdow Menu -->
                    </li>
                    <li class="level1"><a href="#"><span class="icon-mega icon-game"></span></a></li>
                    <li class="level1"><a href="#" title="Laptop"><span class="icon-mega icon-laptop"></span></a></li>
                    <li class="level1"><a href="#" title="televison"><span class="icon-mega icon-televison"></span></a></li>
                  </ul>
                </nav>
                <!-- End mega menu -->
                <div class="search search-v2">
                    <div class="search-form">
                        <form method="get" action="#">
                            <div class="search-select dropdown">
                                select category
                                <i class="zmdi zmdi-chevron-down"></i>
                                <ul class="dropdown-menu">
                                    <li><a href="#" title="category1">category1</a></li>
                                    <li><a href="#" title="category2">category2</a></li>
                                    <li><a href="#" title="category3">category3</a></li>
                                </ul>
                            </div>
                            <!-- End search Select -->
                            <input type="text" name="s" class="ajax_autosuggest_input ac_input" value="" placeholder="search Keywork " autocomplete="off">
                            <button class="icon-search" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
                </div>
                <!-- End container -->
            </div>
            <!-- End header-top -->
            <nav class="menu-mobile">
                <ul class="nav">
                    <li class="level1"><a href="#" title="Store">Store</a>
                        <ul class="menu-level-1">
                            <li class="level2"><a href="home_v1.html" title="Home" target="_blank">Home</a></li>
                            <li class="level2"><a href="home_v2.html" title="about us" target="_blank">about us</a></li>
                            <li class="level2"><a href="home_v3.html" title="contatc us" target="_blank">contatc us</a></li>
                        </ul>
                    </li>
                    <li class="level1"><a href="#" title="Product">Product</a>
                        <ul class="menu-level-1">
                            <li class="level2"><a href="#" title="new" target="_blank">new</a></li>
                            <li class="level2"><a href="#" title="featured" target="_blank">featured</a></li>
                            <li class="level2"><a href="#" title="sale off" target="_blank">sale off</a></li>
                        </ul>
                    </li>
                    <li class="level1"><a href="#" title="Blog">Blog</a>
                        <ul class="menu-level-1">
                            <li class="level2"><a href="#" title="new blog" target="_blank">new blog</a></li>
                            <li class="level2"><a href="#" title="lester" target="_blank">lester</a></li>
                        </ul>
                    </li>
                    <li class="level1"><a href="#" title="Headphone">Headphone</a>
                        <ul class="menu-level-1">
                            <li class="level2"><a href="home_v1.html" title="Home 1" target="_blank">Headphone 1</a></li>
                            <li class="level2"><a href="home_v2.html" title="Home 2" target="_blank">Headphone 2</a></li>
                            <li class="level2"><a href="home_v3.html" title="Home 3" target="_blank">Headphone 3</a></li>
                            <li class="level2"><a href="home_v4.html" title="Home 4" target="_blank">Headphone 4</a></li>
                        </ul>
                    </li>
                    <li class="level1">
                        <a href="#" title="Smart watch">Smart watch</a>
                        <ul class="menu-level-1">
                            <li class="level2">
                            <a href="#">Laptop</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="#" title="Apple">Apple</a></li>
                                    <li class="level3"><a href="#" title="Samsung">Samsung</a></li>
                                    <li class="level3"><a href="#" title="Sony">Sony</a></li>
                                    <li class="level3"><a href="#" title="HTC">HTC</a></li>
                                    <li class="level3"><a href="#" title="Xaomi">Xaomi</a></li>
                                    <li class="level3"><a href="#" title="LG">LG</a></li>
                                </ul>
                            </li>
                            <li class="level2">
                            <a href="#">Accessories</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="#" title="Submenu1">Submenu1</a></li>
                                    <li class="level3"><a href="#" title="Submenu2">Submenu2</a></li>
                                    <li class="level3"><a href="#" title="Submenu3">Submenu3</a></li>
                                    <li class="level3"><a href="#" title="Submenu4">Submenu4</a></li>
                                    <li class="level3"><a href="#" title="Submenu5">Submenu5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="level1"><a href="#" title="Smart phone ">Smart phone </a></li>
                    <li class="level1"><a href="#">game consoles</a></li>
                    <li class="level1"><a href="#" title="Laptop">Laptop</a></li>
                    <li class="level1"><a href="#" title="televison">televison</a></li>
                </ul>
            </nav>
            <!-- End menu mobile -->
        </header><!-- /header -->
        
        <div class="slide-show-ver1">
            <div class="container">
                <div class="tp-banner-container">
                    <div class="tp-banner tp-banner-ver1" >
                        <ul>
                            <!-- SLIDE  -->
                            <li data-transition="notransition" data-slotamount="6" data-masterspeed="1000" >
                                <!-- MAIN IMAGE -->
                                <img src="assets/images/bg-slide-show.png" alt="bg-slide-show.png"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                                <!-- LAYER NR. 3 -->

                                <div class="tp-caption large_bold_orange weight-600 capitalize color-white skewfromleft customout size-60 weight-800 uppercase"
                                    data-x="155"
                                    data-y="260"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="800"
                                    data-start="1600"
                                    data-easing="Power4.easeOut"
                                    data-endspeed="300"
                                    data-endeasing="Power1.easeIn"
                                    data-captionhidden="on"
                                    style="z-index: 9">Apple Watch
                                </div>
                                <!-- LAYER NR. 4 -->

                                <!-- LAYER NR. 5 -->
                                <div class="tp-caption large_bold_orange size-18 color-white skewfromright customout transform-none"
                                    data-x="155"
                                    data-y="370"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="800"
                                    data-start="1800"
                                    data-easing="Power4.easeOut"
                                    data-endspeed="300"
                                    data-endeasing="Power1.easeIn"
                                    data-captionhidden="on"
                                    style="z-index: 7">of the printing and typesetting industry. Lorem Ipsum<br> has +been the industry's <span class="text-span">Sale up to 40%</span> text ever<br> since the 1500s
                                </div>


                                <!-- LAYER NR. 8s -->
                                <div class="tp-caption skewfromleft customout link-1 link-2 height-50"
                                    data-x="155"
                                    data-y="500"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="1000"
                                    data-start="1500"
                                    data-easing="Power4.easeOut"
                                    data-endspeed="300" 
                                    data-endeasing="Power1.easeIn"
                                    data-captionhidden="on"
                                    style="z-index: 8"><a href="#" title="Follow">Buy Now</a>
                                </div>
                                 <!-- LAYER NR. 8s -->
                                <div class="tp-caption skewfromleft customout link-1 link-2 icons height-50"
                                    data-x="270"
                                    data-y="500"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="1000"
                                    data-start="1500"
                                    data-easing="Power4.easeOut"
                                    data-endspeed="300" 
                                    data-endeasing="Power1.easeIn"
                                    data-captionhidden="on"
                                    style="z-index: 8"><a href="#" title="link"></a>
                                </div>

                                <!-- LAYER NR. 9 -->
                                <div class="tp-caption skewfromright customout"
                                    data-x="590"
                                    data-y="130"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="1000"
                                    data-start="1500"
                                    data-easing="Power4.easeOut"
                                    data-endspeed="300" 
                                    data-endeasing="Power1.easeIn"
                                    data-captionhidden="on"
                                    style="z-index: 1"><img src="assets/images/home1-slideshow.png" alt="galaxy s7">
                                </div>
                            </li>
                            <!-- SLIDER -->
                            <!-- SLIDE  -->
                            <li data-transition="notransition" data-slotamount="6" data-masterspeed="1000" >
                                <img src="assets/images/bg-slide-show.png" alt="bg-slide-show.png"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                                <div class="tp-caption large_bold_orange weight-600 capitalize color-white skewfromleft customout size-60 weight-800 uppercase"
                                    data-x="155"
                                    data-y="260"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="800"
                                    data-start="1600"
                                    data-easing="Power4.easeOut"
                                    data-endspeed="300"
                                    data-endeasing="Power1.easeIn"
                                    data-captionhidden="on"
                                    style="z-index: 9">Apple Watch
                                </div>

                                <div class="tp-caption large_bold_orange size-18 color-white skewfromright customout transform-none"
                                    data-x="155"
                                    data-y="370"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="800"
                                    data-start="1800"
                                    data-easing="Power4.easeOut"
                                    data-endspeed="300"
                                    data-endeasing="Power1.easeIn"
                                    data-captionhidden="on"
                                    style="z-index: 7">of the printing and typesetting industry. Lorem Ipsum<br> has been the industry's <span class="text-span">Sale up to 40%</span> text ever<br> since the 1500s
                                </div>


                                <div class="tp-caption skewfromleft customout link-1 link-2 height-50"
                                    data-x="155"
                                    data-y="500"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="1000"
                                    data-start="1500"
                                    data-easing="Power4.easeOut"
                                    data-endspeed="300" 
                                    data-endeasing="Power1.easeIn"
                                    data-captionhidden="on"
                                    style="z-index: 8"><a href="#" title="Follow">Buy Now</a>
                                </div>

                                <div class="tp-caption skewfromleft customout link-1 link-2 icons height-50"
                                    data-x="270"
                                    data-y="500"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="1000"
                                    data-start="1500"
                                    data-easing="Power4.easeOut"
                                    data-endspeed="300" 
                                    data-endeasing="Power1.easeIn"
                                    data-captionhidden="on"
                                    style="z-index: 8"><a href="#" title="link"></a>
                                </div>

                                <div class="tp-caption skewfromright customout"
                                    data-x="590"
                                    data-y="130"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="1000"
                                    data-start="1500"
                                    data-easing="Power4.easeOut"
                                    data-endspeed="300" 
                                    data-endeasing="Power1.easeIn"
                                    data-captionhidden="on"
                                    style="z-index: 1"><img src="assets/images/home1-slideshow.png" alt="galaxy s7">
                                </div>
                            </li>
                            <!-- SLIDER -->
                        </ul>
                        <div class="tp-bannertimer"></div>
                </div>
                <!-- End container -->
                </div>
                <!-- End tp-banner -->
                <div class="social">
                    <a title="facebook" href="#" class="facebook"><i class="zmdi zmdi-facebook"></i></a>
                    <a title="twitter" href="#" class="twitter"><i class="zmdi zmdi-twitter"></i></a>
                    <a title="instagram" href="#" class="instagram"><i class="zmdi zmdi-instagram"></i></a>
                    <a title="google" href="#" class="google"><i class="zmdi zmdi-google-glass"></i></a>
                    <!-- End cart -->
                </div>
            </div>           
        </div>         
        <!-- End Slide-Show -->

          <div class="main-content">
                <div class="featured-product slider-product space-padding-tb-80 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container">
                        <div class="title-text size-64">
                            <h3><span>F</span>eatured product</h3>
                        </div>
                        <div class="images">
                            <img src="assets/images/Dana-home1.bg-featured.png" alt="Product-Featured">
                        </div>
                        <!-- end images -->
                    
                        <div class="products">
                            <div class="product">
                                <span class="icon-cat headphone"></span>
                                <a class="product-images" href="#" title="">
                                    <img class="primary_image" src="assets/images/Dana-home1-product-featured1.png" alt="Product"/>
                                </a>
                                <div class="product-content">
                                    <p>Headphone</p>
                                    <p class="title"> Beats Pro headphones</p>
                                    <ul>
                                        <li>6 Months Warranty Ergonomic Designs</li>
                                        <li>Flat Folding Headphone Adjustable Headband</li>
                                        <li>32mm Speakers 1.2m Cable</li>
                                        <li>Soft Ear Cushions 3.5 mm jack plug</li>
                                        <li>SUPC: 1517704</li>
                                    </ul>
                                </div>
                                <!-- End product content -->
                                <div class="action">
                                    <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                    <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                    <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                </div>
                            </div>
                            <!-- End product -->
                            <div class="product">
                                <span class="icon-cat headphone"></span>
                                <a class="product-images" href="#" title="">
                                    <img class="primary_image" src="assets/images/Dana-home1-product-featured1.png" alt="Product"/>
                                </a>
                                <div class="product-content">
                                    <p>Headphone</p>
                                    <p class="title"> Beats Pro headphones</p>
                                    <ul>
                                        <li>6 Months Warranty Ergonomic Designs</li>
                                        <li>Flat Folding Headphone Adjustable Headband</li>
                                        <li>32mm Speakers 1.2m Cable</li>
                                        <li>Soft Ear Cushions 3.5 mm jack plug</li>
                                        <li>SUPC: 1517704</li>
                                    </ul>
                                </div>
                                <!-- End product content -->
                                <div class="action">
                                    <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                    <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                    <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                </div>
                            </div>
                            <!-- End product -->
                            <div class="product">
                                <span class="icon-cat headphone"></span>
                                <a class="product-images" href="#" title="">
                                    <img class="primary_image" src="assets/images/Dana-home1-product-featured1.png" alt="Product"/>
                                </a>
                                <div class="product-content">
                                    <p>Headphone</p>
                                    <p class="title"> Beats Pro headphones</p>
                                    <ul>
                                        <li>6 Months Warranty Ergonomic Designs</li>
                                        <li>Flat Folding Headphone Adjustable Headband</li>
                                        <li>32mm Speakers 1.2m Cable</li>
                                        <li>Soft Ear Cushions 3.5 mm jack plug</li>
                                        <li>SUPC: 1517704</li>
                                    </ul>
                                </div>
                                <!-- End product content -->
                                <div class="action">
                                    <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                    <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                    <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                </div>
                            </div>
                            <!-- End product -->
                            <div class="product">
                                <span class="icon-cat headphone"></span>
                                <a class="product-images" href="#" title="">
                                    <img class="primary_image" src="assets/images/Dana-home1-product-featured1.png" alt="Product"/>
                                </a>
                                <div class="product-content">
                                    <p>Headphone</p>
                                    <p class="title"> Beats Pro headphones</p>
                                    <ul>
                                        <li>6 Months Warranty Ergonomic Designs</li>
                                        <li>Flat Folding Headphone Adjustable Headband</li>
                                        <li>32mm Speakers 1.2m Cable</li>
                                        <li>Soft Ear Cushions 3.5 mm jack plug</li>
                                        <li>SUPC: 1517704</li>
                                    </ul>
                                </div>
                                <!-- End product content -->
                                <div class="action">
                                    <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                    <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                    <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                </div>
                            </div>
                            <!-- End product -->
                        </div>
                        <!-- End product -->
                        
                        <div class="wrap-time">
                            <h3>beat Studio wireless (White)</h3>
                            <p>Lorem Ipsum is simply dummy text of the</p>
                            <div class="time" data-countdown="countdown" data-date="12-20-2016-10-20-30"></div>
                            <p class="best-price"><span>Sale off:</span>$250.00- <span class="price-old">370,00</span></p>
                        </div>
                        <!-- End wrap-time -->
                    </div>
                    <!-- End container -->
                </div>
                <!-- End popular-product -->
            
                <div class="slider-product popular-product tabs-right space-padding-tb-50 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="400ms">
                    <div class="container">
                    <div class="title-text">
                        <h3><span>P</span>opular Product</h3>    
                    </div>
                    <ul class="tabs">
                        <li class="item" rel="tab_01">Tables</li>
                        <li class="item" rel="tab_02">Chairs</li>
                        <li class="item" rel="tab_03">Sofas</li>
                        <li class="item" rel="tab_04">Sofas</li>
                        <li class="item" rel="tab_05">Sofas</li>
                        <li class="item" rel="tab_06">Sofas</li>
                    </ul>
                    <div class="tab-container space-30">
                        <div id="tab_01" class="tab-content">
                            <div class="products">
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Mota SmartWatch G2 Pro</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        <ul class="description">
                                            <li>Windows 10</li>
                                            <li>Intel Quad Core Processors</li>
                                            <li>NVIDIA GeForce GTX 950M Graphics Card</li>
                                        </ul>
                                    </div>
                                    <!-- End wrap-title -->
                                    <div class="product-images">
                                        <div class="slide-product-images">
                                            <div class="items" data-thumb='<img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>'>
                                                <a href="#" title="products">
                                                    <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <div class="items" data-thumb='<img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>'>
                                                <a href="#" title="products">
                                                    <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <div class="items" data-thumb='<img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>'>
                                                <a href="#" title="products">
                                                    <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Mota SmartWatch G2 Pro</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Apple watch sport green</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Zeaplus Watch DM360</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">U8S Smart Bluetooth 3.0</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">I5 Plus Smart Bluetooth 4.0 </p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                            </div>
                            <!-- End product-tab-content products                                     -->
                        </div>
                        <!-- End Tables -->
                        <div id="tab_02" class="tab-content">
                            <div class="products">
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <div class="product-images">
                                        <div class="slide-product-images">
                                            <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                <a href="#" title="products">
                                                    <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                <a href="#" title="products">
                                                    <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                <a href="#" title="products">
                                                    <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                            </div>
                            <!-- End product-tab-content products  -->
                        </div>
                        <!-- End Chairs -->
                        <div id="tab_03" class="tab-content">
                            <div class="products">
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <div class="product-images">
                                        <div class="slide-product-images">
                                            <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                <a href="#" title="products">
                                                    <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                <a href="#" title="products">
                                                    <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                <a href="#" title="products">
                                                    <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                            </div>
                            <!-- End product-tab-content products  -->
                        </div>
                        <!-- End sofas -->
                        <div id="tab_04" class="tab-content">
                            <div class="products">
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <div class="product-images">
                                        <div class="slide-product-images">
                                            <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                <a href="#" title="products">
                                                    <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                <a href="#" title="products">
                                                    <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                <a href="#" title="products">
                                                    <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                            </div>
                            <!-- End product-tab-content products  -->
                        </div>
                        <!-- End sofas -->

                        <div id="tab_05" class="tab-content">
                            <div class="products">
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <div class="product-images">
                                        <div class="slide-product-images">
                                            <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                <a href="#" title="products">
                                                    <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                <a href="#" title="products">
                                                    <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                <a href="#" title="products">
                                                    <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                            </div>
                            <!-- End product-tab-content products  -->
                        </div>
                        <!-- End sofas -->

                        <div id="tab_06" class="tab-content">
                            <div class="products">
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <div class="product-images">
                                        <div class="slide-product-images">
                                            <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                <a href="#" title="products">
                                                    <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                <a href="#" title="products">
                                                    <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                </a>
                                            </div>
                                            <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                <a href="#" title="products">
                                                    <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                                <div class="product">
                                    <div class="wrap-title">
                                        <p class="product-title">Sony smartwatch 2 sw2</p>
                                        <p class="product-price"><span>Price: </span>$ 250.00</p>
                                    </div>
                                    <!-- End wrap-title -->
                                    <a class="product-images" href="#" title="">
                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                    </a>
                                    <div class="action">
                                        <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                        <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                        <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                    </div>
                                </div>
                                <!-- End product -->
                            </div>
                            <!-- End product-tab-content products  -->
                        </div>
                        <!-- End sofas -->
                    </div>
                    </div>
                    <!-- End container -->
                </div>
                <!-- End OurNewProduct -->
                    <div class="banner-home1-bottom">
                        <div class="container">
                            <div class="images wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="400ms">
                                <img src="assets/images/Dana-home1-banner-bottom.png" alt="Banner">
                            </div>
                            <!-- End image -->
                            <div class="text wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="400ms">
                                <p>Video game & consoles</p>
                                <p class="product-title">Consoles game Xbox 360  - 500 GB - Black</p>
                                <div class="description">
                                    <ul>
                                        <li>Enjoy the largest library of games, with blockbuster titles</li>
                                        <li>Flat Folding Headphone Adjustable Headband </li>
                                        <li>32mm Speakers 1.2m Cable </li>
                                        <li>Soft Ear Cushions 3.5 mm jack plug </li>
                                        <li>SUPC: 1517704</li>
                                    </ul>
                                </div>
                                <div class="product-price">
                                    <span class="title">Price:</span>
                                    <span class="price"> $250.00</span>
                                    <span class="price-old">$250.00</span>
                                </div>
                                <div class="product">
                                <div class="action">
                                    <a class="refresh" href="#"><i class="zmdi zmdi-refresh-sync"></i></a>
                                    <a href="#" title="Like"><i class="zmdi zmdi-favorite-outline"></i></a>
                                    <a href="#" title="add-to-cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                </div>
                                </div>
                            </div>
                            <!-- End text -->
                        </div>
                        <!-- End container -->
                    </div>
                    <!-- End Banner Home1 Bottom -->
                    <div class="best-sellers slider-product tabs-right space-padding-tb-60  wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="400ms">
                        <div class="container">
                        <div class="title-text">
                            <h3><span>B</span>est sellers</h3>    
                        </div>
                        <ul class="tabs1">
                            <li class="item" rel="tab1_01">Top 20</li>
                            <li class="item" rel="tab1_02">Headphone</li>
                            <li class="item" rel="tab1_03">Laptop&PC</li>
                            <li class="item" rel="tab1_04">Smart phone</li>
                            <li class="item" rel="tab1_05">Watch</li>
                        </ul>
                        <div class="tab-container space-30">
                            <div id="tab1_01" class="tab-content1">
                                <div class="slide-product-tab">
                                <div class="products">
                                    <div class="product">
                                        <a class="icon-cat" href="#" title="headphone">Headphone</a>
                                        <div class="wrap-title">
                                            <p class="product-title">SMS Audio SMS-WD-YLW Street</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <div class="product-images">
                                            <div class="slide-product-images">
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End product images -->
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <a class="icon-cat" href="#" title="headphone">Watch</a>
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <a class="icon-cat" href="#" title="headphone">smart phone</a>
                                        <div class="wrap-title">
                                            <p class="product-title">Galaxy S6 edge</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <a class="icon-cat" href="#" title="headphone">Watch</a>
                                        <div class="wrap-title">
                                            <p class="product-title">Apple watch sport green</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <a class="icon-cat" href="#" title="headphone">Laptop</a>
                                        <div class="wrap-title">
                                            <p class="product-title">HP Spectre x360 - 15t</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                </div>
                                <!-- End product -->
                                <div class="products">
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <div class="product-images">
                                            <div class="slide-product-images">
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End product images -->
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                </div>
                                <!-- End product-->
                                <div class="products">
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                         <div class="product-images">
                                            <div class="slide-product-images">
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                </div>
                                <!-- End product-->
                                <div class="products">
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                         <div class="product-images">
                                            <div class="slide-product-images">
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                </div>
                                <!-- End product-->
                                </div>
                                <!-- End slider product tab -->
                            </div>
                            <!-- End Tables -->
                            <div id="tab1_02" class="tab-content1">
                                <div class="products">
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                         <div class="product-images">
                                            <div class="slide-product-images">
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                </div>
                                <!-- End product-tab-content products  -->
                            </div>
                            <!-- End Chairs -->
                            <div id="tab1_03" class="tab-content1">
                                <div class="products">
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                         <div class="product-images">
                                            <div class="slide-product-images">
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                </div>
                                <!-- End product-tab-content products  -->
                            </div>
                            <!-- End sofas -->
                            <div id="tab1_04" class="tab-content1">
                                <div class="products">
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                         <div class="product-images">
                                            <div class="slide-product-images">
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                </div>
                                <!-- End product-tab-content products  -->
                            </div>
                            <!-- End sofas -->

                            <div id="tab1_05" class="tab-content1">
                                <div class="products">
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                         <div class="product-images">
                                            <div class="slide-product-images">
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="items" data-thumb='<img class="primary_image" src="assets/images/products/1.jpg" alt=""/>'>
                                                    <a href="#" title="products">
                                                        <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                    <div class="product">
                                        <div class="wrap-title">
                                            <p class="product-title">Sony smartwatch 2 sw2</p>
                                            <p class="product-price"><span>Price: </span>$ 250.00</p>
                                        </div>
                                        <!-- End wrap-title -->
                                        <a class="product-images" href="#" title="">
                                            <img class="primary_image" src="assets/images/Dana-home1-product1.jpg" alt=""/>
                                        </a>
                                        <div class="action">
                                            <a href="#" class="refresh"><i class="zmdi zmdi-refresh-sync"></i></a>
                                            <a title="Like" href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                            <a title="add-to-cart" href="#"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <!-- End product -->
                                </div>
                                <!-- End product-tab-content products  -->
                            </div>
                            <!-- End sofas -->
                        </div>
                        </div>
                        <!-- End container -->
                    </div>
                    <!-- End bes-sellers -->
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
                            <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
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
                            <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
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
                            <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
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
                            <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
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
                            <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
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
                            <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
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
                            <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
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
                            <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
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
                            <img class="primary_image" src="assets/images/products/1.jpg" alt=""/>
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
          <footer id="footer">
              <div class="container">
                <div class="row footer-top">
                    <div class="col-md-5">
                        <a class="logo" href="#" title="logo"><img src="assets/images/Dana-menu-logo.png" alt="Logo"></a>
                        <p class="italic">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                        <div class="infomation">
                            <p><i class="zmdi zmdi-pin"></i>PO Box CT16122 Collins Street West, Victoria 8007, Australia.</p>
                            <p><i class="zmdi zmdi-phone"></i>+81 (2) 345 6789</p>
                            <p><i class="zmdi zmdi-email"></i>engotheme@gmail.com</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h3>Quick link</h3>
                        <ul class="menu">
                            <li><a href="#" title="Headphone">Headphone</a></li>
                            <li><a href="#" title="Smart watch">Smart watch</a></li>
                            <li><a href="#" title="Smartphone">Smartphone</a></li>
                            <li><a href="#" title="Video game & consoles">Video game & consoles</a></li>
                            <li><a href="#" title="Laptop">Laptop</a></li>
                            <li><a href="#" title="Televison">Televison</a></li>
                            <li><a href="#" title="Home">Home</a></li>
                            <li><a href="#" title="About us">About us</a></li>
                            <li><a href="#" title="Blog">Blog</a></li>
                            <li><a href="#" title="Service">Service</a></li>
                            <li><a href="#" title="Contact us">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>Customer care</h3>
                        <ul class="menu">
                            <li><a href="#" title="My account">My account</a></li>
                            <li><a href="#" title="Order tracking">Order tracking</a></li>
                            <li><a href="#" title="wish list">wish list</a></li>
                            <li><a href="#" title="customer service">customer service</a></li>
                            <li><a href="#" title="Returns/ Exchage">Returns/ Exchage</a></li>
                            <li><a href="#" title="FAQS">FAQS</a></li>
                            <li><a href="#" title="Product support">Product support</a></li>
                        </ul>
                    </div> 
                </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                    <div class="col-md-8">
                         <p>&copy; COPYRIGHT 2016 BY ENGOTHEME</p>
                         <a href="" title="facebook"><i class="zmdi zmdi-facebook"></i></a>
                         <a href="#" title="google"><i class="zmdi zmdi-google-plus"></i></a>
                         <a href="#" title="instagram"><i class="zmdi zmdi-instagram"></i></a>
                         <a href="#" title="twitter"><i class="zmdi zmdi-twitter"></i></a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" title="Payment"><img src="assets/images/Hermes-footer-payment.png" alt="payment"></a>
                    </div>
                </div>
              </div>
              <!-- End container -->
          </footer>
        <script type="text/javascript" src="assets/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="assets/js/engo-plugins.js"></script>
        <script type="text/javascript" src="assets/js/wow.min.js"></script>
        <script type="text/javascript" src="assets/js/store.js"></script>
    </body>
</html>

