<?php
/**
 * Created by PhpStorm.
 * User: dennis
 * Date: 24-09-18
 * Time: 09:37
 */
?>

<?php
session_start();
session_destroy();
header("location:login.php");
?>
