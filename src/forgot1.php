<!DOCTYPE html>
<html>

<head>
<link href="tourism.css" rel="stylesheet" type="text/css" / >
<style>
p{
 border:0px;
}
</style>
</head>
<body>

<div id="header"><h1>TOURISTER.COM</h1>

<img src="tourism1.jpg" />

</div>




<ul>
   <li><a href="home.htm">Home</a></li>
</ul>


<h2>CHANGE PASSWORD</h2>

<form action="forgot_php.php"  method= "POST" style="border:1px solid #ccc">
  <div class="container">

	<label><b>ID</b></label>
    <input type="text" placeholder="Enter ID" name="id" required>

		 <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

		
    <label><b>Enter new Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label><b>Re-enter new Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw_repeat" required>
    
     
      <button type="submit" class="signupbtn"><a href=" ">CONFIRM</a></button>
    
  </div>
</form>

</body>
</html>
