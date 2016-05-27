<?php
function reg(){
	$arr=$_POST;
	$arr['PassWord']=md5($_POST['PassWord']);
	$arr['regdate']= date("Y-m-d");

	PreventInje($arr);

	//check email exist

//$theEmail = mysql_real_escape_string($arr['Email']);
$theEmail  = $arr['Email'];
$sql = "select ID from user_table where Email = '".$theEmail."';";

	if(getResultNum($sql)==0){
		if(insert("user_table", $arr)){
			$mes="Sucess!<br/>redirect after 3 seconds!<meta http-equiv='refresh' content='3;url=login.php'/>";
		}else{
			$mes="Fail!<br/><a href='reg.php'>Again</a>|<a href='index.php'>check home</a>";
		}
		return $mes;
	}else{
		$mes="Email already exist!!<br/><a href='reg.php'>Again</a>|<a href='index.php'>check home</a>";
	}
	return $mes;
}


  // insert into to user table


function login(){
	$theEmail=$_POST['account'];
	//addslashes():使用反斜线引用特殊字符
	//$username=addslashes($username);
	$theEmail=mysql_escape_string($theEmail);
	$password=md5($_POST['password']);
	$sql="select * from user_table where Email='{$theEmail}' and password='{$password}'";
	//$resNum=getResultNum($sql);
	$row=fetchOne($sql);
	//echo $resNum;
	if($row){
		$_SESSION['loginFlag']=$row['id'];
		$_SESSION['theEmail']=$row['Email'];
		$_SESSION['level']=$row['Level'];
		$mes="success！<br/>redirct in 3 seconds<meta http-equiv='refresh' content='3;url=index.html'/>";
	}else{
		$mes="fail！<a href='login.php'>again</a>";
	}
	return $mes;
}

function userOut(){
	$_SESSION=array();
	if(isset($_COOKIE[session_name()])){
		setcookie(session_name(),"",time()-1);
	}

	session_destroy();
	header("location:index.php");
}

function getJournals()
{
	echo "0 results";
	$sql = "SELECT Name FROM Journal";
  $result = fetchAll($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
}
