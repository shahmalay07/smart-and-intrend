<?php
$connect = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("login") or die(mysql_error());

if(isset($_POST['submit']))
{
$email_form = $_POST['email'];


$write = mysql_query("INSERT INTO subscribe VALUES ('$email_form')") or die(mysql_error());
echo "succesful";
header('location:index.html');

}



?>
