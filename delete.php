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
	
	
$id=$_GET['id'];
$sql = "DELETE FROM info WHERE id=".$id;
	
	
		if ($conn->query($sql) === TRUE)
				{
					echo "Record deleted successfully";
				} 
				else 
				{
					echo "Error deleting record: " . $conn->error;
				}
		
?>