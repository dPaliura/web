<?php
$cockies = $_COOKIE;
if (isset($cockies['login'])){
   	$message = '<div class="userSet"><div>Здравствуй, <a href="contacts.php">'.$cockies['login'].'</a> !</div></div>';
}
else{
 	$message = "<div class='userSet'><div>Вы не авторизованы</div><br><a href='authorization.php'>Вход</a><br><a href='register.php'>Регистрация</a></div>";
}
?>