<?php

include "connect.php";
include  'check.php';

$valid_uname = $_SESSION['valid_uname'];
$sql = "SELECT * FROM teacher t, work w, work_detail wd WHERE wd.t_id = t.t_id and wd.w_id = w.w_id and t.t_username = '$valid_uname'";
$result = mysql_query($sql,$conn)
	or die("3. ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
mysql_close();
$rs = mysql_fetch_array($result);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>แก้ไขข้อมูลผลงาน</title>
<?php include "script.php"; ?>
</head>

<body>
<?php include "./h/teacher_menu.php"; ?>

    <div class="container h-100 ">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="card col-sm-4">
                <div class="card-body" align="center">
                    <h5 class="card-title text-center">แก้ไขข้อมูลผลงาน</h5>
                    <br>

                    <form id="form1" name="form1" method="post" action="editwork.php">

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">ชื่อผลงาน</span>
                            </div>

                            <input required name="w_name" type="text" value="<?php echo "$rs[w_name]"; ?>" class="form-control"
                                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                <input name="w_id" type="hidden" id="w_id" value="<?php echo "[w_id]"; ?>">
                        </div>

                        <div style="cursor:pointer" class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">ปี</span>
                            </div>
                            <input value="<?php echo "$rs[w_year]"; ?>" style="cursor:pointer" data-date-language="th" required name="w_year" type="text"
                                class="form-control datepicker" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">หน่วยงาน</span>
                            </div>
                            <input value="<?php echo "$rs[w_org]"; ?>" required name="w_org" type="text" class="form-control"
                                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>

                        </td>
                        <div align="center">
                            <button type="submit" class="btn btn-primary">บันทึก</button>
                            <button type="button" onClick=window.history.back() class="btn btn-secondary">ยกเลิก</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

        <tr>
            <td align="center">
                <h3 align="center"> EPORTFOLIO BY SARAWUT AOUDKLA 611102064109
                </h3>
            </td>
        </tr>
    </div>
</body>
</html>
