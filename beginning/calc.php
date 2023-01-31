<?php
$firstnumber = $_POST['firstnum'];
$secondnumber = $_POST['secondnum'];

if(isset($_POST['add'])) {
    echo "The sum of ". $firstnumber . " and ". $secondnumber . " is: " .  $firstnumber + $secondnumber;
}
elseif(isset($_POST['sub'])){
    echo "The difference of ". $firstnumber . " and ". $secondnumber . " is ". $firstnumber - $secondnumber;
} 

?>