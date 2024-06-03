<?php
        include "config.php";
        $sql = "UPDATE student_details SET name ='{$name}', address ='{$address}', phone ='{$phone}', class ='{$class}' WHERE id = '{$id}'";

        $query =mysqli_query($conn,$sql) or die("Couldn't connect");

        header("Location: index.php");
        mysqli_close($conn);

?>