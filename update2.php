<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<style>
		.data{color:white;border:solid purple;background-color:purple}
		.tb1{border:solid black}
		.txtbx
		{text-align:center}
		
		form{display:table;}
		p{display:table-row;}
		label{display:table-cell;}
		input{display:table-cell;}
		</style>
	</head>
	<body>
		<script type="text/javascript">
			function validatn(){
				var name=document.getElementById("full_name").value;
				var DOB=document.getElementById("start").value;
				var mail=document.getElementById("mail").value;
				var M_no=document.form1.mno.value;
				console.log(M_no);
				console.log(typeof M_no);
				console.log(M_no.length);
				var adrss=document.getElementById("adrss").value;
				var pin_code=document.getElementById("pncd").value;
				var state=document.getElementById("state").value;
				var dd=document.getElementById("city").value;
				var cnt=document.getElementById("cntry").value;
				var per1=document.form1.x_prcnt.value;
				var per2=document.form1.xii_prcnt.value;
				var per3=document.form1.g_prcnt.value;
				var per4=document.form1.m_prcnt.value;
				
				if (name==""){
					alert('Full name is required');
					return false;
				}
				else if(/^[a-z A-Z]*$/.test(name) == false)
				{
					alert('special characters & numbers are not allowed in Full name ');
					return false;
				}
				else if (DOB==""){
					alert("Date of Birth is required");
					return false;
				}else if (mail==""){
					alert("E-mail is required");
					return false;
				}else if (M_no==""){
					alert("Mobile No. is required");
					return false;
				}
				else if (M_no.length !=10)			
				{
					//number field validations
					alert("please enter only 10 digits as Mobile No.");
					return false;
				}
				else if (adrss==""){
					alert("address is required");
					return false;
				}else if (pin_code==""){
					alert("PIN code is required");
					return false;
				}
				else if (pin_code.length!==6)
				{
					alert("please enter only  6 digits as PIN code");
					return false;
				}
				else if (state==""){
					alert("State is required");
					return false;
				}
				else if(/^[a-z A-Z]*$/.test(state) == false)
				{
					alert('special characters & numbers are not allowed in State ');
					return false;
				}
				else if(city.options[city.selectedIndex].value=="None")
				{
					//drop down list validations
					alert("City has to be selected");
					return false;
				}
				else if(cntry.options[cntry.selectedIndex].value=="None")
				{
					alert("Country has to be selected");
					return false;
				}
				else if(document.form1.gender[0].checked==false&&document.form1.gender[1].checked==false&&document.form1.gender[2].checked==false)
				{
					alert("Gender has to be specified");
					return false;
				}
				else if (per1==""){
					alert("class X percentage is required");
					return false;
				}
				else if (per2==""){
					alert("class XII percentage is required");
					return false;
				}
				else if (per3==""){
					alert("Graduation percentage is required");
					return false;
				}
				else if (per4==""){
					alert("Masters percentage is required");
					return false;
				}
				else if(document.form1.course[0].checked==false&&document.form1.course[1].checked==false&&document.form1.course[2].checked==false)
				{
					alert("Course has to be specified");
					return false;
				}
			
				
			}
		</script>
		
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
		<h2><a href ='form.php'><button>ADD</button></a><br><a href ='display_data.php'><button>VIEW</button></a></h2>
		<h1 style="text-align:center;color:purple"><u>STUDENT REGISTRATION FORM</u></h1>
		<form name="form1" method="post" action="update1.php" onsubmit="return validatn()" style="margin-left:285px;">
			<div class="data" style="
				margin-left: 150px;
				margin-right: 150px;
				margin-bottom: 30px;
			">
			<p>
			<label>Name:</label>
				<input class="txtbx" type="text" id="full_name" name='name' value='<?php echo $row['name'];?>' maxlength="30" placeholder="First name"  
				>(max 30 chars from a-z)<br><br>
			</p>
			<p>
			<label>Date of Birth:</label>
				<input class="txtbx" type="date" id="start" name="dob" value='<?php echo $row['DOB'];?>'  
				><br><br>
			</p>
			<p>
			<label>E-mail:</label>
			    <input class="txtbx" id="mail" type="email" name="email" value='<?php echo $row['e_mail'];?>' placeholder="eg.- amol@gmail.com" ><br><br>
			</p>
			<p>
			<label>Mobile No.:</label>
			    <input class="txtbx" type="number" placeholder="Mobile No." name="mno" value='<?php echo $row['mobile_no'];?>' onKeyDown="if(this.value.length==10) return false;" ><br><br>
			</p>
			<p>
			<label>Gender:</label>
				<input type="radio" name="gender" value="Male" <?php if(strcmp($row['gender'],'Male')==0){echo "checked";} ?>>Male
				<input type="radio" name="gender" value="Female" <?php if(strcmp($row['gender'],'Female')==0){echo "checked";} ?>>Female
				<input type="radio" name="gender" value="Other" <?php if(strcmp($row['gender'],'Other')==0){echo "checked";} ?>>Other<br><br>
			</p>
			<p>
			<label>Address:</label>
				<textarea id="adrss" name="adrs" value='<?php echo $row['address'];?>' placeholder="Residential address" rows="10" cols="30"></textarea><br><br>
			</p>
			<p>
			<label>City:</label>
				<select id="city" class="txtbx" name="city">
				<option value="None" >None</option>
				<option value="Mumbai" <?php if(strcmp($row['city'],'Mumbai')==0){echo "selected";} ?>>Mumbai</option>
				<option value="Thane" <?php if(strcmp($row['city'],'Thane')==0){echo "selected";}?>>Thane</option>
				<option value="Navi-mumbai" <?php if(strcmp($row['city'],'Navi-mumbai')==0){echo "selected";}?>>Navi-mumbai</option>
				</select><br><br>
			</p>
			<p>
			<label>PIN code:</label>
				<input type="number" id="pncd" placeholder="PIN code" name="pncd" value='<?php echo $row['pin_code'];?>' onKeyDown="if(this.value.length==6) return false;" ><br><br>
			</p>
			<p>
			<label>State:</label>
				<input class="txtbx" id="state" type="text" placeholder="State" name="state" value='<?php echo $row['state'];?>'>(max 30 chars from a-z)<br><br>
			</p>
			<p>
			<label>Country:</label>
				<select id="cntry" class="txtbx" name="cntry">
				<option value="None" >None</option>
				<option value="India" <?php if(strcmp($row['country'],'India')==0){echo "selected";}?>>India</option>
				<option value="Ireland" <?php if(strcmp($row['country'],'Ireland')==0){echo "selected";}?>>Ireland</option>
				<option value="USA" <?php if(strcmp($row['country'],'USA')==0){echo "selected";}?>>USA</option>
				</select><br><br>
			</p>
			<p>
			<?php $hobbies3=explode(",",$row['hobbies']) ?>
			<label>Hobbies:</label>
				<input type="checkbox" name="hobbies[]" value="Drawing" <?php for($i=0;$i<count($hobbies3);$i++){if(strcmp($hobbies3[$i],'Drawing')==0){echo "checked";}} ?>>Drawing
				<input type="checkbox" name="hobbies[]" value="Singing" <?php for($j=0;$j<count($hobbies3);$j++){if(strcmp($hobbies3[$j],'Singing')==0){echo "checked";}} ?>>Singing
				<input type="checkbox" name="hobbies[]" value="Sketching" <?php for($k=0;$k<count($hobbies3);$k++){if(strcmp($hobbies3[$k],'Sketching')==0){echo "checked";}} ?>>Sketching<br>
				others<input class="txtbx" type="checkbox" name="hobbies" value="others" <?php for($l=0;$l<count($hobbies3);$l++){if(strcmp($hobbies3[$l],'others')==0){echo "checked";}} ?> onclick="if(this.checked){document.getElementById('txtbx1').disabled=false;}" ><!--can we add text box for a check box??-->
				<input type="text" id="txtbx1" placeholder="Other hobbies" name="hobbies[]" disabled><br><br>
				<!--<input type="hidden" id="no_hobbies" name="hobbies[]" value=NULL >-->
			</p>
			<p>
			<label>Qualifications:</label>
				<table class="tb1" style="
					margin-left: 140px;
				">
			<tbody><tr>
				<th>SI.No.</th>
				<th>Exam</th>
				<th>percentage</th>
				</tr>
				<tr>
				<td>1.</td>
				<td>class X</td>
				<td><input type="number" name="x_prcnt" value='<?php echo $row['class_X_percent'];?>' onKeyDown="if(this.value.length==3) return false;" max="100" required></td>
				</tr>
				<tr>
				<td>2.</td>
				<td>class XII</td>
				<td><input type="number" name="xii_prcnt" value='<?php echo $row['class_XII_percent'];?>' onKeyDown="if(this.value.length==3) return false;" max="100" required></td>
				</tr>
				<tr>
				<td>3.</td>
				<td>Graduation</td>
				<td><input type="number" name="g_prcnt" value='<?php echo $row['graduation_percent'];?>' onKeyDown="if(this.value.length==3) return false;" max="100" required></td>
				</tr>
				<tr>
				<td>4.</td>
				<td>Masters</td>
				<td><input type="number" name="m_prcnt" value='<?php echo $row['masters_percent'];?>' onKeyDown="if(this.value.length==3) return false;" max="100" required></td>
				</tr>
				<tr>
				<td></td>
				<td></td>
				<td>(upto 2 decimal)</td>
				</tr>
			</tbody></table><br><br>
		</p>
		<p>
			<label>Courses Applied For:</label>
				<input type="radio" name="course" value="BCA" <?php if(strcmp($row['courses_applied'],'BCA')==0){echo "checked";} ?>>BCA
				<input type="radio" name="course" value="B.Com" <?php if(strcmp($row['courses_applied'],'B.Com')==0){echo "checked";} ?>>B.Com
				<input type="radio" name="course" value="B.A" <?php if(strcmp($row['courses_applied'],'B.A')==0){echo "checked";} ?>>B.A<br><br>
				<input type='hidden' name='var' value='<?php echo "$var";?>'/>   <!--imp-->
		</p>
		
			<!--<div  class="btns" style="text-align:center" >-->
		<p>
				<label></label>
				<input type="submit"  value="Save" >
				<label></label>
				<input type="reset" ><br>
		</p>
			<!--</div><br>-->
		
			</div>
		</form>
	</body>
</html>