<?php
session_start();
include_once 'exec_php_from_github.php';
?>

<!DOCTYPE html>
<html lang="hu">

<?php eval_php_from_git('https://raw.githubusercontent.com/3liliom/3liliom.github.io/main/root-php/3liliom_front.php'); ?>

</html>
