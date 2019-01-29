<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo 'not connected to server';
}
if(!mysqli_select_db($con,'banking'))
{
	echo 'database not selected';
}
$reg_loans=$_POST['reg_loans'];
$reg_name=$_POST['reg_name'];
$reg_email=$_POST['reg_email'];
$reg_phone=$_POST['reg_phone'];
$reg_company=$_POST['reg_company'];
$reg_city=$_POST['reg_city'];


$sql="INSERT INTO  apply_loans(reg_loans,reg_name,reg_email,reg_phone,reg_company,reg_city) VALUES
('$reg_loans','$reg_name','$reg_email','$reg_phone','$reg_company','$reg_city')";
if(!mysqli_query($con,$sql))
{
	echo '<script type="text/javascript">alert("Problem in database");</script>';
}
else
{
	echo '<script type="text/javascript">alert("Data inserted successfully");</script>';
}
header("refresh:0; url=index.html");

?>
