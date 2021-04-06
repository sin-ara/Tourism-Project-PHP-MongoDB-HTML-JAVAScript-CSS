<!DOCTYPE html>
<html>

<head>
<title>feedback</title>
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

<h3>FEEDBACK FORM</h3>

<div class="container">
<form  action="feedback_php.php" method="POST" >
    <label><b>NAME</b></label>
    <input type="text" placeholder="name" name="name" required>

	<label><b>EMAIL</b></label>
	<input type="text" placeholder="name" name="email" required>
	<label><b>RATE US</b></label><br>
	
	<select name="rating">
<option value="1 star"> 1 star</option>
<option value="2 star"> 2 stars</option>
<option value="3 star"> 3 stars</option>
<option value="4 star"> 4 stars</option>
<option value="5 star"> 5 stars</option>

</select>
	
	<br>
    <label><b>MESSAGE</b></label><br>
    
	<textarea type="textarea" type="text" placeholder="message" name="message" required /></textarea><br>
   
   <br>
<br> 
      <button type="submit" class="loginbtn">SEND</button>
</form>    
  </div>
</form>

</body>
</html>
