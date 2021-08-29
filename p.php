<?php
include_once 'db.php';
if(isset($_POST['save']))
{	 
	 
	 $name = $_POST['name'];
	 $comments = $_POST['comments'];
	 $email = $_POST['email'];
	 /*sql query for inserting data into database*/
	 mysqli_query($conn,"insert into employee(name,comments,email) 
	 values ('$name','$comments','$email')") or die(mysqli_error());
	 echo "<p align=center>Data Added Successfully.</p>";
}
?>