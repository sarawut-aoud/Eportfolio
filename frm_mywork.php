
<?php
include 'connect.php';
include "check.php";
$valid_uname = $_SESSION['valid_uname'];
$sql = "SELECT * 
	FROM teacher t, work w , work_detail wd  
	where wd.t_id = t.t_id and wd.w_id = w.w_id and t.t_username = '$valid_uname'";

$result = mysql_query($sql,$conn);
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
    include './h/teacher_menu.php'
    ?>
    <table class="table table-striped" align="center"  style="width: 100%; height: 150px">
        <tbody>
        <tr >
            <td align="center"  >

                <p>&nbsp;</p>

                <div style=" width: 80%;height: 0%;text-align: left">
                    <h2> อาจารย์ <?php $sql2 = "SELECT * 
	                                            FROM teacher t, work w , work_detail wd  
	                                                where wd.t_id = t.t_id and wd.w_id = w.w_id and t.t_username = '$valid_uname'";
                        $result2 = mysql_query($sql2,$conn);
                        $rs2 = mysql_fetch_array($result2);
                        echo "$rs2[t_name]";?> </h2>


                </div>
                <div style=" width: 80%;height:10%;text-align: right">
                    <a  class="btn btn-success" href="frm_addmywork.php"  >
                        <i class="fas fa-plus-square"></i> Add
                    </a>
                </div>

                <!--            Inner Table-->
                <div align="center" style="width: 80%">
                    <table id="example" width="100%" style="margin-top: 10px; margin-bottom: 10px">
                        <thead align="center">
                        <tr>
                            <th width="15%">รหัสงาน</th>
                            <th width="30%">ชื่องาน</th>
                            <th width="15%">ปีการทำงาน</th>
                            <th width="15%">หน่วยงาน</th>
                            <th width="25%"></th>
                        </tr>
                        </thead>

                        <tbody>

                        <?php

                        while ($rs=mysql_fetch_object($result)) {
                            ?>
                            <tr>
                                <td align="center"><?php echo"$rs->w_id";?></td>
                                <td align="center"><?php echo"$rs->w_name";?></td>

                                <td align="center"><?php echo"$rs->w_year";?></td>
                                <td align="center"><?php echo"$rs->w_org";?></td>
                                <td align="center">
                                    <!--<a class="btn btn-warning"  href="frm_editwork.php?w_id=<?php /*echo $rs->w_id;*/?>">
                                        <i class="fas fa-pen"></i> Edit
                                    </a>-->
                                    <a class="btn btn-danger" href="frm_delwork.php?w_id=<?php echo $rs->w_id;?>">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </a>

                            </tr>


                            <?php
                        }
                        ?>

                        </tbody>
                    </table>
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
        $(document).ready(function() {
            $('#example').DataTable()
        } );

    </script>
    </body>
    </html>

<?php
mysql_close($conn);


