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
   
</ul>

<br><br><br><br>
<h3>ADMIN HOMEPAGE</h3>
<br>
<br>
<br>

<form align="center" action="fetch.php">
<label>GET ALL USERS</label><br>

  <input type="submit" value="GO" class="loginbtn" style="width:20%"> 
  
  </form> 
  
  <br>
  <br>
  <br>
<div class="container">
    


  
	 <label><b>SEARCH BY CATEGORY</label><BR>

<form action="projection.php" method="post">
<input type="checkbox" name="check_list[]" value="name"><label>NAME</label><br/>
<input type="checkbox" name="check_list[]" value="age"><label>AGE</label><br/>
<input type="checkbox" name="check_list[]" value="gender"><label>GENDER</label><br/>


<input type="checkbox" name="check_list[]" value="city"><label>CITY</label><br/>


<br>	
  
  
  
  
    <button type="submit" class="loginbtn">SEARCH</button><br>
<br>
    
	</form>
	
	</div>  
<br>
<br>

<label>FOR LIMITED RESULTS</label>

<form action="pagination.php" method="post" align="center">
<label>limit</label><br/>

<input type="number" name="fix" value="total">

<br>	
  
  
  
  
    <button type="submit" class="loginbtn">FETCH</button><br>
<br>
    
	</form>


</body>
</html>



