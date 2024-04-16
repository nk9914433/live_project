<?php
include("dbconn.php");

  if(isset($_POST["submit"])){
    $firstname=$_POST["fname"];
    $lastname=$_POST["lname"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $confirmpassword=$_POST["confirm_password"];
     
       $emailExistQuery = "SELECT email FROM  student WHERE email='".$email."';";
       $result = $conn->query($emailExistQuery);
       if($result->num_rows){?>
       <div class="alert alert-danger" role="alert">
          This email is already exists!
       </div>
       <?php }else{
     
     $sql = "INSERT INTO student (firstname,lastname,email,password,confirmpassword)
     VALUES('$firstname','$lastname','$email','$password','$confirmpassword')";
     if ($conn->query($sql) === TRUE){?>
        <div class="alert alert-success" role="alert">
        You are successfully Register!
     </div>

      <?php } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .main{
            margin-left:600px;
        }
        .alert{
            width:20%;
            height:8%;
            margin-left:550px;
            margin-top:30px;
        }
        </style>
</head>

<body>

    <div class="main">
        <h2 class="mt-5">Register User </h2>
        <form method="POST">
            <div class="col-4">
                <label for="inputfname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="inputfname" placeholder="First Name" name="fname">
            </div>
            <div class="col-4">
                <label for="inputlname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="inputlname" placeholder="Last Name" name="lname">
            </div>
            <div class="col-4">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
            </div>
            <div class="col-4">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
            </div>
            <div class="col-4">
                <label for="inputPassword14" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="inputPassword14" placeholder="Confirm Password" name="confirm_password">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary mt-2" name="submit">Register</button>
            </div>
            <div class="link mt-2">
            <a href="login.php"> Have an account? Go to login</a>
    </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>