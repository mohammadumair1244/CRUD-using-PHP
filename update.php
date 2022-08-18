
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<center><form action="" method="POST">
    <br><br> 
    <input type="text" name="id" placeholder="Enter ID">
    <input type="text" name="fname" placeholder="Enter First Name">
    <input type="text" name="lname" placeholder="Enter Last Name">
    <input type="email" name="email" placeholder="Enter Email Address"><br><br>

    <input type="submit" name="update" value="UPDATE DATA"><br>


</form>
</center>
<?php 
include "db_connection.php";

if (isset($_POST['update'])) {
    $id=$_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $sql="UPDATE users SET firstName='$fname', lastName='$lname', email='$email' WHERE id='$id'";
    $result=mysqli_query($conn,$sql) or die("Query Failed");
    if ($result) {
        echo "Data Updated Successfully";
    }

}



?>
<br><br><br><a href="index.php" style="color: white;" ><button class="btn btn-primary btn-block">Main Menu</button></a>
