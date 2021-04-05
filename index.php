<?php
include './templates/header.php';

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
?>
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

<? include './templates/footer.php';