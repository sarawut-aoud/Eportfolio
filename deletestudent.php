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
$std_id = $_GET['std_id'];
$sql = "SELECT * FROM student WHERE std_id = '$std_id'";
$result = mysql_query($sql,$conn);
$rs = mysql_fetch_array($result);
if("$rs[std_pic]" != ""){ @unlink("./picture/$rs[std_pic]"); }
$sql = "DELETE FROM student WHERE std_id = '$std_id'";
mysql_query($sql,$conn)
	or die("3. ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
mysql_close();
echo success_h3("ลบข้อมูลเรียบร้อยเเล้ว","showstudent.php");
?>
</body>
</html>