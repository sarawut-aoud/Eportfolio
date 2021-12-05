<?php
    include  'connect.php';
include 'check.php';
    $c_id = $_GET['c_id'];
    $sql = "select * from classroom c where c.c_id = '$c_id' ";
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
                <a class="btn btn-warning" href="showclass.php" >
                    <i class="fas fa-backspace"></i> Back
                </a>
                <h1></h1>
            </div>
            <form action="addclassroomdetail.php" method="post" style="margin-top: 10px; margin-bottom: 10px;">
                <table>
                    <tr>
                        <td colspan="2" align="center">
                            Manager Classroom
                        </td>
                    </tr>

                    <td width="257" height="45" align='center'> Classroom Name </td>
                    <td width="233" align="center"> <?php echo "$rs[c_name]"; ?>
                        <input name="c_id" type="hidden" id="c_id" value="<?php echo"$rs[c_id]" ; ?>" /></td>
                    </tr>
                    <tr>
                        <td>
                            <div class=" control-label" align="center">
                                <label >Teacher of Class</label>
                            </div>
                        <td>
                            <select class="custom-select" name="t_id" id="t_id" >
                                <?php
                                $sql2 = "SELECT * from teacher ";
                                $result2 = mysql_query($sql2,$conn);
                                while ($rs2=mysql_fetch_array($result2)){
                                    echo "<option value = \"$rs2[t_id]\" ";
                                    if ("$rs[t_id]"=="$rs2[t_id]") {echo'selected';}
                                    echo ">$rs2[t_name]";
                                    echo "</option>\n";

                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="control-label" align="center">
                                <label >Boss of Class</label>
                            </div>
                        <td>
                            <select class="custom-select" name="std_id" id="std_id" >
                                <?php
                                $sql2 = "SELECT * from student ";
                                $result2 = mysql_query($sql2,$conn);
                                while ($rs2=mysql_fetch_array($result2)){
                                    echo "<option value = \"$rs2[std_id]\" ";
                                    if ("$rs[std_id]"=="$rs2[std_id]") {echo'selected';}
                                    echo ">$rs2[std_name]";
                                    echo "</option>\n";

                                }
                                ?>
                            </select>
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

