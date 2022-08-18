<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
</head>

<body style="padding: 10px;">
    <form action="createe.php" method="post">
        <div class="form-group">
          <label >First Name</label>
          <input name="fname" type="text" class="form-control" id="fname"  placeholder="Enter First Name">
        </div>
        <div class="form-group">
            <label >Last Name</label>
            <input name="lname" type="text" class="form-control" id="fname"  placeholder="Enter Last Name">
          </div>
          <div class="form-group">
            <label for="">Email </label>
            <input name="email" type="text" class="form-control" id="email"  placeholder="Enter Email">
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      
      <?php
      include 'db_connection.php';
      
if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['pass'])) {
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  $sql="INSERT INTO Users (firstname, lastname, email, password) VALUES ('$fname', '$lname', '$email', '$pass')";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    // header('Location: create.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
mysqli_close($conn);

  
      ?>
<style>
  a:hover{
    text-decoration: none;
  }
</style>
<br><br><br><br>
<a href="index.php" style="color: white;" ><button class="btn btn-block btn-primary">Main Menu</button></a>
  </body>
</html>