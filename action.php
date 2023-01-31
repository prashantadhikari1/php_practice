
<?php

require_once "connection.php";  

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$course = $_POST['course'];
date_default_timezone_set('Asia/Kathmandu');
$addedDate = date("Y/m/d:h:i:s a");


// if(isset($_FILES['image'])){

 // $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $file_tmp = $_FILES['image']['tmp_name'];
   
    $file_name = time().'.jpg';
    $target_path = "uploaded_images/".$file_name;
    
    if(move_uploaded_file($file_tmp, $target_path)) {   
        echo "Image uploaded successfully";
    }else{
        echo "Couldnot upload Images";
    }

// }



$sql = "INSERT INTO form (firstname, lastname, email, gender, course, addeddate, image) VALUES ('$firstname','$lastname','$email','$gender','$course','$addedDate','$file_name')";
$query = mysqli_query($conn,$sql);

if($query){
   header("Location: index.php");
}
else{
echo "data didn't gone to database";
}

?>




