
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
<nav class="navbar navbar-light justify-content-center s-3 mb-5" style="background-color: palegreen;">REGISTRATION ADDING FORM </nav>
<div class="container">
<?php
if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.';
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}


?>




    <a href="addnew.php" class="btn btn-dark m-3">Add New</a>


    <table class="table  table-hover text-center mb-3">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody>
    <?php
    include "db.php";
$sql= "SELECT * FROM  project";
$result=mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($result)){
    ?>

<tr>
      <td > <?php echo $row['id']  ?> </td>
      <td > <?php echo $row['first_name']  ?> </td>
      <td > <?php echo $row['last_name']  ?> </td>
      <td > <?php echo $row['email']  ?> </td>
      <td > <?php echo $row['gender']  ?> </td>
      
      <td>
        <a href="edit.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
        <a href="delete.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-trash fs-5 "></i></a>
      </td>
    </tr>
   
    <?php
}





    ?>
    
  </tbody>
</table>

</div>
</body>
</html>