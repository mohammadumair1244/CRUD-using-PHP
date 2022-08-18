<?php 

include "db_connection.php";

$show=  "SELECT * FROM users";
$result=mysqli_query($conn,$show);

if (mysqli_num_rows($result)>0){
?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    a:hover{
        text-decoration: none;
    }
</style>
<button class="btn btn-info" id="idb" ><a id="btn1" href="view_by_id.php" style="color: white;">View by ID</a></button>
<button class="btn btn-hover btn-dark" id="btn">View All</button>
    
<script>
const btn = document.getElementById('btn');

btn.addEventListener('click', () => {
  // 👇️ hide button
  btn.style.display = 'none';

    const backb=document.querySelector('#backb');
    backb.classList.remove('d-none');

    const idb=document.querySelector('#idb');
    idb.classList.add('d-none');

  // 👇️ show div
  const box = document.getElementById('myDIV');
  box.style.display = 'block';

//   hide a
const btn1 = document.getElementById('btn1');
btn1.style.display = 'none';
//show a
const btn2 = document.getElementById('btn2');
btn2.style.display = 'block';
});
</script>

<div class="table-responsive" id="myDIV" style="display: none">
<table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Password</th>
    </thead>
    <?php while($row=mysqli_fetch_assoc($result)){ ?>
    <tr>
        <td><?php if(isset($row['id'])){echo $row['id'];} ?></td>
        <td><?php if(isset($row['firstName'])){echo $row['firstName'];} ?></td>
        <td><?php if(isset($row['lastName'])){echo $row['lastName'];} ?></td>
        <td><?php if(isset($row['email'])){echo $row['email'];} ?></td>
        <td><?php if(isset($row['password'])){echo $row['password'];} ?></td>

    </tr>
    <?php } ?>
</table>
</div><br><br>
<button class="btn btn-warning d-none btn-lg" id="backb"> <a id="btn2" href="view.php" style="display: none;color:white">BACK</a>

<a href="index.php" style="color: white;" ><button class="btn btn-primary btn-block">Main Menu</button></a>

<?php } ?>