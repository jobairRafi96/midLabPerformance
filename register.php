<?php

$uname=$_REQUEST['uname'];
//1 name validation
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


//2 email validation

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
		echo "EMAIL :".$email;
	}
}
else{
	echo "ivalid email type";
}


//3 Gender validation
$gender = $_REQUEST['gender'];
	if (empty($gender)) {
		echo "<br>empty gender field";
	}
	else{
		echo "<br>GENDER :".$gender;
	}

//4  dob validation
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
		echo "<br>DOB :".$day."/".$month."/".$year;
	}

	//5 degree validation


	$deg1= $_REQUEST['degree1'];
	$deg2= $_REQUEST['degree2'];
	$deg3= $_REQUEST['degree3'];

	if (empty($deg1) && empty($deg2) && empty($deg3)) {
		echo "empty degree field";
	}else{
		echo "<br>DEGREE : ".$deg1." ".$deg2." ".$deg3;
	}

	//6 blood validation

	// if (empty($_REQUEST['bg'])) {
	// 	echo "please select blood group";
	// }else {
		//echo "<br> Blood group :".$_REQUEST['bg'];
	// }
	if(isset($_POST['bg'])){
    $select1 = $_POST['bg'];
    switch ($select1) {
        case 'A+':
            echo '<br/>blood group: A+';
            break;
        case 'B+':
            echo '<br/>blood group: B+';
            break;
        case 'O-':
            echo '<br/>blood group: O-';
            break;
        default:
            echo "<br> Please select: bg";
            break;
    }
}

// 7 picture
 $pic = $_REQUEST['pp'];
 if (empty($pic)) {
 	echo "choose img";
 }
?>