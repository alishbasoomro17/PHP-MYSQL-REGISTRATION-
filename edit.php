<?php
include "db.php";
$id=$_GET['id'];
if(isset($_POST['submit'])){
  extract($_POST);
  $sql="UPDATE project SET first_name='$first_name',last_name='$last_name',email='$email',gender='$gender' WHERE id=$id";
  $result=mysqli_query($conn,$sql);
  if($result){
    header("location: index.php?msg=Data Updated successfully");

  }else{
    echo " FAILED :".mysqli_error($conn);
  }
}


?>
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
  <div class="text-center mb-4">
    <h3>Edit User Information</h3>
    <p class="text-muted">Click update after changing any information</p>
  </div>

<?php 
$id=$_GET['id'];
$sql= "select * from project where id=$id limit 1";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

?>







  <div class="container d-flex justify-content-center">
    <form action="" method="post" style="width:50vw; min-width :300px;">
<div class="row">
  <div class="col">
    <label for="" class="form-label">First Name:</label>
    <input type="text" class="form-control" name="first_name" 
    value="<?php echo $row['first_name']?>">
  </div>
  <div class="col">
    <label for="" class="form-label">Last Name:</label>
    <input type="text" class="form-control" name="last_name"  value="<?php echo $row['last_name']?>">
  </div>
</div>

<div class="mb-3">
<label for="" class="form-label">Email:</label>
    <input type="email"  class="form-control" name="email" value="<?php echo $row['email']?>">
  </div>

<div class="form-group mb-3">
<label for="">Gender:</label> &nbsp;
<input class ="form-check-input" type="radio" name="gender" id="male" value="male"<?php echo ($row['gender']=="male")?"checked":"";?>>
<label for="male" class="form-input-label">Male</label>
&nbsp;
<input class ="form-check-input" type="radio" name="gender" id="female" value="female"
<?php echo ($row['gender']=="female")?"checked":"";?>>
<label for="female" class="form-input-label">Female</label>
</div>
<div>
  <button type="submit" class="btn btn-success" name="submit">update</button>
  <a href="index.php" class="btn btn-danger" name="cancel">Cancel</a>
</div>
</div>
    </form>
  </div>
</div>
</body>
</html>