<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PHP OOP CRUD TUTORIAL</title>
  </head>

   <body>
    <div class="container">
      <div class="row">
        <div class="col-md-5 mx-auto">
          <?php

              include 'model.php';
              $model = new Model();
              $id = $_REQUEST['id'];
              $row = $model->edit($id);

              if (isset($_POST['update'])) {
                if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address'])) {
                  if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address']) ) {
                    
                    $data['id'] = $id;
                    $data['name'] = $_POST['name'];
                    $data['mobile'] = $_POST['mobile'];
                    $data['email'] = $_POST['email'];
                    $data['address'] = $_POST['address'];

                    $update = $model->update($data);

                    if($update){
                      echo "<script>alert('record update successfully');</script>";
                      echo "<script>window.location.href = 'index.php';</script>";
                    }else{
                      echo "<script>alert('record update failed');</script>";
                      echo "<script>window.location.href = 'index.php';</script>";
                    }

                  }else{
                    echo "<script>alert('empty');</script>";
                    header("Location: edit.php?id=$id");
                  }
                }
              }

          ?>
          <form action="" method="post">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Mobile No.</label>
              <input type="text" name="mobile" value="<?php echo $row['mobile']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Address</label>
              <textarea name="address" id="" cols="" rows="3" class="form-control"><?php echo $row['address']; ?></textarea>
            </div>
            <div class="form-group">
              <button type="submit" name="update" class="btn btn-secondary">Submit</button>
            </div>
          </form>
          
          
        </div>
      </div>
    </div>

  </body>
</html>