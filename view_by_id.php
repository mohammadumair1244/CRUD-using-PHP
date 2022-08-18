<?php 
include "db_connection.php";
?>

<div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    <label >ID: </label>
        <input type="text" name="id">
        <input class="btn btn-info" type="submit" name="btnn" value="Search">
    </form>
    

</div>

<?php

if(isset($_POST['btnn'])){
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

    $id=$_POST['id'];

    $sql="SELECT * FROM users WHERE id=$id";
    $result=mysqli_query($conn,$sql) or die("Query Failed");

    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){ ?>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
            
<div class="table-responsive" id="myDIV" >
<table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Password</th>
    </thead>

            <tr>
        <td><?php if(isset($row['id'])){echo $row['id'];} ?></td>
        <td><?php if(isset($row['firstName'])){echo $row['firstName'];} ?></td>
        <td><?php if(isset($row['lastName'])){echo $row['lastName'];} ?></td>
        <td><?php if(isset($row['email'])){echo $row['email'];} ?></td>
        <td><?php if(isset($row['password'])){echo $row['password'];} ?></td>

    </tr>        
        <?php }
    }
    else{
        echo "Error " . mysqli_error($conn);
    }
}
?>
<br><br>

<a href="index.php" style="color: white;" ><button class="btn btn-primary btn-block">Main Menu</button></a>

