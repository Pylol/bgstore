<?php
	$conn = mysql_connect("125.221.225.210:3306","root","88888888");
	mysql_select_db("db_BookStore");
	mysql_query("set names utf8");
	
	session_start();
	$userName = $_POST['userName'];
	$userAdress = $_POST['userAdress'];
	$userPostcode = $_POST['userPostcode'];
	$userPhonenum = $_POST['userPhonenum'];
	$userEmail = $_SESSION['current_user'];
	
//	echo $userName.$userAdress.$userPostcode.$userPhonenum.$userEmail;
	$sql = "select * from tb_UserInfo where user_Email='$userEmail'";
	$arr = mysql_query($sql, $conn);
	if($arr)
	{
		$sql = "update tb_UserInfo set
		user_Name='$userName',user_Adress='$userAdress',user_PostCode='$userPostcode',user_Number='$userPhonenum'
		where user_Email='$userEmail'";
	}
	else
	{
		$sql = "insert into tb_UserInfo values('$userEmail','$userName','$userAdress','$userPostcode','$userPhonenum')";
	}
	echo $sql;
	$arr = mysql_query($sql, $conn);
	if($arr)
	{
		echo "信息填写成功";
	}
	else
	{
		echo "信息填写失败";
	}
?>
