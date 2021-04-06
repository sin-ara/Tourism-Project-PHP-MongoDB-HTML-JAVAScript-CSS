<?php

$id=$_POST['id'];
$email=$_POST['email'];
$psw=$_POST['psw'];

$psw_repeat=$_POST['psw_repeat'];

   // connect to mongodb
   $m = new MongoClient();
   
	
   // select a database
   $db = $m->tourister;
 
   $collection = $db->newuser;
  

   // now update the document
 //  $result=$collection->find();
//foreach ($result as $res)
	//	{
		//	if ($res['ID']==$id && $res['Email']==$email)
			//{
				//echo
				
				$collection->update(array("ID"=>$_POST['id'],"Email"=>$_POST['email']),
					 array('$set'=>array("Password"=>$_POST['psw'],"Password_repeat"=>$_POST['psw_repeat'])));
							echo "Document updated successfully";
							
							
							header("Location:sign.php");
							
							
	
   // now display the updated document
  // $cursor = $collection->find();
	
   // iterate cursor to display title of documents
   //echo "Updated document";
	
   //foreach ($cursor as $document) {
     // echo $document["title"] . "\n";
   //}
		//} 
		

?>