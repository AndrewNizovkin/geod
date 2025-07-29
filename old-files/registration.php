<?php
require_once "acoder.php";
require_once "decoder.php";
require_once "registrator.php";
$PROGRAMM_ID=$_REQUEST['PROGRAMM_ID'];
$REG_EMAIL=$_REQUEST['REG_EMAIL'];
$CODE="";
$msg1="";
if (preg_match('/[[:xdigit:]]{16}/s',$PROGRAMM_ID)&&strlen($PROGRAMM_ID)==16 && preg_match('/(\S+)@([a-z0-9.]+)/is',$REG_EMAIL)) {
	$client=new registrator($PROGRAMM_ID,$REG_EMAIL);
	$CODE=$client->acode();
	$client->sendmail();
	unset ($client);
	$msg1="The activation code sent to $REG_EMAIL";
}
?>
<html><body>
<h3>Registration</h3>
<form action="<?=$_SERVER['SCRIPT_NAME']?>">
Enter your e-mail: <input type=text name="REG_EMAIL" value="<?=$REG_EMAIL?>"><br><br>
Enter your hex code: <input type=text name="PROGRAMM_ID" value="<?=$PROGRAMM_ID?>"><br><br>
Activation code: <input type=text name="CODE" value="<?=$CODE?>"><br><br>
<input type=submit value="Get code"><br><br>
<font color= "#0000FF"><? echo $msg1;?></font>
</form>
</body></html>