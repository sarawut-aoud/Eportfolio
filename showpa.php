<?php
    include 'connect.php';
include 'check.php';
    $sql = "SELECT * FROM parent ";
    $result = mysql_query($sql,$conn)
        or die ("ไม่สามารถประมวลผลคำสั่งได้").mysql_error();
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> EPORTFOLIO-TAR </title>
        <?php
        include 'script.php';
        ?>
    </head>
    <body>
    <?php
    include './h/admin_menu.php'
    ?>
    <table class="table table-striped" align="center" style="width: 100%; height: 150px">
        <tbody>

        <tr>
            <td align="center">

                <p>&nbsp;</p>

                <div style=" width: 80%;height: 0%;text-align: left">
                    Parent
                </div>
                <div style=" width: 80%;height:10%;text-align: right">
                    <a class="btn btn-success" href="frm_addpa.php">
                        <i class="fas fa-plus-square"></i> Add
                    </a>

                </div>

                <!--            Inner Table-->
                <div align="center" style="width: 80%">
                    <table id="example" width="100%" style="margin-top: 10px; margin-bottom: 10px">
                        <thead align="center">
                        <tr>
                            <th awidth="15%">Parent ID</th>
                            <th width="25%">Parent Name</th>
                            <th width="20%">Occupation</th>
                            <th width="20%">Phone</th>
                            <th width="20%"></th>
                        </tr>
                        </thead>

                        <tbody>

                        <?php
                        while ($rs = mysql_fetch_object($result)) {
                            ?>
                            <tr>
                                <td align="center"><?php echo "$rs->pa_id";?></td>
                                <td align="center"><?php echo "$rs->pa_name";?></td>
                                <td align="center"><?php echo "$rs->pa_occupation";?></td>
                                <td align="center"><?php echo "$rs->pa_tel";?></td>
                                <!--<td align="center">
                                    <a href="frm_addclassdetail.php?c_id=<?php /*echo $rs->t_id;*/?>">
                                        จัดการหัวหน้าชั้นเรียน
                                    </a>
                                </td>-->
                                <td align="center">
                                    <a class="btn btn-warning" href="frm_editpa.php?pa_id=<?php echo $rs->pa_id;?>">
                                        <i class="fas fa-pen"></i> Edit
                                    </a>
                                    <a class="btn btn-danger" href="frm_delpa.php?pa_id=<?php echo $rs->pa_id;?>">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                    <input hidden="pa_id" type="hidden" name="pa_id" value="<?php echo "$rs[pa_id]"?>">

                </div>

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
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });

    </script>
    </body>
    </html>

<?php
mysql_close($conn);
