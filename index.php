<?php
session_start();
include_once 'exec_php_from_github.php';
$root_php = 'https://raw.githubusercontent.com/3liliom/3liliom.github.io/main/root-php/';
?>

<!DOCTYPE html>
<html lang="hu">

<?php eval_php_from_git($root_php . '3liliom_front.php'); ?>

</html>
