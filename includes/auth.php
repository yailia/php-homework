<?php

$display = '';
$wrongPass = '';
$wrongLogin = '';
$login = 'admin';
$password = 'admin';
$loginMsg = '';


if (isset($_GET['login']) && $_GET['login'] === 'yes') {
    $display = 'display-tCell';
} else {
    $display = '';
}

if (isset($_POST['login']) || isset($_POST['password'])) {
    if ($_POST["login"] === $login && $_POST["password"] === $password) {
        $loginMsg = $succsessMsg;
    } else {
        $wrongLogin = $_POST['login'];
        $wrongPass = $_POST['password'];
        $loginMsg = "Неверный логин или пароль";
    }
}