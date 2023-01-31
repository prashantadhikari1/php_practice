<?php
require_once "connection.php";

$id = $_GET['id'];

$sql1 = "SELECT * FROM form where id=$id";
$result = mysqli_query($conn,$sql1);
$row = mysqli_fetch_array($result);
$image_name =  $row['image'];
unlink("uploaded_images/".$image_name);

$sql = "DELETE FROM form WHERE id=$id";

$query = mysqli_query($conn,$sql);



// $file_name = $_FILES['image']['name'];  


if($query){
   header ("location: index.php");
}else{
    echo "Faild to delete";
}

?>