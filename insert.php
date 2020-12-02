<html>
<head>
	
</head>
<body>
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


	//get data form the form
	$name=$_POST['fname']."  ".$_POST["lname"];
	$DOB=$_POST['trip-start'];
	
	$email=$_POST['email'];
	$m_no=$_POST['mno'];
	$gndr=$_POST['gender'];
	$adrs=$_POST['address'];
	$city=$_POST['city'];
	$pin_cd=$_POST['PIN_code'];
	$state=$_POST['State'];
	$cntry=$_POST['cntry'];
	//echo "<pre>";print_r($_POST);echo "</pre>";exit;
	if(isset($_POST['hobbies']))
	{
		$hobbies=$_POST['hobbies'];
		$hobbies1=implode(",",$hobbies);
	}
	else
	{
		$hobbies1='';
	}
	$x_percnt=$_POST['percentage1'];
	$xii_percnt=$_POST['percentage2'];
	$grad_percnt=$_POST['percentage3'];
	$mas_percnt=$_POST['percentage4'];
	$course=$_POST['course'];
	
	
	//insert data in table
	$sql = "INSERT INTO info VALUES('','$name','$DOB', '$email','$m_no','$gndr','$adrs', '$city', '$pin_cd' , '$state','$cntry','$hobbies1','$x_percnt','$xii_percnt','$grad_percnt','$mas_percnt','$course')";
		
	//check if insert is successful
	if ($conn->query($sql) === TRUE) 
	{
		echo "New record created successfully";
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}				
?>
</body>
</html>











