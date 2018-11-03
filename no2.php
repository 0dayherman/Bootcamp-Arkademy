<?php

function validate($username){
	 preg_match("/^[a-z]{5}_[0-9]{2}/",$username,$d);
	return $d;
}
echo '<form action="" method="post">
		Username: <input type="text" name="username">
		<input type="submit" name="kirim" value="Submit">
	</form>';
if(isset($_POST['kirim'])){
	$a = htmlspecialchars($_POST['username']);;
	$c = validate($a);
	$f = count($c);
	if($f===0){
		echo json_encode(array("valid"=>"false","error"=>"1"));
	}elseif($f===1){
		echo json_encode(array("valid"=>"true","error"=>"0"));
	}else{
		echo json_encode(array("valid"=>"false","error"=>"2"));
	}
}
?>