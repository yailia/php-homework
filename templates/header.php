<?php 
  include './includes/const.php';
  include './includes/main_menu.php';
  $pageItemKey = array_search($URL, array_column($menuArr, 'path') );
  $pageTitle = $menuArr[$pageItemKey]['title'];
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

