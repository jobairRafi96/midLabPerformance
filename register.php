<?php

$uname=$_REQUEST['uname'];
// name validation
if (empty($uname)) {
	echo " i) cannot be empty field";
}elseif (str_word_count($uname)<2) {
	echo " ii) contains atleast 2 words";
}elseif ($uname[0]===0||$uname[0]===1||$uname[0]===2||
	$uname[0]===3||$uname[0]===4||$uname[0]===5||$uname[0]===6||$uname[0]===7||$uname[0]===8||$uname[0]===9) {
	echo "iv) first character must be Letter";
}
else{
echo "Name :".$_REQUEST['uname']."<br>";
}


//email validation

$email=trim($_REQUEST['email']);
if (empty($email)) {
	echo "empty email field";
} 
elseif (strpos($email, "@") && stripos($email,".")) {
	$emString=explode("@",$email);
	$strL=strlen($emString[1])-1;
	if (strpos($emString[1], ".")==$strL) {
	echo "invalid";
	}else{
		echo $email;
	}
}
else{
	echo "ivalid email type";
}


// Gender validation
$gender = $_REQUEST['gender'];
	if (empty($gender)) {
		echo "<br>empty gender field";
	}
	else{
		echo "<br>".$gender;
	}

// dob validation
	$day= $_REQUEST['day'];
	$month= $_REQUEST['month'];
	$year =$_REQUEST['year'];

	if (empty($day) || empty($month) || empty($year)) {
		echo "<br>empty year field";
	}
	elseif ($day>31 || $month>12 || $year>2016) {
		echo "<br>invalid Date field";
	}
	else{
		echo "<br>".$day."/".$month."/".$year;
	}

?>