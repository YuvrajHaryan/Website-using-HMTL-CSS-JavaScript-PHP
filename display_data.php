<html>
<head>
	<style>
	.tbl{
		display: block;
        overflow-x: auto;
        <!--white-space: nowrap;-->
	}

	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
	}

	</style>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js" ></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" defer ></script>
	<script type='text/javascript'>
	$(document).ready(function() {
		$('#tb').DataTable();
	} );
	</script>
		
</script>
</head>

<body>
<h1><a href ='form.php'><button>ADD</button></a></h1>

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
	
	$sql = "SELECT * FROM info";
	$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) 
		{
			// output data of each row
			 
				echo "<table id='tb' class='tbl'>";
				echo"<tbody>";
					echo"<tr>";
						echo"<th></th>";
						echo"<th></th>";
						echo"<th width='10px'>id</th>";
						echo"<th>Name</th>";
						echo"<th>DOB</th>";
						echo"<th>E-Mail</th>";
						echo"<th>Mobile No.</th>";
						echo"<th>Gender</th>";
						echo"<th>Address</th>";
						echo"<th>City</th>";
						echo"<th>PIN code</th>";
						echo"<th>State</th>";
						echo"<th>Country</th>";
						echo"<th>Hobbies</th>";
						echo"<th>Class X percent</th>";
						echo"<th>Class XII percent</th>";
						echo"<th>Graduation percent</th>";
						echo"<th>Masters percent</th>";
						echo"<th>Courses_applied</th>";
					echo"</tr>";
			while($row = mysqli_fetch_assoc($result))
			{
				 echo"<tr>";
					echo"<td><a href =update2.php?id=".$row['id']."><button>edit</button>";
					echo"<td><a href =delete.php?id=".$row['id']."><button>delete</button>";
					echo"<td size=10>".$row['id']."</td>";
					echo"<td size=30>".$row['name']."</td>";
					echo"<td>".$row['DOB']."</td>";
					echo"<td>".$row['e_mail']."</td>";
					echo"<td>".$row['mobile_no']."</td>";
					echo"<td>".$row['gender']."</td>";
					echo"<td>".$row['address']."</td>";
					echo"<td>".$row['city']."</td>";
					echo"<td>".$row['pin_code']."</td>";
					echo"<td>".$row['state']."</td>";
					echo"<td>".$row['country']."</td>";
					echo"<td>".$row['hobbies']."</td>";
					echo"<td>".$row['class_X_percent']."</td>";
					echo"<td>".$row['class_XII_percent']."</td>";
					echo"<td>".$row['graduation_percent']."</td>";
					echo"<td>".$row['masters_percent']."</td>";
					echo"<td>".$row['courses_applied']."</td>";
				 echo"</tr>";
				 
			}
		echo"</tbody>";
		echo"</table>";	
		}
		else
		{
			echo "0 results";
		}
?>
</body>
</html>