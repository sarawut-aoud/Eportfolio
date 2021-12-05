<?php
    include 'connect.php';
include 'check.php';
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
                <a class="btn btn-warning" href="showteacher.php" >
                    <i class="fas fa-backspace"></i> Back
                </a>
                <h1></h1>
            </div>
            <form action="addteacher.php" method="post" enctype="multipart/form-data" style="margin-top: 10px; margin-bottom: 10px;">

                <table >
                    <tr>
                        <td colspan="2" align="center">
                            Add Teacher
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class=" control-label" align="center">
                                <label>ชื่ออาจารย์</label>
                            </div>
                        </td>
                        <td>
                            <input type="text" class="form-control"  name="t_name" id="t_name" placeholder="กรุณาใส่ชื่ออาจารย์"
                                   aria-describedby="basic-addon1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="control-label" align="center">
                                <label style="margin-top: 25%" >ที่อยู่</label>
                            </div>
                        </td>
                        <td>
                            <textarea class="form-control" id="t_address"name="t_address" rows="3"></textarea>
                        </td>

                        </div>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class=" control-label" align="center">
                                <label >เบอร์โทร</label>
                            </div>
                        </td>
                        <td>
                            <input type="text" class="form-control"  name="t_tel" id="t_tel" placeholder="กรุณาใส่เบอร์โทร"
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
                            <input type="text" class="form-control"  name="t_username" id="t_username"
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
                            <input type="password" class="form-control"  name="t_password" id="t_password"
                                   placeholder="กรุณาใส่ password"  aria-describedby="basic-addon1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-sm-3">
                                    <span>รูปภาพ</span>
                            </div>
                        <td>
                            <input type="file" class="custom-file" name="photo" id="photo" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class=" control-label" align="center">
                                <label >ตำแหน่ง</label>
                            </div>
                        </td>
                        <td>
                            <select class="custom-select" name="po_id" id="po_id" >
                                <?php
                                $sql1 = "SELECT * from position ";
                                $result1 = mysql_query($sql1,$conn);
                                while ($rs1=mysql_fetch_array($result1)){
                                    echo "<option value = $rs1[po_id]>$rs1[po_name]</option>";
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="control-label" align="center">
                                <label>กลุ่มสาระ</label>
                            </div>
                        </td>
                        <td>
                            <select class="custom-select" name="d_id" id="d_id" >
                                <?php
                                $sql1 = "SELECT * from department ";
                                $result = mysql_query($sql1,$conn);
                                while ($rs=mysql_fetch_array($result)){
                                    echo "<option value = $rs[d_id]>$rs[d_name]</option>";
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

