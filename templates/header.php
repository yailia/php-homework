<?php 
  include $_SERVER['DOCUMENT_ROOT'] . './includes/const.php';
  include $_SERVER['DOCUMENT_ROOT'] . './includes/main_menu.php';
  include $_SERVER['DOCUMENT_ROOT'] . './includes/success.php';
  include $_SERVER['DOCUMENT_ROOT'] . './includes/auth.php';
  include $_SERVER['DOCUMENT_ROOT'] . './includes/functions.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="/styles.css" rel="stylesheet">
    <title>Project - ведение списков</title>
</head>

<body>

    <div class="header">
    	<div class="logo"><img src="/i/logo.png" width="68" height="23" alt="Project"></div>
        <div class="clearfix"></div>
    </div>

    <div class="clear">
        <? showMenu($menuArr) ?>
    </div>

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
    	<tbody><tr>
        	<td class="left-collum-index">
          <h1><?= getHeader($menuArr) ?></h1>
