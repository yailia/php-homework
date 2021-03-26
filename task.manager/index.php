<?php
include __DIR__ . '/includes/success.php';

$display = '';
$wrongPass = '';
$wrongLogin = '';
$login = 'admin';
$password = 'admin';
$loginMsg = '';


if ($_GET['login'] === 'yes') {
    $display = 'display-tCell';
} else {
    $display = '';
}

if ( isset($_POST['login']) || isset($_POST['password'])) {
    if ($_POST["login"] === $login && $_POST["password"] === $password) {
        $loginMsg = $succsessMsg;
    } else {
        $wrongLogin = $_POST['login'];
        $wrongPass = $_POST['password'];
        $loginMsg = "Неверный логин или пароль";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="styles.css" rel="stylesheet">
    <title>Project - ведение списков</title>
</head>

<body>

    <div class="header">
    	<div class="logo"><img src="i/logo.png" width="68" height="23" alt="Project"></div>
        <div class="clearfix"></div>
    </div>

    <div class="clear">
        <ul class="main-menu">
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">Новости</a></li>
            <li><a href="#">Каталог</a></li>
            <li><a href="/?login=yes">Войти</a></li>
        </ul>
    </div>

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
    	<tr>
        	<td class="left-collum-index">
			
				<h1>Возможности проекта —</h1>
				<p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с друзьями и просматривать списки друзей.</p>
				
			
			</td>
            <td class="right-collum-index <?= $display ?>">
				
				<div class="project-folders-menu">
					<ul class="project-folders-v">
    					<li class="project-folders-v-active"><a href="#">Авторизация</a></li>
    					<li><a href="#">Регистрация</a></li>
    					<li><a href="#">Забыли пароль?</a></li>
					</ul>
				    <div class="clearfix"></div>
				</div>
                
				<div class="index-auth">
                    <p>
                        <?= $loginMsg ?>
                     </p>
                    <form action="?login=yes" method="POST">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class="iat">
                                    <label for="login_id">Ваш e-mail:</label>
                                    <input id="login_id" size="30" name="login" value="<?= $wrongLogin ?>">
                                </td>
							</tr>
							<tr>
								<td class="iat">
                                    <label for="password_id">Ваш пароль:</label>
                                    <input id="password_id" size="30" name="password" type="password" value="<?= $wrongPass ?>">
                                </td>
							</tr>
							<tr>
								<td><input type="submit" value="Войти"></td>
							</tr>
						</table>
                    </form>
				</div>
			
			</td>
        </tr>
    </table>
    
    <div class="clearfix">
        <ul class="main-menu bottom">
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">Новости</a></li>
            <li><a href="#">Каталог</a></li>
        </ul>
    </div>

    <div class="footer">&copy;&nbsp;<nobr>2018</nobr> Project.</div>

</body>
</html>