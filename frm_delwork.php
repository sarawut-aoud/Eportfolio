<?php
include 'connect.php';
include 'check.php';
$valid_uname = $_SESSION['valid_uname'];
$w_id=$_GET['w_id'];

$sql = "SELECT * 
        FROM teacher t, work w , work_detail wd  
        where wd.t_id = t.t_id and wd.w_id = w.w_id 
        and t.t_username = '$valid_uname'";

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
                <a class="btn btn-warning" href="frm_mywork.php" >
                    <i class="fas fa-backspace"></i> Back
                </a>

                <h1></h1>
            </div>
            <form action="deletemywork.php" method="post" style="margin-top: 10px; margin-bottom: 10px;">
                <?php
                $sql2 = "SELECT * FROM  work_detail wd,work w   
	where wd.w_id = w.w_id and wd.w_id = '$w_id'";

                $result2 = mysql_query($sql2,$conn)
                or die ("ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
                $rs2 = mysql_fetch_array($result2);

                ?>


                <table >
                    <tr>
                        <td colspan="2" align="center">
                            Edit Work
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="control-label" align="center">
                                <label >Name Work</label>
                            </div>
                        </td>
                        <td>
                            <input disabled="disabled"  type="text" class="form-control" value="<?php echo "$rs2[w_name]";?>"
                                   name="w_name" id="w_name" placeholder="กรุณาใส่ชื่อการงาน"  aria-describedby="basic-addon1">
                            <input type="hidden" name="t_id" id="t_id" value="<?php echo "$rs[t_id]" ?>">
                            <input type="hidden" name="w_id" id="w_id" value="<?php echo "$rs2[w_id]" ?>">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="button" id="button" value="Delete" class="btn btn-danger text-white"  >
                        </td>
                    </tr>
                </table>

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

