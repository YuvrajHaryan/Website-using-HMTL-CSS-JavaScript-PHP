<!DOCTYPE html>
<html>
<body>

<h1><a href ='form.php'><button>ADD</button></a><br><a href ='display_data.php'><button>VIEW</button></a></h1>

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
	

	$var=$_GET['id'];
	$sql = "SELECT * FROM info WHERE id=".$var;
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
?>	

	
<form id='form2' method="post" action='update1.php'>
	Name:<input type='text' name='name' value='<?php echo $row['Name'];?>'><br><br>
	D.O.B.<input type='date' name="dob" value='<?php echo $row['DOB'];?>'><br><br>
	E-Mail:<input type='email' name="email" value='<?php echo $row['E_Mail'];?>'><br><br>
	Mobile No.:<input type='number' name="mno" value='<?php echo $row['Mobile_No'];?>'><br><br>
	Gender:<input type='text' name="gndr" value='<?php echo $row['Gender'];?>'><br><br>
	Address:<input type='text' name="adrs" value='<?php echo $row['Address'];?>'><br><br>
	City:<input type='text' name="city" value='<?php echo $row['City'];?>'><br><br>
	PIN code:<input type='number' name="pncd" value='<?php echo $row['PIN_code'];?>'><br><br>
	State:<input type='text' name="state" value='<?php echo $row['State'];?>'><br><br>
	Country:<input type='text' name="cntry" value='<?php echo $row['Country'];?>'><br><br>
	Hobbies:<input type='text' name="hobbies" value='<?php echo $row['Hobbies'];?>'><br><br>
	class X percent:<input type='number' name="x_prcnt" value='<?php echo $row['class_X_percent'];?>'><br><br>
	class XII percent:<input type='number' name="xii_prcnt" value='<?php echo $row['class_XII_percent'];?>'><br><br>
	Graduation percent:<input type='number' name="g_prcnt" value='<?php echo $row['Graduation_percent'];?>'><br><br>
	Masters percent:<input type='number' name="m_prcnt" value='<?php echo $row['Masters_percent'];?>'><br><br>
	Courses applied:<input type='text' name="course" value='<?php echo $row['Courses_applied'];?>'><br><br>
	<input type='hidden' name='var' value='<?php echo "$var";?>'/>   <!--imp-->
    <input type='submit' value='save'>
</form>
</body>
</html>