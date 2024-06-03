<?php
 include "header.php";
?>
        <div class="card text-center mt-4 bg-dark text-white">
        <?php

            include "config.php";
            $sql ="SELECT * FROM student_details JOIN student_class WHERE student_details.class =student_class.cid ";
            $query = mysqli_query($conn,$sql) or die("query failed");
            if(mysqli_num_rows($query) > 0) {
            ?>
            <div class="card-header">
                <h4 class="card-title">Simple CRUD Operation</h4>
            </div>
            <div class="card-body " >
                <table class="table">
                    <thead class="text-info">
                        <tr>
                            <th scope="col" >ID</th>
                            <th scope="col">Student Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Class</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-white">
                        <?php while($rows = mysqli_fetch_assoc($query)){ ?>
                        <tr>
                            <td scope="row"><?php echo $rows['id']; ?></td>
                            <td><?php echo $rows['name']; ?></td>
                            <td><?php echo $rows['address']; ?></td>
                            <td><?php echo $rows['class']; ?></td>
                            <td><?php echo $rows['phone']; ?></td>
                            <td>
                            <a href="edit.php?id=<?php echo $rows['id']; ?>" class="btn btn-primary">Edit</a>
                            <a href="delete_inline.php?id=<?php echo $rows['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                       <?php 
                       } 
                       
                       ?>
                    </tbody>
                </table>
                <?php 
                }
                mysqli_close($conn);
                ?>
            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>