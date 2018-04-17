<?php
require_once('functions.php');
require_once('../inc/database.php');
delete($_GET['id']);

  header('location: index.php');
?>
