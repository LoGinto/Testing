<?php
$con = mysqli_connect('127.0.0.1','root','');
if(!con){
	echo 'No connection';
}
if(!mysqli_select_db($con,'test')){
	echo 'No database found';
}
$Name = $_POST['username'];
$LastName = $_POST['surname'];
$Email = $_POST['email'];

$sql = 'INSERT INTO person(Name,LastName,Email) Values($Name,$LastName,$Email)';

if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
mysqli_close($con);
header('refresh:1; url = index.html')
?>