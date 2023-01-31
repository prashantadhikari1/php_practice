<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/table.css">
</head>
<body>
<div><h1>hello</h1></div>;

<!-- <div class="table-data">
    <table>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
    </table>
</div> -->

<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$gender = $_POST['gender'];


echo "<div id='table-data'>". "<table class='hel'>";
echo "<th>Firstname</th>"."<th>Lastname</th>"."<th>Email</th>"."<th>Gender</th>";
echo "<tr>"."<td>" . $firstname ." </td>";
echo  "<td>" . $lastname ."</td>";
echo "<td>". $email ."</td>";
echo "<td>". $gender ."</td>";
echo "</tr>";
echo "</table>";
echo "</div>";

?>

</body>
</html>