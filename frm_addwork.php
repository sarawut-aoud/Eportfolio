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
include './h/teacher_menu.php'
?>
<table class="table table-bordered" align="center" style="width: 100%; height: 100vh;">
    <tbody>
    <tr>
        <td align="center">
            <!--            Inner Table-->
            <div style="width: 80%; text-align: right; margin-top: 10px;">
                <a class="btn btn-warning" href="showwork.php" >
                    <i class="fas fa-backspace"></i> Back
                </a>
                <h1></h1>
            </div>
            <form action="addwork.php" method="post" style="margin-top: 10px; margin-bottom: 10px;">

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
                            <input type="text" class="form-control"
                                   name="w_name" id="w_name" placeholder="กรุณาใส่ชื่อการงาน"  aria-describedby="basic-addon1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="control-label" align="center">
                                <label>Year</label>
                            </div>
                        </td>
                        <td>
                            <input type="text" class="form-control"  name="w_year" id="w_year"
                                   placeholder="กรุณาใส่ปีการทำงาน"  aria-describedby="basic-addon1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="control-label" align="center">
                                <label>Organization</label>
                            </div>
                        </td>
                        <td>
                            <input type="text" class="form-control"  name="w_org" id="w_org" placeholder="หน่วยงาน"  aria-describedby="basic-addon1">
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

