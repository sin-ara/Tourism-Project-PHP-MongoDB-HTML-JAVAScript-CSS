<?php

$m=new mongoclient();

$db= $m->tourister;

$collec=$db->newuser;

if($_SESSION['ID']=='sumit')
{

$result=$collec->aggregate([[ $group=>[_id=>"Gender",'Total'=>[$sum=>1]]]]);
foreach($result as $reco)

{
	?>
	
	<div>
	
		<h2><?php echo "Total no of ".$reco['_id'].":".Total;  
		
					?></h2>
					
	</div>
<?php

}
}

$collec=$db->newuser;
$uname=$_SESSION['Name'];



?>















