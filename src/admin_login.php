<html>

<head>
<title>LOGIN</title>
<link href="project.css" rel="stylesheet" type="text/css" / >
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
   <li><a href="mainpage.php">Home</a></li>
   <form align="right"><input type="search" placeholder="Search">
  <input type="submit" value="GO"> 
  <input type="reset" value="Reset"></left>
  </form> 
</ul>

<br><br><br><br>
<h3>ADMIN LOGIN FORM</h3>
<div class="container">
    

<form action="verify.php" method="POST">
  <div class="imgcontainer">
    <img src="avatar.png" alt="Avatar" class="avatar" >
  </div>
  <label><b>USER-ID</b></label>
  <br>
    <input type="text" placeholder="Enter your ID" name="id" required>
<br>
 <label><b>Password</b></label>
    <br><input type="password" placeholder="Enter Password" name="psw" required>
        <br>
    <button type="submit" class="loginbtn">Login</button><br>
<br>
    <input type="checkbox" checked="checked"> Remember me<br>
  

  
     <span class="psw">Forgot <a href="forgot1.php">password?</a></span>
</div>  
</form>



</body>
</html>



