<?php
include 'connect.php';

    $d_id = $_GET['d_id'];
    $sql = "SELECT * FROM department WHERE d_id = '$d_id' ";
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
                <a class="btn btn-warning" href="../showdept.php" >
                    <i class="fas fa-backspace"></i> Back
                </a>
                <h1></h1>
            </div>
            <form action="#" method="post" style="margin-top: 10px; margin-bottom: 10px;">

                <table >
                    <tr>
                    <tr>
                        <td align="center">
                            Delete Department
                        </td>
                    </tr>
                    <td colspan="2">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Department Name</span>
                            </div>
                            <input disabled="disabled" name="d_name" id="d_name" value="<?php echo "$rs[d_name]";?>"
                                   type="text" class="form-control" placeholder="Department name"
                                   aria-label="Department name" aria-describedby="basic-addon1">
                        </div>
                    </td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center">
                            <input class="btn btn-success" type="submit" value="Save">
                            <input class="btn btn-danger" type="reset" value="Cancel">
                        </td>
                    </tr>
                </table>
                <input name="d_id" type="hidden" id="d_id" value="<?php echo "$rs[d_id]";?>" >
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

