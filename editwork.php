
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include "connect.php";
include "script.php";
include "alert.php";
$w_id = $_POST['w_id'];
$w_name = $_POST['w_name'];
$w_year = $_POST['w_year'];
$w_org = $_POST['w_org'];
// check bank text
if($w_name && $w_org && $w_year){
	// check diplicate priamry key
	$sql = "SELECT * FROM work WHERE w_name = '$w_name' AND w_year = '$w_year' AND w_org = '$w_org' AND w_id != '$w_id'";
	$total = mysql_query($sql,$conn);
	
	if(mysql_num_rows($total) == 0){
		$sql = "UPDATE work SET w_name = '$w_name',w_year = '$w_year',w_org = '$w_org' WHERE w_id = '$w_id'";
		mysql_query($sql,$conn)
			or die("3. ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
	}else{
		echo error_h3("ผลงานซ้ำ","frm_editwork.php");
		return;
	}
}else{
	$msg = "";
	if(!$w_name) $msg = $msg." ชื่อผลงาน";
	if(!$w_year) $msg = $msg." ปี";
	if(!$w_org) $msg = $msg." หน่วยงาน";
	echo "<script language=\"javascript\">alert('กรุณาป้อน{$msg}');window.location = 'showwork.php';</script>";
}
mysql_close();
echo success_h3("แก้ไขข้อมูลเรียบร้อยแล้ว","showwork.php");
return;
?>
</body>
</html>