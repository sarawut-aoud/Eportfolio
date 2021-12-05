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
            <form action="addparent.php" method="post" style="margin-top: 10px; margin-bottom: 10px;">

                <table >
                    <tr>
                        <td colspan="2" align="center">
                            Add Parent
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="control-label" align="center">
                                <label >Parent  Name</label>
                            </div>
                        </td>
                        <td>
                            <input type="text" class="form-control"  name="pa_name" id="pa_name"
                                   placeholder="กรุณาใส่ชื่อผู้ปกครอง" aria-describedby="basic-addon1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="control-label" align="center">
                                <label>Occupation</label>
                            </div>
                        <td>
                            <input type="text" class="form-control"  name="pa_occupation" id="pa_occupation"
                                   placeholder="กรุณาใส่อาชีพ"  aria-describedby="basic-addon1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="control-label" align="center">
                                <label>Phone</label>
                            </div>
                        <td>
                            <input type="text" class="form-control"  name="pa_tel" id="pa_tel"
                                   placeholder="เบอร์โทร"  aria-describedby="basic-addon1">
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

