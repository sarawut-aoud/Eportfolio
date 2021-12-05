<?php
include 'connect.php';
    $t_id = $_GET['t_id'];
    $sql = "SELECT * FROM teacher t where  t.t_id = '$t_id'";
    $result = mysql_query($sql,$conn)
     or die ("ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
    $rs1 = mysql_fetch_array($result);
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
                <a class="btn btn-warning" href="../showteacher.php" >
                    <i class="fas fa-backspace"></i> Back
                </a>
                <h1></h1>
            </div>
            <form action="#" method="post" style="margin-top: 10px; margin-bottom: 10px;">
                <input name ="t_id" type="hidden" id="t_id" value="<?php echo "$rs1[t_id]"; ?> ">
                <input name ="t_pic" type="hidden" id="t_pic" value="<?php echo "$rs1[t_pic]"; ?> ">
                <table style="width: 50%; height: 100vh;">
                    <tr>
                        <td colspan="2" align="center">
                            Delete Teacher
                        </td>
                    </tr>
                    <tr>
                        <td width="200">
                            <div class="control-label" align="center">
                                <label>Teacher Name</label>
                            </div>
                        </td>
                        <td>
                            <input disabled="disabled" value="<?php echo "$rs1[t_name]";?>" type="text" class="form-control"
                                   name="t_name" id="t_name" placeholder="กรุณาใส่ชื่ออาจารย์"
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
                            <textarea disabled="disabled" value="<?php echo "$rs1[t_address]";?>"class="form-control" id="t_address"name="t_address" rows="3"></textarea>
                        </td>

                        </div>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class=" control-label" align="center">
                                <label >Phone</label>
                            </div>
                        </td>
                        <td>
                            <input disabled="disabled" value="<?php echo "$rs1[t_tel]";?>" type="text" class="form-control"  name="t_tel" id="t_tel" placeholder="กรุณาใส่เบอร์โทร"
                                   aria-describedby="basic-addon1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class=" control-label" align="center">
                                <label >Username</label>
                            </div>
                        </td>
                        <td>
                            <input disabled="disabled" value="<?php echo "$rs1[t_username]";?>" type="text" class="form-control"  name="t_username" id="t_username"
                                   placeholder="กรุณาใส่ Username"  aria-describedby="basic-addon1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class=" control-label" align="center">
                                <label>Password</label>
                            </div>
                        </td>
                        <td>
                            <input disabled="disabled" value="<?php echo "$rs1[t_password]";?>" type="password" class="form-control"  name="t_password" id="t_password"
                                   placeholder="กรุณาใส่ password"  aria-describedby="basic-addon1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class=" control-label" align="center" style="margin-top: 100%">
                                <span >Picture</span>
                            </div>
                        <td align="center">
                            <?php

                            if("$rs1[t_pic]" !=""){
                                ?>

                                <img src="<?php echo"./picture/$rs1[t_pic]";?>" width="100%" height="8%">
                                <?php
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class=" control-label" align="center">
                                <label >Department</label>
                            </div>
                        </td>
                        <td>
                            <select disabled="disabled" class="custom-select" name="d_id" id="d_id" >
                                <?php
                                $sql2 = "SELECT * from department ";
                                $result2 = mysql_query($sql2,$conn);
                                while ($rs2=mysql_fetch_array($result2)){
                                    echo "<option value = \"$rs2[d_id]\" ";
                                    if ("$rs1[d_id]"=="$rs2[d_id]")
                                    {echo'selected';}
                                    echo ">$rs2[d_name]";
                                    echo "</option>\n";

                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="control-label" align="center">
                                <label>Position</label>
                            </div>
                        </td>
                        <td>
                            <select disabled="disabled" class="custom-select" name="po_id" id="po_id" >
                                <?php
                                $sql2 = "SELECT * from position ";
                                $result2 = mysql_query($sql2,$conn);
                                while ($rs2=mysql_fetch_array($result2)){
                                    echo "<option value = \"$rs2[po_id]\" ";
                                    if ("$rs1[po_id]"=="$rs2[po_id]") {echo'selected';}
                                    echo ">$rs2[po_name]";
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

