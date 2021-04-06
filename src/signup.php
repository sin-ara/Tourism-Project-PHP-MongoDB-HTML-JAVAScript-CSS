<!DOCTYPE html>
<html>

<head>
<title>SIGN UP</title>
<link href="tourism.css" rel="stylesheet" type="text/css" / >
<style>
p{
 border:0px;
 
 
}
.loginbtn{
	float:center;
    width:30%;
	padding:10px;
	font-size:20px;
	background-color:#123456;
	
}

.cancelbtn {
	
	
   
    padding: 10px;
	font-size:20px;
    background-color: #444444;
}

</style>
</head>
<body>

<div id="header"><h1>TOURISTER.COM</h1>

<img src="tourism1.jpg" />

</div>
<ul>
<li><a href="mainpage.php">HOME</a></li>
</ul>
<br><br><br><br><br>

<h3>signup form</h3>


<fieldset>
<form  enctype="multipart/form-data" action="signup_php.php" method="POST" style="border:1px solid #ccc" align ="center">
	<p><label>Image: <input type=file name="afile" accept="image/*"></p>

</fieldset>
<br>
<br>
<br>



<form action="signup_php.php"  method="POST" style="border:1px solid #ccc" align="center">
  <div class="container">
  
	
	<label><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="uname" required>


<label><b>ID</b></label>
    <input type="text" placeholder="Enter Name" name="id" required>


  <label><b>GENDER</b></label><BR>

<select name="gender" >
<option value="male">Male</option>
<option value="female">Female</option>
<option value="others">OTHERS</option>
</select>
<br>

 
<label><b>AGE</b></label><BR>
 <input type="age" name="age"   placeholder="age" required /></br><br>
<label><b>CITY</b></label><BR>
 <input type="text" name="city"  placeholder="city" required /></br><br>
<label><b>MOBILE NO</b></label><BR>
<input type="text" name="mobile"   placeholder="mobile no" required /><br></br>
		
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw_repeat" required>
    <input type="checkbox" checked="checked"> Remember me
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <div class="clearfix">
       <button type="submit" class="loginbtn">Sign Up</button>
	   <a href="sign.php"><button type="button" class="cancelbtn">Cancel</button></a>
     
    </div>
  </div>
</form>

</body>
</html>
