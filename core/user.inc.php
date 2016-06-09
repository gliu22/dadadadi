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

		if($row['Level'] == 0)
		{
			$mes="success！<br/>redirct in 3 seconds<meta http-equiv='refresh' content='3;url=user_select/normal_user.php?id=".$row['id']. "&firstname=".$row['firstname']."'/>";
		}
		if($row['Level'] == 1)
		{
			$mes="success！This is Admin <br/>redirct in 3 seconds<meta http-equiv='refresh' content='3;url=user_select/editor_user.php?id=".$row['id']. "&firstname=".$row['firstname']."'/>";
		}
		if($row['Level'] == 2)
		{
			$mes="success！This is Editor<br/>redirct in 3 seconds<meta http-equiv='refresh' content='3;url=user_select/editor_user.php?id=".$row['id']. "&firstname=".$row['firstname']."'/>";
		}

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

function updateUser()
{
	$arr=$_POST;
	$theEmail=$_POST['Email'];

	$where= "Email ='".$theEmail."'";
	//echo $where;
  $url = $_SERVER['HTTP_REFERER'];
	if($res=update("user_table", $arr,$where)){
		$mes="Update Sucess!<br/>redirect after 3 seconds!<meta http-equiv='refresh' content='3;url=login.php'/>";
	}else{
		$mes="Fail!<br/><a href='reg.php'>Again</a>|<a href='index.php'>check home</a>";
	}
	return $mes;
}



function uploadArticle()
{
	$arr=$_POST;
	$theJournal = $arr['Journal_ID'];

	$theTitle = str_replace(' ', '', $arr['Title']);

//check email exist

//$theEmail = mysql_real_escape_string($arr['Email']);
$theTitle  = $arr['Title'];
$sql = "select ID from Article where Title = '".$theTitle."';";

	if(getResultNum($sql)==0){

		if(isset($_FILES['Paper_Path'])){
				$errors= array();
				$file_name = $_FILES['Paper_Path']['name'];
				$file_size =$_FILES['Paper_Path']['size'];
				$file_tmp =$_FILES['Paper_Path']['tmp_name'];
				$file_type=$_FILES['Paper_Path']['type'];
				$file_ext=strtolower(end(explode('.',$_FILES['Paper_Path']['name'])));

				$expensions= array("pdf","docx","doc","dotx","dot","txt");

				if(in_array($file_ext,$expensions)=== false){
					 $errors[]="extension not allowed";
				}

				if($file_size > 30097152){
					 $errors[]='File size must be excately 30 MB';
				}

				if(empty($errors)==true){
					$PaperLoca = "upload/".$theJournal."/".$file_name;
					 move_uploaded_file($file_tmp,"upload/".$theJournal."/".$file_name);
					 echo "Success Upload file";
				}else{
					 print_r($errors);
				}
		 }

		 if(isset($_FILES['Photo_Path'])){
				 $errors= array();
				 $file_name2 = $_FILES['Photo_Path']['name'];
				 $file_size2 =$_FILES['Photo_Path']['size'];
				 $file_tmp2 =$_FILES['Photo_Path']['tmp_name'];
				 $file_type2=$_FILES['Photo_Path']['type'];
				 $file_ext2=strtolower(end(explode('.',$_FILES['Photo_Path']['name'])));

				 $expensions= array("pdf","docx","doc","dotx","dot","txt","jpeg","gif","png");

				 if(in_array($file_ext2,$expensions)=== false){
						$errors[]="extension not allowed";
				 }

				 if($file_size2 > 30097152){
						$errors[]='File size must be excately 30 MB';
				 }

				 $str = "picture";
				 $PhotoLoca=NULL;
				 if(empty($errors)==true){
					 $PhotoLoca ="upload/".$theJournal."/".$str."/".$file_name2;
						move_uploaded_file($file_tmp2,"upload/".$theJournal."/".$str."/".$file_name2);
						echo "Success upload picture";
				 }else{
						print_r($errors);
				 }
			}

		$newarr = array("Title"=>$arr['Title'], "Abstract"=>$arr['Abstract'], "keyword"=>$arr['keyword'], "Num_Of_Page"=>$arr['Num_Of_Page'], "Paper_Path"=>$PaperLoca, "Photo_Path"=> $PhotoLoca, "USER_ID"=>$arr['USER_ID'], "Journal_ID"=>$arr['Journal_ID'],
	"Status"=>"Received");
		if(insert("Article", $newarr)){
			$mes="Sucess upload article!<br/>redirect after 3 seconds!<meta http-equiv='refresh' content='3;url=login.php'/>";
		}else{
			$mes="Fail!<br/><a href='reg.php'>Again</a>|<a href='index.php'>check home</a>";
		}
		return $mes;
	}else{
		$mes="Article already exist in this Journal!!<br/><a href='reg.php'>Again</a>|<a href='index.php'>check home</a>";
	}
	return $mes;

}





function Comment($theID)
{

// check which button was clicked
// perform calculation
if( isset($_POST['Reject']) )
{
	  $arr= array("Comment" =>$_POST['Comment'], "Status" =>"Rejected");
		$where= "ID = ".$theID."";
		if($res=update("Article", $arr,$where))
		{
			$mes="Update Sucess!<br/>redirect after 3 seconds!<meta http-equiv='refresh' content='3;url=login.php'/>";
		}else{
			$mes="Fail!<br/><a href='reg.php'>Again</a>|<a href='index.php'>check home</a>";
		}
		return $mes;
}
if( isset($_POST['Pass']) )
{
	$arr= array("Comment" =>$_POST['Comment'], "Status" =>"Published");
	$where= "ID = ".$theID."";
	if($res=update("Article", $arr,$where)){
		$mes="Update Sucess!<br/>redirect after 3 seconds!<meta http-equiv='refresh' content='3;url=login.php'/>";
	}else{
		$mes="Fail!<br/><a href='reg.php'>Again</a>|<a href='index.php'>check home</a>";
	}
	return $mes;
}

if( isset($_POST['Download']) )
{
	$file = 'upload/Orange/orange.pdf';

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
}

}
