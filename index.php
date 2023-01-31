<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/table.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style>

        .modal_wrapper{
            position: absolute;
            top: 0;
            left: 0;
            background-color: rgba(0,0,0,0.5);
            width: 100%;
            height: 100vh;
            min-height: 500px;
            display: none;
            justify-content: center;
            align-items: center;
        }
        .modal_container{
            background-color: white;
            color: #000;
            min-width: 100px;
            padding: 10px;
            border-radius: 5px;
        }
        .your_div{
            width: 100px;
            height: 100px;
        }
        </style>
</head>
<body>

<div class="create"><a href="create_form.php"><button>Create <i class="fa-solid fa-plus"></i> </button></a> </div>
<?php
require_once "connection.php";
$sql = "SELECT * FROM form ";
$result = mysqli_query($conn,$sql);     
$serialNo = 1;

?>

<table>
    <th>S.N</th>
    <th>Image</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Course</th>
    <th>Added Date</th>
    <th>Updated Date</th>
    <th>Action</th>
        <?php if (mysqli_num_rows($result)>0){ ?> 
        <?php while ($row=mysqli_fetch_array($result)){ ?>
            <tr>
            <td> <?php echo $serialNo; ?>  </td>
            <td> <img src="uploaded_images/<?php echo $row['image']; ?>" height="50px" alt="img"> </td>
            <td> <?php echo $row['firstname']; ?> </td>
            <td> <?php echo $row['lastname']; ?> </td>
            <td> <?php echo $row['email'];  ?> </td>
            <td> <?php echo $row['gender'];  ?> </td>
            <td> <?php echo $row['course']; ?> </td>
            <td> <?php echo $row['addeddate'];?> </td>
            <td> <?php if(empty($row['updatedate'])){echo "-";  } else{echo $row['updatedate'];} ?> </td>
            <td>
            <a href="view_data_of_table.php?id=<?php echo $row['id']; ?>"> <button class="view"> <i class="fa-solid fa-eye"></i> view</button></a>
            <a href="edit_form.php?id=<?php echo $row['id']; ?>"> <button class="edit"> <i class="fa-solid fa-pen-to-square"></i> edit</button> </a>
             <button class="delete" onClick="confirmDel()"> <i class="fa-solid fa-trash"></i> delete</button>
           </td>
    </tr>
    <?php $serialNo = $serialNo + 1 ?>




<div class="modal_wrapper">
    <div class="modal_container">
        <div class="your_div">
          Are you sure ? 
          <div>
            <td>
            <a href="deleteAction.php?id=<?php echo $row['id']; ?>">  <button>yes</button> </a>
            <button class="" onClick="cancleDel()" >No</button>
            </td>
        </div>
        </div>
</div>

        </div>

        <?php } ?>
        <?php } ?>
</table>

</body>
 
<script src="script.js"> </script>
</html>