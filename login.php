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
    <div class="form-group">     
       
<?php
include('connection.php');
$email=$_POST['email'];
$password=$_POST['password'];

$email = stripcslashes($email);  
$password = stripcslashes($password);  
$email = mysqli_real_escape_string($conn, $email);

$password = mysqli_real_escape_string($conn, $password);  
      
$sql = "select * from users where Email = '$email' and password = '$password'";  
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result); 

if($count == 1){  
    echo "<h3>Login Successful!</h3> <br><h6> Hey, ";
    echo $row['Name'];
}  
else{  
    echo "<h3>Login failed. Invalid username or password.</h3>";  
}  
?>
</div>
<div class="form-group">

<a href="Student.php"><button>Students table</button></a>

</div>
</div>
</div>

</div>
</body>
</html>