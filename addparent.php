<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Untitled Document</title>
</head>

<body>
	<?php
    include "connect.php";
    include "script.php";
    include "alert.php";
    $pa_name = $_POST['pa_name'];
    $pa_occupation = $_POST['pa_occupation'];
    $pa_tel = $_POST['pa_tel'];

    $new_id =mysql_result(mysql_query("Select Max(substr(pa_id,-4))+1 as MaxID from  parent"),0,"MaxID");
    if($new_id==''){
        $pa_id="P0001";
    }else{
        $pa_id="P".sprintf("%04d",$new_id);
    }
    if ($pa_name !=""){
        $sql  ="SELECT * FROM parent WHERE pa_name = '$pa_name'";
        $result = mysql_query($sql,$conn);
        $total = mysql_num_rows($result);
        if ($total == 0){
            $sql1 = "INSERT INTO parent (pa_id,pa_name,pa_occupation,pa_tel)VALUES('$pa_id','$pa_name','$pa_occupation','$pa_tel')";
            mysql_query($sql1,$conn)
            or die("3. Can't Query").mysql_error();
            mysql_close();
			echo success_h3("บันทึกข้อมูลเรียบร้อยแล้ว", "showpa.php");
			return;
		} else {
			echo error_h3("ผู้ปกครองซ้ำ");
			return;
		}
	} else {
		$msg = "";
		if (!$pa_name) $msg = $msg . " ชื่อ";
		if (!$pa_occupation) $msg = $msg . " อาชีพ";
		if (!$pa_tel) $msg = $msg . " เบอร์โทร";
		echo error_h3("กรุณาป้อน{$msg}");
	}
	?>
</body>

</html>