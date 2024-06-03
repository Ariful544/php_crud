<?php
$id = $_GET['id'];
 include "config.php";
 $sql = "DELETE FROM student_details WHERE id ={$id}";
 $result = mysqli_query($conn,$sql) or die("query failed");

 header('Location: index.php');

 mysqli_close($conn);
?>