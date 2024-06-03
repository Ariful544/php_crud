<?php
 include "header.php";
?>
        <div class="card  mt-4 bg-dark text-white">
            <div class="card-header">
                <h4 class="card-title text-center">Simple CRUD Operation</h4>
            </div>
            <div class="card-body" >
                <?php
                    include "config.php";
                    $id =$_GET["id"];
                    $sql = "SELECT * FROM student_details WHERE id ={$id}";
                    $result = mysqli_query($conn,$sql) or die("query unsuccessful");
                    while ($rows =mysqli_fetch_assoc($result)){
                
                ?>
                    <form action="updatedata.php" method="post">
                        <div class="form-group">
                          <label for="">Name</label>
                          <input type="hidden" name="id" value="<?php echo $rows['id'] ?>">
                          <input type="text" class="form-control" name="name" value="<?php echo $rows['name'] ?>" required>
                        </div>
                        <div class="form-group">
                          <label for="">Address</label>
                          <input type="text" class="form-control" name="address" value="<?php echo $rows['address'] ?>" required>
                        </div>
                        <div class="form-group">
                          <label for="">phone</label>
                          <input type="phone" class="form-control" name="phone" value="<?php echo $rows['phone'] ?>" required>
                        </div>
                        <div class="form-group">
                          <label for="">Class</label>
                          <?php
                            $sql1 ="SELECT * FROM student_class";
                            $result1 = mysqli_query($conn,$sql1);
                            if(mysqli_num_rows($result1)> 0){
                                echo "<select class='form-control' name='class'>";
                                while($row1 = mysqli_fetch_assoc($result1)){
                                    if($rows['class']== $row1['cid']){
                                        $selected = "selected";
                                    }else{
                                        $selected ="";
                                    }

                          echo"<option {$selected} value='{$row1['cid']}'>{$row1['class']}</option>";
                        }
                          echo'</select>';
                        }
                          ?>
                        </div>
                        <div class="form-group">
                          <input type="submit" name="submit" value="Update" class="btn btn-primary">
                        </div>
                    </form>
                    <?php } ?>
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