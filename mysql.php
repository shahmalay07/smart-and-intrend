
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
//write data
//$date = date("Y-m-d");

//update

//$update = mysql_query("UPDATE people SET dob='1997-10-25'");

//retrieve

/*if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	mysql_query("UPDATE people SET firstname ='$name'");	
}*/ 

//connect

$connect = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("login") or die(mysql_error());
//echo "connnected";

if(isset($_POST['submit']))
{
$check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
    }

//$file = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$head_form = $_POST['head'];
$details_form = $_POST['Details'];
$dev_form = $_POST['dev'];
$contact_form = $_POST['Contact'];
$email_form = $_POST['email'];


$write = mysql_query("INSERT INTO projects VALUES ('$head_form','$details_form','$imgContent','$dev_form','$contact_form','$email_form')") or die(mysql_error());
if(mysqli_query($connect,$write))
{
	echo '<script>alert("succesful")</script>';
}
else
{
	echo '<script>alert("succesful")</script>'.mysqli_error();
}

header('location:index.html');

}


	//$firstname_form = $_POST['firstname'];
	//$lastname_form = $_POST['lastname'];
		
	


?>



</body>
</html>