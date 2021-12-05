<?php
session_start();
include 'connect.php';

$d_id = $_GET['d_id'];
$sql = "DELETE FROM department WHERE d_id = '$d_id'";
mysql_query( $sql,$conn);
mysql_close($conn);

$_SESSION['alert_message'] = "🎉🎉 Delete Department success.";
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
        window.location = "showdept.php";
    })
</script>
</body>
</html>