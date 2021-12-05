<?php
    include 'connect.php';

    $sql = "SELECT t.t_id,t.t_name,d.d_name FROM teacher t , position po,department d where  t.po_id = po.po_id  and t.d_id=d.d_id ";
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
    include './h/menu.php'
    ?>
    <table class="table table-striped" align="center"  style="width: 100%; height: 150px">
        <tbody>

        <tr >
            <td align="center"  >

                <p>&nbsp;</p>

                        <div style=" width: 80%;height: 0%;text-align: left">
                        ข้อมูลครู - อาจารย์
                        </div>
                        <div style=" width: 80%;height:10%;text-align: right">
                           <!-- <a  class="btn btn-success" href="frm_adddept.php"  >
                            <i class="fas fa-plus-square"></i> Add
                            </a>-->
                        </div>

                <!--            Inner Table-->
                <div align="center" style="width: 80%">
                    <table id="example" width="100%" style="margin-top: 10px; margin-bottom: 10px">
                        <thead align="center">
                        <tr>
                            <th width="15%">Teacher Name</th>
                            <th width="30%">Department</th>
                            <th width="15%"></th>
                            <!--<th width="15%"></th>-->
                            <!--<th width="25%"></th>-->
                        </tr>
                        </thead>

                        <tbody>

                        <?php
                            while ($rs = mysql_fetch_object($result)) {
                        ?>
                            <tr>

                                <td align="center"><?php echo"$rs->t_name";?></td>
                                <td align="center"><?php echo"$rs->d_name";?></td>
                                <td align="center" >
                                    <a href="showteacherdetail.php?t_id=<?php echo $rs->t_id;?>">
                                        รายละเอียด
                                </td>

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
            $('#example').DataTable();
        } );
    </script>
</body>
</html>

<?php
mysql_close($conn);


