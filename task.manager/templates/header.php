<?php 
  include  $_SERVER['DOCUMENT_ROOT'] . '/task.manager/includes/const.php';
  include $_SERVER['DOCUMENT_ROOT'] . '/task.manager/includes/main_menu.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="<?= $ROOT . '/styles.css'?>" rel="stylesheet">
    <title>Project - ведение списков</title>
</head>

<body>

    <div class="header">
    	<div class="logo"><img src="<?=$ROOT . '/i/logo.png' ?>" width="68" height="23" alt="Project"></div>
        <div class="clearfix"></div>
    </div>

    <div class="clear">
        <ul class="main-menu">
          <?= showMenu($headerMenuArr) ?>
        </ul>
    </div>

