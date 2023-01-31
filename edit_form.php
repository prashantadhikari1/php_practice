<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<?php
require_once "connection.php";
$id = $_GET['id'];
$sql = "SELECT * FROM form where id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

?> 


<div class="detail">
<form action="edit_action.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">         

    <label for="firstname">First Name:</label><br>
    <input type="text" name="firstname" class="textstyle" placeholder="First Name.." value="<?php echo $row['firstname'];  ?>">
 
    <br>     
    <label for="lastname">Last Name:</label> <br>
    <input type="text" name="lastname" class="textstyle"  placeholder="Last Name.." value="<?php echo $row['lastname'];  ?>">
    <br>     
    <label for="email">Email:</label><br>
    <input type="email" name="email" class="textstyle"  placeholder="Email.." value="<?php echo $row['email'];  ?>" > 
    <br>      
    <div class="gender-section">
    <p>Please select your gender</p>
    <label for="male">Male</label>
    <input type="radio" name="gender" value="male" <?php if($row['gender']=="male") echo 'checked' ?> > 
    <label for="female">Female</label>
    <input type="radio" name="gender" value="female" <?php if($row['gender']=="female") echo 'checked' ?> > 
    <br> <br>  
    <label for="">Select Your Course:</label>
    <select name="course" id="" >
        <option value="BCA" <?php if($row['course']=="BCA") echo 'selected'?> >BCA</option>
        <option value="BBA" <?php if($row['course']=="BBA") echo 'selected'?> >BBA</option>
        <option value="BHM">BHM</option>
    </select> <br> <br>
    <label for="">Upload Your Pic:</label><br>
    <img id="output" src="uploaded_images/<?php echo $row['image']; ?>" height="100px" alt="img"><br>   
    <input type="file" name="image" value="<?php echo $row['image']; ?>" onchange="loadFile(event)">
    </div>
    <button type="submit" class="submit">update</button> 
</div>
</body>
<script src="script.js"></script>
