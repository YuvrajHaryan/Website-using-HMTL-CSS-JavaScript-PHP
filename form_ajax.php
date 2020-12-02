<!DOCTYPE html>
<!-- saved from url=(0050)file:///C:/Users/Control%20Case/Desktop/form3.html -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
		
		<script>
			function submitForm() 
			{
						
			    var myform = document.getElementById("form1");
			    var form_data = new FormData(myform );
				console.log(form_data);
			    $.ajax({
					  url: "php_validation.php",
					  type: "POST",
					  data: form_data,
					  processData: false,  // tell jQuery not to process the data
					  contentType: false   // tell jQuery not to set contentType
			    }).done(function( data ) {
				console.log(data);
				//Perform ANy action after successfuly post data
				   
			  });
			  return false;     
			}
		</script>
		<!--<script type="text/javascript">
			function validatn(){
				var fname=document.getElementById("fname").value;
				var lname=document.getElementById("lname").value;
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
				var per1=document.form1.percentage1.value;
				var per2=document.form1.percentage2.value;
				var per3=document.form1.percentage3.value;
				var per4=document.form1.percentage4.value;
				console.log(per1);
		
				
				if (fname==""){
					alert('First name is required');
					return false;
				}
				else if(/^[a-zA-Z]*$/.test(fname) == false)
				{
					alert('special characters & numbers are not allowed in First name ');
					return false;
				}
				else if (lname==""){
					alert("Last name is required");
					return false;
					
				}
				else if(/^[a-zA-Z]*$/.test(lname) == false)
				{
					alert('special characters & numbers are not allowed in Last name ');
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
				else if(/^[a-zA-Z]*$/.test(state) == false)
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
		</script>-->
		<!--<h2><a href ='display_data.php'><button>VIEW</button></a><br></h2>-->
		<h1 style="text-align:center;color:purple"><u>STUDENT REGISTRATION FORM</u></h1>
		<form name="form1" class="form-horizontal" id ="form1" action="#" 
        onsubmit="return submitForm();" style="margin-left:285px;" method="POST" enctype="multipart/form-datam">
			<div class="data" style="
				margin-left: 150px;
				margin-right: 150px;
				margin-bottom: 30px;
			">
			<p>
			<label>First name:</label>
				<input class="txtbx" type="text" id="fname" name="fname" maxlength="30" placeholder="First name"  
				>(max 30 chars from a-z)<br><br>
			</p>
			<p>
			<label>Last name:</label>
				<input class="txtbx" type="text" id="lname" name="lname" maxlength="30" placeholder="Last name"  
				>(max 30 chars from a-z)<br><br>
			</p>
			<p>
			<label>Date of Birth:</label>
				<input class="txtbx" type="date" id="start" name="trip-start"  
				><br><br>
			</p>
			<p>
			<label>E-mail:</label>
			    <input class="txtbx" id="mail" type="email" name="email" placeholder="eg.- amol@gmail.com" ><br><br>
			</p>
			<p>
			<label>Mobile No.:</label>
			    <input class="txtbx" type="number" placeholder="Mobile No." name="mno" onKeyDown="if(this.value.length==10) return false;" ><br><br>
			</p>
			<p>
			<label>Gender:</label>
				<input type="radio" name="gender" value="Male">Male
				<input type="radio" name="gender" value="Female">Female
				<input type="radio" name="gender" value="Other">Other<br><br>
			</p>
			<p>
			<label>Address:</label>
				<textarea name="address" id="adrss" placeholder="Residential address" rows="10" cols="30"></textarea><br><br>
			</p>
			<p>
			<label>City:</label>
				<select id="city" class="txtbx" name="city">
				<option value="None" selected="">None</option>
				<option value="Mumbai">Mumbai</option>
				<option value="Thane">Thane</option>
				<option value="Navi-mumbai">Navi-mumbai</option>
				</select><br><br>
			</p>
			<p>
			<label>PIN code:</label>
				<input type="number" id="pncd" placeholder="PIN code" name="PIN_code" onKeyDown="if(this.value.length==6) return false;" ><br><br>
			</p>
			<p>
			<label>State:</label>
				<input class="txtbx" id="state" type="text" placeholder="State" name="State">(max 30 chars from a-z)<br><br>
			</p>
			<p>
			<label>Country:</label>
				<select id="cntry" class="txtbx" name="cntry">
				<option value="None" selected="">None</option>
				<option value="India">India</option>
				<option value="Ireland">Ireland</option>
				<option value="USA">USA</option>
				</select><br><br>
			</p>
			<p>
			<label>Hobbies:</label>
				<input type="checkbox" name="hobbies[]" value="Drawing">Drawing
				<input type="checkbox" name="hobbies[]" value="Singing">Singing
				<input type="checkbox" name="hobbies[]" value="Sketching">Sketching<br>
				others<input class="txtbx" type="checkbox" name="hobbies" value="others"onclick="if(this.checked){document.getElementById('txtbx1').disabled=false;}" ><!--can we add text box for a check box??-->
				<input type="text" id="txtbx1" placeholder="Other hobbies" name="hobbies" disabled><br><br>
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
				<td><input type="number" name="percentage1" onKeyDown="if(this.value.length==3) return false;" max="100" ></td>
				</tr>
				<tr>
				<td>2.</td>
				<td>class XII</td>
				<td><input type="number" name="percentage2" onKeyDown="if(this.value.length==3) return false;" max="100" ></td>
				</tr>
				<tr>
				<td>3.</td>
				<td>Graduation</td>
				<td><input type="number" name="percentage3" onKeyDown="if(this.value.length==3) return false;" max="100" ></td>
				</tr>
				<tr>
				<td>4.</td>
				<td>Masters</td>
				<td><input type="number" name="percentage4" onKeyDown="if(this.value.length==3) return false;" max="100" ></td>
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
				<input type="radio" name="course" value="BCA">BCA
				<input type="radio" name="course" value="B.Com">B.Com
				<input type="radio" name="course" value="B.A">B.A<br><br>
		</p>
		
			<!--<div  class="btns" style="text-align:center" >-->
		<p>
				<label></label>
				<input type="submit"  value="Submit">
				<label></label>
				<input type="reset" ><br>
		</p>
			<!--</div><br>-->
		
			</div>
		</form>
	</body>
</html>