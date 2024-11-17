<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Curd Application</title>
  </head>
  <body> 

    
   <?php
   include 'db_connection.php';

   if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $checkbox =$_POST['checkbox'];

   if($checkbox==1)
   {
 
  $sqli = "SELECT email from registration where email='$email'";
  $query=mysqli_query($conn,$sqli);
  $count = mysqli_num_rows($query);
  if($count>0){
    echo "<script>alert('This email is already being used.')</script>";
  }
 
} 
 else{
      $sqli= "INSERT INTO `registration`(`name`, `email`, `phone`, `password`, `checkbox`) VALUES ('$name','$email','$phone','$password','$checkbox')";
      $query = mysqli_query($conn,$sqli);
      if($query){
        echo "<script>alert('Database insert success.')</script>";
      }else{
        echo "<script>alert('Database Not be insert. ')</script>";
      }  
    }
 
   }
    
   ?>
 
    <div class="container">
        <div class="row">
            <h2>Registration From</h2>
            <div class="col-12 col-md-6 col-ls-12">
             
 
                <form action="" class="was-validated" method="POST">
                    <div class="mb-3 mt-3">
                      <label for="uname" class="form-label">Username:</label>
                      <input type="text" class="form-control" id="uname" placeholder="username" name="name" required>
                      <div class="valid-feedback">Good Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="uname" class="form-label">User email:</label>
                        <input type="email" class="form-control" id="uname" placeholder="Enter email" name="email" required>
                        <div class="valid-feedback">Good Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                      </div>
                      <div class="mb-3 mt-3">
                        <label for="uname" class="form-label">User phone:</label>
                        <input type="number" id="replyNumber" min="0" step="1" data-bind="value:replyNumber" class="form-control" id="uname" placeholder="Enter phone" name="phone" required>
                        <div class="valid-feedback">Good Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                      </div> 

                       
                    <div class="mb-3">
                      <label for="pwd" class="form-label">Password:</label>
                      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
                      <div class="valid-feedback">Good Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>


                    <div class="form-check mb-3">
                      <input class="form-check-input" type="checkbox" id="myCheck" value="1" name="checkbox">
                      <label class="form-check-label" for="myCheck">I agree on checkbox to continue.</label>
                      <div class="valid-feedback">Good Valid.</div>  
                      <div class="invalid-feedback">Check this checkbox to continue.</div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                  </form>
    
            </div>
         
         </div>
    </div>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>