<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <style>
.error {color: #FF0000;}
</style>
</head>
<body>


<?php
$firstnameErr = $lastnameErr = $emailErr = $genderErr = "";
$firstname = $lastname = $email = $gender = ""; 


if($_SERVER["REQUEST_METHOD"]== "POST"){
    if (empty($_POST['firstname'])){
        $firstnameErr = "firstname is required";
    }else{
        $firstname = ($_POST['firstname']);
    }
    if (empty($_POST['lastname'])){
        $lastnameErr = "lastname is required";
    }else{
        $lastname = ($_POST['lastname']);
    }
    if (empty($_POST['email'])){
        $emailErr = "email is required";
    }else{
        $email = ($_POST['email']);
    }
    if (empty($_POST['gender'])){
        $genderErr = "gender is required";
    }else{
        $gender = ($_POST['gender']);
    }
}
?>



    <div class="heading"><h1>PHP</h1></div>
    <div class="detail">
<form action="action.php" method="POST" enctype="multipart/form-data">         
<!-- <?php echo ($_SERVER["PHP_SELF"]); ?> -->
    <label for="firstname">First Name:</label><br>
    <input type="text" name="firstname" class="textstyle" placeholder="First Name..">
    <span class="error">* <?php echo $firstnameErr;?></span>
    <br>     
    <label for="lastname">Last Name:</label> <br>
    <input type="text" name="lastname" class="textstyle"  placeholder="Last Name.." >
    <span class="error">* <?php echo $lastnameErr;?></span>
    <br>     
    <label for="email">Email:</label><br>
    <input type="email" name="email" class="textstyle"  placeholder="Email.." > 
    <span class="error">* <?php echo $emailErr;?></span>
    <br>      
    <div class="gender-section">
    <p>Please select your gender</p>
    <label for="male">Male</label>
    <input type="radio" name="gender" value="male"> 
    <label for="female">Female</label>
    <input type="radio" name="gender" value="female"> 
    <span class="error">* <?php echo $genderErr;?></span>
    <br> <br>   
    <label for="">Select Your Course:</label>
    <select name="course" id="" >
        <option value="BCA">BCA</option>
        <option value="BBA">BBA</option>
        <option value="BHM">BHM</option>
    </select> <br> <br> 
    <label for="">Upload Your Pic:</label>
    <input type="file" name="image" id="uploadphoto"  onchange="loadFile(event)">
    <p><img id="output" width="100" /></p>
    </div>
    <button type="submit" class="submit">submit</button> <br> <br>
</form>
</div>

<a href="index.php"> <button>Table </button> </a>


<!-- <div class="calc">
<form action="beginning/calc.php" method="POST">
    <label for="firstnum">First Number:</label>
    <input style="margin-left:17px" type="number" name="firstnum" required> <br>
    <label for="secondnum">Second Number:</label>
    <input type="number" name="secondnum"> <br>
    <button type="submit" name="add" value="5">add</button>
    <button type="submit" name="sub">sub</button>
    <button type="reset">Reset</button>
</form>
</div> -->





<?php
// echo "<h2>Your Input:</h2>";
echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
?>

</body>
<script src="script.js"></script>
</html>     