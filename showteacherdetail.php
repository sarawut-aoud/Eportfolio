<?php
    include 'connect.php';
    $t_id=$_GET['t_id'];
    $slq = "select t.t_id ,t. t_pic,t.t_name , t.t_address,t.t_tel,t.po_id , t.d_id
        from teacher t  
        inner join position po on  t.po_id = po.po_id
        inner join department d on t.d_id = d.d_id
        where t.t_id = '$t_id'";
    $result1 = mysql_query($slq,$conn)
        or die ("3.Can't Query").mysql_error();
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
            <form  method="post" style="margin-top: 10px; margin-bottom: 10px;">

                <table style="width: 50%; height: 100vh;">
                    <tr>
                        <td colspan="2" align="center">
                           Information Teacher
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
                            <textarea disabled="disabled"  class="form-control"
                                      id="t_address"name="t_address" type="text" rows="3"><?php echo "$rs1[t_address]";?></textarea>
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
                </table>
<?php
    $sql4= "select w.w_id,w.w_name,w.w_year,w.w_org
            from (work_detail wd 
            inner join work w on wd.w_id = w.w_id )
            where wd.t_id = '$t_id'";
            $result4 = mysql_query($sql4,$conn);
?>
                <p></p>
                <p></p>
                <div align="center" style="width: 50%;margin-top: 50px">
                    <table id="example" width="100%" style="margin-top: 10px; margin-bottom: 10px">
                        <thead align="center">
                        <tr>
                            <th awidth="30%">Work Name</th>
                            <th width="35%">Year</th>
                            <th width="35%">Organization</th>
                           <!-- <th width="25%"></th>-->
                            <!--<th width="25%"></th>-->
                        </tr>
                        </thead>

                        <tbody>
<?php
while($rs4 = mysql_fetch_array($result4)){
?>
                            <tr>
                                <td align="center"><?php echo "$rs4[w_name]";?></td>
                                <td align="center"><?php echo "$rs4[w_year]";?></td>
                                <td align="center"><?php echo "$rs4[w_org]";?></td>
                            </tr>
<?php
}
?>
                        </tbody>
                    </table>
                </div>
                <input hidden="w_id" name="w_id" value="<?php echo "$rs4[w_id]";?>">
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
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
</body>
</html>


