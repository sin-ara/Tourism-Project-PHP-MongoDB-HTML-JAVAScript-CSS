<?php
$id=$_POST['id'];
$psw=$_POST['psw'];
$m=new MongoClient();
$db=$m->tourister;
$collec=$db->newuser;
$result=$collec->find(['ID'=>$id]);


foreach ($result as $res) {
	
	
	if ($_POST['psw']==$res['Password']) {
		

		session_start();
		
		$_SESSION['ID']= $rec['ID'];
		$_SESSION['Name']= $rec['Name'];
		$_SESSION['Password']= $rec['Password'];
		$_SESSION['logged']= TRUE;
		$_SESSION['assignment']= FALSE;
			
				header("Location:mainpage.php");
		
		
	}
	
	else
	{
		header("Location:sign.php");
		
	}


}

	

	

?>