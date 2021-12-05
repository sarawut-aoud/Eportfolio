
<?php
session_start();
include 'connect.php';
include "alert.php";

$c_id = $_GET['c_id'];
$sql = "DELETE FROM classroom WHERE c_id = '$c_id'";
mysql_query($sql,$conn)
or die("3. ไม่สามารถประมวลคำสั่งได้").mysql_error();
mysql_close();
echo success_h3("ลบข้อมูลเรียบร้อยเเล้ว","showclass.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include "script.php";
    ?>
</head>
<body>
<script>
    Swal.fire({
        title: 'Delete Complete',
        text: '😀',
        icon: 'success',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok'
    }).then(() => {
        window.location = "showclass.php";
    })
</script>
</body>
</html>