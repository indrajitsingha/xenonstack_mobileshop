
<?php
include('includes/dbconnection.php');
if(isset($_POST['send']))
  {
    $fname=$_POST['fullname'];
    $email=$_POST['email'];
    $massage=$_POST['massage'];
    
    $query=mysqli_query($con, "INSERT INTO `massage`(`name`, `email`, `massage`)   VALUES('$fname', '$email', '$massage' )");
    if ($query) {
                }
        else
          {
     
        }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
  
    <div class="nav_bar">
 
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid ">
          <a class="navbar-brand" href="index.html"><b class="fs-3">I-SHOP</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-light fs-5">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="product.html">Products</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="contact.php">Contact us</a>
              </li>
              

            </ul>
           
            <a href="login.php" class="btn btn-danger m-1">Login</a>
            <a href="signup.php"  class="btn btn-primary m-1">Signup</a>
          </div>
        </div>
      </nav>
    </div>


    <p class="h4 text-center p-3">Feel free to contact us if you need any assistance, any help or another question.
    </p>

<div class="container-fluid">
    <div class="row">
        <div class="col col-md-6 fs-5">
            <form method="POST" id="" name="login" action="">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label ">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fullname" required="required">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputPassword1" name="email" required="required">
                </div>
                <div class="mb-3">
                    <!-- <label for="exampleInputPassword1" class="form-label">Message</label> -->
                    <div class="input-group">
                        <span class="input-group-text">Message</span>
                        <textarea class="form-control" required="required" name="massage" aria-label="With textarea"></textarea>
                      </div>
                  </div>
                
                <input type="submit" class="btn btn-danger text-center" value="Submit"  name="send"  value="Send" required="required" >
              </form>
        </div>
        <div class="col col-md-6">
            <img src="img/Contact us-amico.png" class="img-fluid" alt="...">


        </div>
    </div>
</div>
</body>
</html>







<!-- 
<?php
$con=mysqli_connect("localhost", "root", "", "db");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

if(isset($_POST['send']))
  {
    $fname=$_POST['fullname'];
    $email=$_POST['email'];
    $massage=$_POST['massage'];
    
    $query=mysqli_query($con, "INSERT INTO `massage`(`name`, `email`, `massage`)   VALUES('$fname', '$email', '$massage' )");
    if ($query) {
                }
        else
          {
     
        }
}

?>
