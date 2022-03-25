<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PHP OOP CRUD TUTORIAL</title>   
  </head>
  
  <body>
   
   <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile No.</th>
                <th>Address</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php

                include 'model.php';
                $model = new Model();
                $rows = $model->fetch();
                $i = 1;
                if(!empty($rows)){
                  foreach($rows as $row){ 
              ?>
              <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td>           
                  <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                  <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary">Edit</a>
                </td>
              </tr>

              <?php
                }
              }else{
                echo "no data";
            }

              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </section>
    
    <section>
    <div class="container">
      <div class="row">
        <div class="col-md-5 mx-auto">
         
         <?php
              $insert = $model->insert();
          ?>
          <form action="" method="post">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Mobile No.</label>
              <input type="text" name="mobile" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Address</label>
              <textarea name="address" id="" cols="" rows="3" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-secondary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </section>
    
    
  </body>
</html>