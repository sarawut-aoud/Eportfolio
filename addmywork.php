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

if($w_id != NULL && $t_id != "" ) {
    $sql1 = "SELECT * FROM work_detail where t_id = '$t_id' and w_id='$w_id'";
    $result1 = mysql_query($sql1, $conn);
    $total1 = mysql_num_rows($result1);
    if ($total1 == 0) {
        $sql = "INSERT INTO work_detail (w_id,t_id) VALUES ('$w_id','$t_id')";
        mysql_query($sql, $conn);
    } else {
        echo error_h3("ผลงานซ้ำ", "frm_mywork.php");
        return;
    }
    echo success_h3("บันทึกข้อมูลเรียบร้อยเเล้ว", "frm_mywork.php");
    mysql_close();
}

?>
</body>
</html>