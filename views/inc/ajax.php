<?php 
include(dirname(__FILE__).'/../../modeles/query.php');

if($_POST["type"] == "1"){	
	delTodo($_POST["id"]);
}
if($_POST["type"] == "2"){
	delPB($_POST["id"]);
}
	$json = json_encode(true);
return $json;
?>