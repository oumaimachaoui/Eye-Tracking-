<?php

	 $dbconn = new PDO("mysql:host=localhost;dbname=canvas",'root',"");
    $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

if($_REQUEST['positionclick']){
	$positionclick=$_REQUEST['positionclick'];
	$clickdate=$_REQUEST['clickdate'];
	$leftx=$_REQUEST['leftx'];
	$topx=$_REQUEST['topx'];
			//$sql = "INSERT INTO click(positionclick,clickdate)VALUES('$positionclick','$clickdate')";
			$sql = "INSERT INTO click(positionclick,clickdate,topx,leftx)VALUES('$positionclick','$clickdate','$topx','$leftx')";
	 		$query = $dbconn->prepare($sql);

        $query->bindparam('$positionclick', $positionclick);
        $query->bindparam('$clickdate', $clickdate);
       $query->bindparam('$leftx', $leftx);
        $query->bindparam('$topx', $topx);
          $query->execute();
          #echo "is inserted";
}
?>
