<?php
$connect = mysqli_connect("localhost","root","","myDB");

if(isset($_POST['E_mail']))
{
  if (!filter_var($_POST['E_mail'], FILTER_VALIDATE_EMAIL)) {
  echo "<span> Invalid email format </span> ";
  return;
}
  $_POST['E_mail']=mysql_escape_string($_POST['E_mail']);
  $sql = "SELECT * FROM user_table WHERE Email = '" .$_POST["E_mail"]."'";
  $result  = mysqli_query($connect, $sql);
  if(mysqli_num_rows($result) > 0){
    echo "<span style='color:red;> Email not available</span>";
  }
  else {
    echo "<span style='color:green;'> Email available</span>";
  }
}

if(isset($_POST['Pass_Word']))
{
  if (strlen($_POST['Pass_Word']) < 8) {
      echo "<span style='color:red;> Password too short!</span>";
    }

    if (!preg_match("#[0-9]+#", $_POST['Pass_Word'])) {
        echo "<span style='color:red;> Password must include at least one number!</span>";
    }

    if (!preg_match("#[a-zA-Z]+#", $_POST['Pass_Word'])) {
        echo " <span style='color:red;> Password must include at least one letter!</span>";
    }
}
?>
