<?php
include_once 'connect.php';
if(isset($_POST['submit']))
{	 
	 $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
    
	 $sql = "insert into details ( name,email,phone) VALUES ('$name','$email','$phone')";
	 if (mysqli_query($mysqli, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($mysqli);
	 }
	 mysqli_close($mysqli);
}
?>