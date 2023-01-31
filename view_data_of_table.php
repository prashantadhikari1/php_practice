<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/info.css">
</head>
<body>
    
<?php
require_once "connection.php";
$id = $_GET['id'];
$sql = "SELECT * FROM form where id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
?>

<div class="info">
<h1 class="heading"> Your information: </h1>
<hr>
<div class="showdata">
   <div class="firstdata">
    <p class="imgspace"> Image: </p>
   <p> Firstname: </p>      
   <p> Lastname: </p>
   <p> Email: </p>
   <p> Gender: </p>
   <p> Course: </p>
   </div>

   <div class="seconddata">
    <p> <img src="uploaded_images/<?php echo $row['image']; ?>" alt=""> </p>
    <p> <?php echo $row['firstname']; ?> </p>
    <p> <?php echo $row['lastname']; ?> </p>
    <p> <?php echo $row['email']; ?> </p>
    <p> <?php echo $row['gender']; ?> </p>
    <p> <?php echo $row['course']; ?> </p>
   </div>
   </div>

</div>
</body>
</html>
