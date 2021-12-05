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
    include 'check.php';
    $valid_uname = $_SESSION['valid_uname'];


    $sql = "SELECT * FROM teacher t, work w , work_detail wd  where wd.t_id = t.t_id and wd.w_id = w.w_id and t.t_username = '$valid_uname'";

    $result = mysql_query($sql,$conn)
    or die ("ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
    $rs = mysql_fetch_array($result);
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
            <form action="addmywork.php" method="post" style="margin-top: 10px; margin-bottom: 10px;">

                <table >
                    <tr>
                        <td colspan="2" align="center">
                            Add Work
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="control-label" align="center">
                                <label >Name Work</label>
                            </div>
                        </td>

                        <td>
                            <select class="custom-select"  name="w_id" id="w_id" >

                                <?php
                                $sql2 = "SELECT * from work ";
                                $result2 = mysql_query($sql2,$conn);
                                while ($rs2=mysql_fetch_array($result2)){
                                    echo "<option value = \"$rs2[w_id]\" ";
                                    if ("$rs[w_id]"=="$rs2[w_id]") {echo'selected';}
                                    echo ">$rs2[w_name]";
                                    echo "</option>\n";

                                }
                                ?>
                            </select>
                            <input type="hidden" name="t_id" id="t_id" value="<?php echo "$rs[t_id]" ?>">
                        </td>


                    </tr>

                    <tr>
                        <td colspan="2" align="center">
                            <input class="btn btn-success" type="submit" value="Save">
                            <input class="btn btn-danger" type="reset" value="Cancel">
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

