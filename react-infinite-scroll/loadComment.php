<?php
  header('Content-Type: application/json');
  $result=array(); 
  for ($i=0;$i<10;$i++){
	$result[i]["content"]="This is sample response";
        $result[i]["author"]="-~Author XYZ";
  }
  echo json_encode($result);

?>
