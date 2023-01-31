<?php

require_once "connection.php";  

$id = $_GET['id'];

$updatefirstname = $_POST['firstname'];
$updatelastname = $_POST['lastname'];
$updateemail = $_POST['email'];
$updategender = $_POST['gender'];
$updatecourse = $_POST['course'];
date_default_timezone_set('Asia/Kathmandu');
$updatedate = date("Y/m/d h:i:s a");

$updatefile_name = time().'.jpg';


if($updatefile_name){
    $sql1 = "SELECT * FROM form where id=$id";
    $result = mysqli_query($conn,$sql1);
    $row = mysqli_fetch_array($result);
    $image_name = $row['image'];
    unlink("uploaded_images/".$image_name);

    $updatefile_tmp = $_FILES['image']['tmp_name'];
    $updatetarget_path = "uploaded_images/".$updatefile_name;

    $sql = "UPDATE form SET firstname='$updatefirstname',lastname='$updatelastname',email='$updateemail',gender='$updategender',course='$updatecourse',updatedate='$updatedate',image='$updatefile_name' WHERE id='$id'";
    $query = mysqli_query($conn,$sql);
    
    move_uploaded_file($updatefile_tmp, $updatetarget_path);
if($query){
    header("location: index.php");
}
}
else{
    
    $sql = "UPDATE form SET firstname='$updatefirstname',lastname='$updatelastname',email='$updateemail',gender='$updategender',course='$updatecourse',updatedate='$updatedate' WHERE id='$id'";
    $query = mysqli_query($conn,$sql);

    if($query){
        header("Location: index.php");
    }

}

?>


