<?php
$host='localhost';
$user='root';
$password='';
$dbname='student';
$fname=$lname=$roll=$marks=$query=$conn="";
$conn=mysqli_connect($host,$user,$password,$dbname) or die("Could not establish connection to mysql");
//$conn1=mysqli_select_db($conn,$dbname) or die("Couldnot connect to database");
// Check connection
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$roll=$_POST['roll'];
$marks=$_POST['marks'];
$sql="INSERT INTO student (fname, lname, roll ,marks)
VALUES('$_POST[fname]','$_POST[lname]','$_POST[roll]','$_POST[marks]')";
if(mysqli_query($conn,$sql))
echo "Data inserted successfully";
?>