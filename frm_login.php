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
<body >
<?php
include './h/menu.php'
?>
<table class="table table-bordered" align="center" style="width: 100%; height: 100vh;">
    <tbody>
    <tr>
        <td align="center">
            <!--            Inner Table-->
            <div style="width: 80%; text-align: right; margin-top: 10px;">
                <a class="btn btn-warning" href="index.php" >
                    <i class="fas fa-backspace"></i> Back
                </a>
                <h1></h1>
            </div>
            <form action="login.php" method="post" style="margin-top: 10px; margin-bottom: 10px;">

                <table >
                    <tr>
                        <td align="center">
                            เข้าสู่ระบบ
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">ชื่อล็อกอิน</span>
                                </div>
                                <input required name="login" type="text" class="form-control"
                                       aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>

                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">รหัสผ่าน</span>
                                </div>
                                <input required name="password" type="password" class="form-control"
                                       aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>

                        </td>
                    <tr>
                        <td colspan="2">
                            <div class="form-check">
                                <input required class="form-check-input" value="1" type="radio" name="user_status" id="exampleRadios1"
                                       value="option1">
                                <label class="form-check-label" for="user_status">
                                    ครูอาจารย์
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" value="0" type="radio" name="user_status" id="exampleRadios2"
                                       value="option2">
                                <label class="form-check-label" for="user_status">
                                    ผู้ดูเเลระบบ
                                </label>
                            </div>
                            <br>
                            <div align="center">
                                <button type="submit" class="btn btn-primary"> <i class="fas fa-share-square"></i> เข้าสู่ระบบ</button>
                                <button type="reset" class="btn btn-secondary"> <i class="fas fa-ban"></i> ยกเลิก</button>
                            </div>
                            <br>
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

