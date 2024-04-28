<?php
include "db.php";
$id=$_GET['id'];
$sql="delete from project where id=$id";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location: index.php?msg=Record Deleted Successsfully");

}
else{
    echo "Failed :".mysqli_error($conn,$sql);

}
?>