<?php
session_start();

if(!isset($_sission['usuario'])){
    header("Location: index.php");
}
?>


<!DOCTYPE html>
<html>

<head>
    <?php
    session_start();
    require_once('view/head.php');
    ?>
</head>

<body>
    <?php require_once('view/nav.php'); ?>
Bem Vindo: <?php echo $_SESSION['usuario']; ?>
</body>

</html>