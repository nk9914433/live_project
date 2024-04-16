<?php
include('dbconn.php');

  if(isset($_POST['submit'])){
    $sql="SELECT * FROM `student` WHERE  email='$_POST[email]' AND 'password'='$_POST[password]'";
    $result = $conn->query($sql);   
    if ($result->num_rows){
        session_start();
        $_SESSION['id']=$_POST['email'];
        header("location:manage_user.php");   
    }else{
        echo "<script>alert('incorrect password');</script>";     
    }
  }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .main {
        margin-left: 500px;
    }
    </style>
</head>

<body>
    <div class="main">
        <h2 class="mt-5">User Login</h2>
        <form method="POST">
            <div class="col-5">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
            </div>
            <div class="col-5">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary  mt-2" name="submit">Login</button>
            </div>
            <div class="link mt-2">
            <a href="index.php">Need an account? sign up</a>
    </div>
        </form>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>