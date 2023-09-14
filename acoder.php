<?php
function acoder ($acode) {
	$akt=0;
	for ($a=0;$a<strlen($acode);$a=$a+2) {
	$akt=$akt+hexdec(substr($acode,$a,2));
	}
return $akt*19;
}
?>