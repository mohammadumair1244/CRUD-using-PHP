<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["id"])) {
        $idErr = "ID is required";
        echo $idErr;
        header("Refresh:1; url=delete.php");
        die();
        }
}
?>
<?php
if(isset($_POST['deletebtn'])){

    include "db_connection.php";
    $id=$_POST['id'];
    $sql="DELETE FROM users WHERE id='$id'";

    if(mysqli_query($conn,$sql)){
        echo "Record deleted successfully";

    }
    else{
        echo "Error deleting record: " . mysqli_error($conn);
    }
}?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<div class="d-flex-row p-4">
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    <h3 class="d-inline" >ID</h3>
    <input type="text" name="id" />
    <input class="submit btn btn-danger" type="submit" value="DELETE" name="deletebtn" />    
    </form>
</div>

<br><br><br>
<a href="index.php" style="color: white;" ><button class="btn btn-primary btn-block">Main Menu</button></a>
