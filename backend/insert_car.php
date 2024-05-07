<?php
include "connection.php";
error_reporting(0);


$num_post = $_POST['num_post'];
$name = $_POST['name_car'];
$model = $_POST['model_car'];
$color = $_POST['color'];
$date = $_POST['production_date'];
$customs = $_POST['customs'];
$engine = $_POST['engine_capacity'];
$traveled = $_POST['traveled_distance'];
$import = $_POST['import'];
$motion = $_POST['motion_vector'];
$price = $_POST['price'];
$feature = $_POST['feature'];
$chkfeature = implode(",", $feature);
$defect = $_POST['defect'];
$chkdefect = implode(",", $defect);
$notes = $_POST['notes'];

$targetDir = "../images/";
$image = $_FILES['files']['name'];
$fileName = implode(",", $image);
echo $fileName . "<br>";

if (!empty($image)) {
    foreach ($image as $key => $val) {
        $targetFilePath = $targetDir . $val;
        move_uploaded_file($_FILES['files']['tmp_name'][$key], $targetFilePath);
    }
    $query = "INSERT INTO cars ( `name`, `model`, `color`, `production_date`, `price`, `customs`, `defects`, `engine_capacity`, `traveled_distance`, `import`, `motion_vector`, `features`, `notes`, `num_post`, `pic`) 
    VALUES ('$name','$model','$color','$date','$price','$customs','$chkdefect','$engine','$traveled','$import','$motion','$chkfeature','$notes','$num_post','$fileName')";
    $statment = $db->prepare($query);
    $statment->execute();
    echo "IMAGE UPLOADED SUCCESSFULLY .";
}




























// if (isset($_POST['insert_car'])) {

//     $name = $_POST['name'];
//     $model = $_POST['model'];
//     $date = $_POST['production_date'];
//     $customs = $_POST['customs'];
//     $engine = $_POST['engine_capacity'];
//     $traveled = $_POST['traveled_distance'];
//     $import = $_POST['import'];
//     $motion = $_POST['motion_vector'];
//     $price = $_POST['price'];
//     // $feature = $_POST['feature'];
//     // $chkfeature = implode(',', $feature);
//     // $defect = $_POST['defect'];
//     // $chkdefect = implode(',', $defect);

//     $query = "INSERT INTO cars 
// (name,model,production_date,customs,engine_capacity,traveled_distance,import,motion_vector,price)
// VALUES ('$name','$model','$date','$customs','$engine','$traveled','$import','$motion','$price')";
//     $data = mysqli_query($db, $query);

//     if ($data) {
//         echo "Data insert into database";
//         header("success.php");
//     } else {
//         echo "faild insert data into database";
//     }
// }
