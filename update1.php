<h1><a href ='form.php'><button>ADD</button></a><br><br><a href ='display_data.php'><button>VIEW</button></a></h1>
<?php

$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "stu_info";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 
	else
	{
		echo "connected successfully<br><br>";
	}
	
$gndr=$_POST['gender'];
if(isset($_POST['hobbies']))
{
	$hobbies=$_POST['hobbies'];
	$hobbies1=implode(",",$hobbies);
}
else
{
	$hobbies1='';
}


if(isset($_POST['var'])) $id=$_POST['var'];
echo $id;
$sql="UPDATE info SET name='".$_POST["name"]."',DOB='".$_POST["dob"]."',e_mail='".$_POST["email"]."',mobile_no='".$_POST["mno"]."',gender='".$gndr."',address='".$_POST["adrs"]."',city='".$_POST["city"]."',pin_code='".$_POST["pncd"]."',state='".$_POST["state"]."',country='".$_POST["cntry"]."',hobbies='".$hobbies1."',class_X_percent='".$_POST["x_prcnt"]."',class_XII_percent='".$_POST["xii_prcnt"]."',graduation_percent='".$_POST["g_prcnt"]."',masters_percent='".$_POST["m_prcnt"]."',courses_applied='".$_POST["course"]."' WHERE id=".$id; 


if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
?>