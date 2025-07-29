<?php
function decoder ($hcode) {
$msgmail="";
$hcode=trim($hcode);
$text="";
if (preg_match('/[[:xdigit:]]{16}/s',$hcode)&&strlen($hcode)==16) {
		for ($a=0;$a<strlen($hcode);$a++) {
	switch (substr($hcode,$a,1)) {
		case "5": $text=$text."0";break;
		case "3": $text=$text."1";break;
		case "A": $text=$text."2";break;
		case "E": $text=$text."3";break;
		case "9": $text=$text."4";break;
		case "D": $text=$text."5";break;
		case "4": $text=$text."6";break;
		case "7": $text=$text."7";break;
		case "C": $text=$text."8";break;
		case "0": $text=$text."9";break;
		case "2": $text=$text."A";break;
		case "F": $text=$text."B";break;
		case "B": $text=$text."C";break;
		case "6": $text=$text."D";break;
		case "1": $text=$text."E";break;
		case "8": $text=$text."F";
	}	
	}
	}
return acoder($text);
}
?>