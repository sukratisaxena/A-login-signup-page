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

$sql = "select * from students";  
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

echo "<table border='1' class='gridview'>";
echo "<tr>";
echo "<th> Gr.No </th> <th> Name </th> <th> Gender </th><th>age</th><th>Standard</th><th>Division</th><th>Contact</th><th>Action</th>";
echo "</tr>";
while($row = mysqli_fetch_row($result))
{
    echo "<tr>";
    echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td>";
    echo "<td> <a href='edit.php? id=$row[0]'>Edit</a> | <a href='delete.php'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";
?>

</div>
</div>
</div>
</div>
</div>
</body>
</html>