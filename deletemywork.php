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
$t_id = $_POST['t_id'];
$sql = "DELETE FROM work_detail WHERE w_id = '$w_id' AND t_id = '$t_id'";
mysql_query($sql,$conn);
echo success_h3("ลบข้อมูลเรียบร้อยแล้ว","frm_mywork.php");
?>
</body>
</html>