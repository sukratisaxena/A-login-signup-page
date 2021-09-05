
<?php

include('connection.php');

$id=$_GET['id'];
$sql="select*from students where GrNo='$id'";
$query=mysqli_query($conn,$sql) or die(mysqli_error($conn));;
$result=mysqli_fetch_array($query);
if(isset($_POST['update']))
{
    $name = $_POST['Name'];
    $gender = $_POST['Gender'];
    $age = $_POST['Age'];
    $standard = $_POST['Standard'];
    $division = $_POST['Division'];
    $contact = $_POST['Contact'];
	
    $edit = mysqli_query($conn,"update students set Name='$name', Gender = '$gender',Age = '$Age',Standard='$Standard',Division ='$division',Contact ='$contact' where GrNo='$id'");
	
    if($edit)
    {
        mysqli_close($conn);
        header("location:Student.php");
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>
<h3>Update Data</h3>

<form method="POST">
<label for="name">Name:</label>  
<input type="text" id="name" name="name" value="<?php echo $result['Name'] ?>" placeholder="Enter Name" Required>
  
  <label for="gender">Gender:</label>
<select id="gender" name="gender" value="<?php echo $result['Gender']?>">
  <option value="M">M</option>
  <option value="F">F</option>
</select>
<label for="age">Age:</label>
<input type="text" id="age "name="age" value="<?php echo $result['Age'] ?>" placeholder="Enter Standard" Required>
<label for="standard">Standard:</label>
<input type="text" id="standard" name="standard" value="<?php echo $result['Standard'] ?>" placeholder="Enter Standard" Required>
<label for="division">Division:</label>
<input type="text" id="division" name="division" value="<?php echo $result['Division'] ?>" placeholder="Enter Division" Required>
<label for="contact">Contact:</label>
<input type="text" id="contact" name="contact" value="<?php echo $result['Contact'] ?>" placeholder="Enter Contact" Required>
  <input type="submit" name="update" value="Update">
</form>