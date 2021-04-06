<!DOCTYPE HTML>
<html>

	
  
<head>
<title>JOIN COMMUNITY</title>
<link href="project.css" type="text/css" rel="stylesheet" />

<style type="text/css">
h{
font-size:25pt;
color:white;
text-decoration:underline;
}
p1{
font-family:Baskerville Old Face;
font-size:15pt;
color:blue;
text-align:center;
text-decoration:underline;
}
</style>




</head>
<body>

<div id="header"> 
<h1>TOURISTER.COM</h1>
<img src="tourism1.jpg"/>
<ul>
<li><a href="mainpage.php">HOME</a></li>
</ul>
</div></br></br><br><br>

<form action="join_php.php" method="POST">

<fieldset>
<fieldset>
<label><b>NAME</b></label><br>
   <input type="text"  name="name" placeholder="name" required/></br><BR>
   </fieldset>
<fieldset>
<label><b>GENDER</b></label><BR>

<select name="gender" >
<option value="male">Male</option>
<option value="female">Female</option>
<option value="others">OTHERS</option>
</select>
</fieldset>
<br><br><br>

 <fieldset>
<label><b>AGE</b></label><BR>
 <input type="age" name="age"   placeholder="age" required /></br><br>
</fieldset>

<fieldset><label><b>CITY</b></label><BR>
 <input type="text" name="city"  placeholder="city" required/></br><br>
</fieldset>
<fieldset>
<label><b>MOBILE NO</b></label><BR>
<input type="text" name="mobile"   placeholder="mobile no" required/><br></br>
</fieldset>
<fieldset><label><b>EMAIL</b></label><BR>

<input type="email" name="email"  placeholder="email" required/></br><br>
</fieldset>
</fieldset>

      
    <div class="clearfix">
      
      <button type="submit" class="loginbtn">Sign Up</button>
	 
    </div>	  



</form>
</body>
</html>
