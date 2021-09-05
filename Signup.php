<!DOCTYPE html>
<html>
    <head>
        <title>A Login Page</title>
        <link rel="stylesheet" href="CSS.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>

    <div class="container container-fluid vh-100">   
    <div class="row justify-content-center container-fluid h-100" >  
    <div class="card bg-light my-auto">        
    <div class="card-body mark"> 
       
<?php
include('connection.php');
 if (isset($_REQUEST['email'])) {
    $email = $_POST['email'];
    $email = stripslashes($email);
    $email = mysqli_real_escape_string($conn, $email);
    $phno = $_POST['phno'];
    $phno = stripslashes($phno);
    $phno = mysqli_real_escape_string($conn, $phno);
    $name = $_POST['name'];
    $name = stripslashes($name);
    $name = mysqli_real_escape_string($conn, $name);
    $password = $_POST['password'];
    $password = stripslashes($password);
    $password = mysqli_real_escape_string($conn, $password);
    $passconf = $_POST['passconf'];
    $passconf = stripslashes($passconf);
    $passconf = mysqli_real_escape_string($conn, $passconf);
if($password===$passconf)
{
   $query = "INSERT into users (Email, Name, password, contact)
                 VALUES ('$email','$name','$password', '$phno')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "
              <h3>You are registered successfully.</h3><br/>
              <p class='link'>Click here to <a href='login.html'>Login</a></p></div>";
    } 
    else {
        echo mysqli_error($conn);  }
} 
else
{
   echo "Passwords dont match!";
}
 }
?>
</div>
</div>
</div>
</div>
</body>
</html>