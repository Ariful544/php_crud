<?php
 include "header.php";
        if(isset($_POST['submit'])){
            $id = $_POST['id'];
            include "config.php";
            $sql = "DELETE FROM student_details WHERE id ={$id}";
            $result = mysqli_query($conn,$sql) or die("query failed");

            header('Location: index.php');

            mysqli_close($conn);
        }
    
?>

        <div class="card  mt-4 bg-dark text-white">
            <div class="card-header">
                <h4 class="card-title text-center">Simple CRUD Operation</h4>
            </div>
            <div class="card-body" > 
                <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                    <div class="form-group">
                      <label for="">ID</label>
                      <input type="text" class="form-control" name="id">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-danger" name="submit" value="Delete">
                    </div>
                </form>
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