<?php
include 'connect.php';
include 'check.php';
$std_id=$_GET['std_id'];

$slq = "select * from student s  where s.std_id = '$std_id' ";
$result1 = mysql_query($slq,$conn)
or die ("3.ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
$rs1 = mysql_fetch_array($result1);
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
                <a class="btn btn-warning" href="showstudent.php" >
                    <i class="fas fa-backspace"></i> Back
                </a>
                <h1></h1>
            </div>
            <form action="editstudent.php" method="post" enctype="multipart/form-data" style="margin-top: 10px; margin-bottom: 10px;">
                <input hidden="std_id" name="std_id" value="<?php echo "$rs1[std_id];"?>">
                <input hidden="std_pic" name="std_pic" value="<?php echo "$rs1[std_pic];"?>">
                <table style="width: 50%; height: 100vh;">
                    <tr>
                        <td colspan="2" align="center">
                            Edit Student
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class=" control-label" align="center">
                                <label>Student Name</label>
                            </div>
                        </td>
                        <td>
                            <input  value="<?php echo "$rs1[std_name]";?>" type="text" class="form-control"  name="std_name" id="std_name" placeholder="กรุณาใส่ชื่อ"
                                   aria-describedby="basic-addon1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="control-label" align="center">
                                <label style="margin-top: 25%" >Address</label>
                            </div>
                        </td>
                        <td>
                            <textarea  class="form-control" id="std_address"name="std_address" rows="3"><?php echo "$rs1[std_address]";?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class=" control-label" align="center">
                                <label >Phone</label>
                            </div>
                        </td>
                        <td>
                            <input  value="<?php echo "$rs1[std_tel]";?>" type="text" class="form-control"  name="std_tel" id="std_tel" placeholder="กรุณาใส่เบอร์โทร"
                                   aria-describedby="basic-addon1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class=" control-label" align="center">
                                <span>Picture</span>
                            </div>
                        <td>
                            <?php

                            if("$rs1[std_pic]" !=""){
                                ?>

                                <img src="<?php echo"./picture/$rs1[std_pic]";?>" width="100%" height="8%">
                                <?php
                            }
                            ?>
                            <input style="margin-top: 20px " type="file" class="custom-file" name="photo" id="photo" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class=" control-label" align="center">
                                <label >Parent</label>
                            </div>
                        </td>
                        <td>
                            <select  class="custom-select" name="pa_id" id="pa_id" >
                                <?php
                                $sql2 = "SELECT * from parent ";
                                $result2 = mysql_query($sql2,$conn);
                                while ($rs2=mysql_fetch_array($result2)){
                                    echo "<option value = \"$rs2[pa_id]\" ";
                                    if ("$rs1[pa_id]"=="$rs2[pa_id]") {echo'selected';}
                                    echo ">$rs2[pa_name]";
                                    echo "</option>\n";
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="control-label" align="center">
                                <label>Classroom</label>
                            </div>
                        </td>
                        <td>
                            <select  class="custom-select" name="c_id" id="c_id" >
                                <?php
                                $sql2 = "SELECT * from classroom ";
                                $result2 = mysql_query($sql2,$conn);
                                while ($rs2=mysql_fetch_array($result2)){
                                    echo "<option value = \"$rs2[c_id]\" ";
                                    if ("$rs1[c_id]"=="$rs2[c_id]") {echo'selected';}
                                    echo ">$rs2[c_name]";
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

