<?php include("backend/connection.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/logo.png" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/owl-slider.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/settings.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate.css" />
    <link rel="stylesheet" href="assets/sass/style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <title>Add product</title>
</head>

<body>
    <?php include "header.php"; ?>

    <div class="best-sellers slider-product proposes space-30 space-padding-tb-30" data-wow-duration="0.5s" data-wow-delay="500ms">
        <div class="container">
            <div class="title-text">
                <h3><span>A</span>dd your car</h3>
            </div>

            <div class="tab-container space-30">
                <div id="tab2_01" class="tab-content2">

                    <form role="form" method="POST" enctype="multipart/form-data" class="slide-products" id="form">

                        <div class="products">
                            <div class="product">

                                <!-- <div class="acc-name"> -->
                                <input type="number" name="num_post" class="" value="<?php echo (rand()); ?>" hidden>
                                <!-- </div>رقم تنزيل السيارة -->

                                <div class="acc-name">
                                    <input type="text" name="name_car" class="form-control" placeholder="Name of Car">
                                </div><!-- اسم السيارة -->

                                <div class="acc-name">
                                    <input type="text" name="model_car" class="form-control" placeholder="Model of Car">
                                </div><!-- الموديل -->

                                <div class="acc-name">
                                    <lable>Color</lable>
                                    <select class="form-control" name="color">
                                        <option value="/">CHOOSE COLOR</option>
                                        <option value="red">RED</option>
                                        <option value="white">WHITE</option>
                                        <option value="black">BLACK</option>
                                        <option value="gray">GRAY</option>
                                        <option value="dark-gray">DARK GRAY</option>
                                        <option value="gray-light">LIGHT GRAY</option>
                                        <option value="blue">BLUE</option>
                                        <option value="blue-light">LIGHT BLUE</option>
                                        <option value="yellow">YELLOW</option>
                                        <option value="brown">BROWN</option>
                                        <option value="orange">ORANGE</option>
                                        <option value="teal">TEAL</option>
                                        <option value="silver">SILVER</option>
                                        <option value="gold">GOLD</option>
                                        <option value="green">GREEN</option>
                                        <option value="pink">PINK</option>
                                        <option value="purple">PURPLE</option>
                                    </select>
                                </div><!-- اللون -->

                                <div class="acc-name">
                                    <select name="production_date" class="form-control">
                                        <option value="/">SELECT YEAR</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                    </select>

                                </div><!-- تاريخ التصنيع -->

                                <div class="container_radio">
                                    <div class="cont-">
                                        <div class="lable-">
                                            <lable>Customs</lable>
                                        </div>
                                        <div class="acc-name">
                                            <div>
                                                <label for="yes">YES</label>
                                                <input class="form-control" name="customs" type="radio" id="yes" value="Yes">
                                            </div>
                                            <div>
                                                <label for="no">NO</label>
                                                <input class="form-control" name="customs" type="radio" id="no" value="No">
                                            </div>
                                        </div>
                                    </div><!-- جمرك ( نعم أو لا ) -->


                                </div>

                            </div>
                            <!-- End product -->

                            <div class="product">

                                <div class="acc-name">
                                    <input type="number" name="engine_capacity" class="form-control" placeholder="engine capacity">
                                </div><!-- سعة المحرك -->

                                <div class="acc-name">
                                    <input type="number" name="traveled_distance" class="form-control" placeholder="traveled distance">
                                </div><!-- المسافة المقطوعة -->

                                <div class="acc-name">
                                    <lable>import</lable>
                                    <select class="form-control" name="import">
                                        <option value="/">CHOOSE COUNTRY</option>
                                        <option value="Korea">Korea</option>
                                    </select>
                                </div><!-- استيراد -->

                            </div>
                            <!-- End product -->

                            <div class="product">
                                <div class="container_radio">
                                    <div class="cont-">
                                        <div class="lable-">
                                            <lable>motion vector</lable>
                                        </div>
                                        <div class="acc-name">
                                            <div>
                                                <label for="normal">Normal</label>
                                                <input type="radio" name="motion_vector" class="form-control" id="normal" value="normal">
                                            </div>
                                            <div>
                                                <label for="auto">Automatic</label>
                                                <input type="radio" name="motion_vector" class="form-control" id="auto" value="auto">
                                            </div>
                                        </div>
                                    </div><!-- ناقل الحركة -->
                                </div>
                                <div class="acc-name">
                                    <input type="number" name="price" class="form-control" placeholder="price">
                                </div><!-- السعر -->

                            </div>
                            <!-- End product -->

                            <div class="product">

                                <div class="features-conent">
                                    <div class="lab-">
                                        <label>features</label>
                                    </div>
                                    <div class="features">

                                        <div class="feature">
                                            <div class="checkbox">
                                                <input type="checkbox" value="1" name="feature[]" />
                                            </div>
                                            <label for="">حاله ممتازة</label>
                                        </div>
                                        <div class="feature">
                                            <div class="checkbox">
                                                <input type="checkbox" value="2" name="feature[]" />
                                            </div>
                                            <label for="">الكربون</label>
                                        </div>
                                        <div class="feature">
                                            <div class="checkbox">
                                                <input type="checkbox" value="3" name="feature[]" />
                                            </div>
                                            <label for="">كراسي كهربئيات</label>
                                        </div>
                                        <div class="feature">
                                            <div class="checkbox">
                                                <input type="checkbox" value="4" name="feature[]" />
                                            </div>
                                            <label for="">مرايات كهربائية</label>
                                        </div>
                                        <div class="feature">
                                            <div class="checkbox">
                                                <input type="checkbox" value="5" name="feature[]" />
                                            </div>
                                            <label for="">كراسي جلد</label>
                                        </div>
                                        <div class="feature">
                                            <div class="checkbox">
                                                <input type="checkbox" value="6" name="feature[]" />
                                            </div>
                                            <label for="">بصمه تشغيل</label>
                                        </div>
                                        <div class="feature">
                                            <div class="checkbox">
                                                <input type="checkbox" value="7" name="feature[]" />
                                            </div>
                                            <label for="">شاشة عرض</label>
                                        </div>
                                        <div class="feature">
                                            <div class="checkbox">
                                                <input type="checkbox" value="7" name="feature[]" />
                                            </div>
                                            <label for="">كاميرا خلفيه</label>
                                        </div>
                                        <div class="feature">
                                            <div class="checkbox">
                                                <input type="checkbox" value="7" name="feature[]" />
                                            </div>
                                            <label for="">تبريد و تسخين في الكراسي </label>
                                        </div>
                                        <div class="feature">
                                            <div class="checkbox">
                                                <input type="checkbox" value="7" name="feature[]" />
                                            </div>
                                            <label for="">تحكم كامل في المقود</label>
                                        </div>
                                        <div class="feature">
                                            <div class="checkbox">
                                                <input type="checkbox" value="7" name="feature[]" />
                                            </div>
                                            <label for="">نظام إقتصاد الوقود eco </label>
                                        </div>
                                        <div class="feature">
                                            <div class="checkbox">
                                                <input type="checkbox" value="7" name="feature[]" />
                                            </div>
                                            <label for="">فليتشة في المرايات</label>
                                        </div>
                                        <div class="feature">
                                            <div class="checkbox">
                                                <input type="checkbox" value="7" name="feature[]" />
                                            </div>
                                            <label for="">فتحه في الصقف</label>
                                        </div>
                                        <div class="feature acc-name">
                                            <input type="text" name="feature[]" placeholder="ELSE" id="" value="">
                                        </div>

                                    </div>
                                </div><!-- المميزات -->

                            </div>
                            <!-- End product -->

                            <div class="product">

                                <div class="defects-conent">
                                    <div class="lab-">
                                        <label>defects</label>
                                    </div>
                                    <div class="defects">
                                        <div class="defect">
                                            <div class="checkbox">
                                                <input type="checkbox" value="1" name="defect[]" />
                                            </div>
                                            <label for="">لا يوجد عيوب</label>
                                        </div>
                                        <div class="defect acc-name">
                                            <input type="text" name="defect[]" placeholder="ELSE" id="" value="">
                                        </div>
                                    </div>
                                </div><!-- العيوب -->

                            </div>
                            <!-- End product -->
                            <div class="product product_buttons ">



                                <div class="form">
                                    <div class="file-upload-wrapper" data-text="Select your file!">
                                        <input type="file" name="files[]" class="file-upload-field" multiple>
                                    </div>
                                </div>

                                <!-- <div class="dropzone dz-clickable" id="myDrop">
                                    <div class="dz-default dz-message" data-dz-message="">
                                        <span>Drop files here to upload</span>
                                    </div>
                                </div> -->

                                <div class="acc-name">
                                    <textarea name="notes" id="" cols="20" rows="10" placeholder="notes"></textarea>
                                </div>

                                <div class="buttons">
                                    <button type="submit" name="insert_car">Upload</button>
                                    <button type="button">Close</button>
                                </div>
                            </div>
                            <!-- End product -->
                        </div>
                        <!-- End product -->

                    </form>
                    <!-- End slider product tab -->

                </div>
                <!-- End Tables -->
            </div>
        </div>
        <!-- End container -->
    </div>

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
    <script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="assets/js/wow.min.js"></script>
    <script type="text/javascript" src="assets/js/store.js"></script>


    <script src="https://kit.fontawesome.com/7368c40b21.js" crossorigin="anonymous"></script>

    <!-- https://www.youtube.com/watch?v=WEJMYNK-rj4 -->
    <script>
        $("form").on("change", ".file-upload-field", function() {
            $(this).parent(".file-upload-wrapper").attr("data-text", $(this).val().replace(/.*(\/|\/)/, ''));
        })
    </script>


    <!-- https://www.youtube.com/watch?v=GxyM_OwOeyQ -->
    <script>
        $('#form').submit(function(event) {
            var formdata = new FormData(this);
            $.ajax({
                url: 'backend/insert_car.php',
                data: formdata,
                contentType: false,
                cache: false,
                processData: false,
                type: "POST",
                success: function(response) {
                    alert(response)
                },
                error: function() {
                    alert("Somthing is wrong ..!")
                }
            });
            event.preventDefault();
        });
    </script>

    <script>
        // Dropzone.autoDiscover = false;
        // var myDropzone = new Dropzone("div#myDrop", {
        //     paramName: "files", // The name that will be used to transfer the file
        //     addRemoveLinks: true,
        //     uploadMultiple: true,
        //     autoProcessQueue: false,
        //     parallelUploads: 50,
        //     maxFilesize: 10, // MB
        //     acceptedFiles: ".png, .jpeg, .jpg, .gif",
        //     url: "ajax/actions.ajax.php",
        // });

        // /* Add Files Script*/
        // myDropzone.on("success", function(file, message) {
        //     $("#msg").html(message);
        //     setTimeout(function() {
        //         window.location.href = "index.php"
        //     }, 800);
        // });

        // myDropzone.on("error", function(data) {
        //     $("#msg").html('<div class="alert alert-danger">There is some thing wrong, Please try again!</div>');
        // });

        // myDropzone.on("complete", function(file) {
        //     myDropzone.removeFile(file);
        // });

        // $("#add_file").on("click", function() {
        //     myDropzone.processQueue();
        // });
    </script>
</body>

</html>