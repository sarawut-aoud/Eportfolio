<?php
    include 'connect.php';
include 'check.php';
    $pa_id = $_GET['pa_id'];
        //$pa_occupation = $_GET['pa_occupation'];
        //$pa_tel = $_GET['pa_tel'];
    $sql = "SELECT * FROM parent WHERE pa_id = '$pa_id' ";
    $result = mysql_query($sql,$conn)
        or die ("ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
    $rs = mysql_fetch_array($result);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EPORTFOLIO-TAR</title>
    <?php
    include "script.php";
    ?>
</head>
<body>
<?php
include './h/admin_menu.php'
?>
<table class="table table-bordered" align="center" style="width: 100%; height: 100vh;">
    <tbody>
    <tr>
        <td align="center">
            <!--            Inner Table-->
            <div style="width: 80%; text-align: right; margin-top: 10px;">
                <a class="btn btn-warning" href="showpa.php" >
                    <i class="fas fa-backspace"></i> Back
                </a>
                <h1></h1>
            </div>
            <form action="editparent.php" method="post" style="margin-top: 10px; margin-bottom: 10px;">

                <table >
                    <tr>
                        <td colspan="2" align="center">
                           Edit Parent
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="control-label" align="center">
                                <label >Parent  Name</label>
                            </div>
                        </td>
                        <td>
                            <input value="<?php echo "$rs[pa_name]";?>" type="text" class="form-control"  name="pa_name" id="pa_name"
                                   placeholder="กรุณาใส่ชื่อผู้ปกครอง" aria-describedby="basic-addon1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="control-label" align="center">
                                <label>Occupation</label>
                            </div>
                        <td>
                            <input value="<?php echo "$rs[pa_occupation]";?>" type="text" class="form-control"  name="pa_occupation" id="pa_occupation"
                                   placeholder="กรุณาใส่อาชีพ"  aria-describedby="basic-addon1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="control-label" align="center">
                                <label>Phone</label>
                            </div>
                        <td>
                            <input value="<?php echo "$rs[pa_tel]";?>"type="text" class="form-control"  name="pa_tel" id="pa_tel"
                                   placeholder="เบอร์โทร"  aria-describedby="basic-addon1">
                        </td>

                    <tr>
                        <td colspan="2" align="center">
                            <input class="btn btn-success" type="submit" value="Save">
                            <input class="btn btn-danger" type="reset" value="Cancel">
                        </td>
                    </tr>
                </table>
                <input name="pa_id" type="hidden" id="pa_id" value="<?php echo "$rs[pa_id]";?>" >
            </form>
            <!--            Inner Table-->
        </td>
    </tr>
    <tr>
        <td align="center">
            <h3> EPORTFOLIO BY SARAWUT AOUDKLA 611102064109
            </h3>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>

