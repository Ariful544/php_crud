<?php
        $host ="127.0.0.1:3307";
        $user ="root";
        $password ="";
        $database ="php_crud";

        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $class = $_POST['class'];

        $conn = mysqli_connect($host,$user,$password,$database) or die("Couldn't connect");
        $sql = "INSERT INTO student_details(name,address,phone,class) VALUES('{$name}','{$address}','{$phone}','{$class}')";

        $query =mysqli_query($conn,$sql) or die("Couldn't connect");

        header("Location: index.php");
        mysqli_close($conn);

?>