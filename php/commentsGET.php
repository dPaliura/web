<?php
	$form = "
<form><textarea id='textarea' name='comment' rows='5' cols='80'></textarea>
<div class='confirm' onclick='send_comment(LOGIN)'>Отправить</div></form>";
	require 'db.php';
	$cookie = $_COOKIE;
	if(isset($cookie['login'])){
		$user = R::find('users', 'login = ?', array($cookie['login']));
		$user = array_shift($user);
		$status = $user['status'];
		if ($status == 12){
			$SendButtonCode = 'Вы не можете оставить комментарий, поскольку вас забанили.';
		}
		else{
			$SendButtonCode = $form;
		}
	}
	else{
		$SendButtonCode = '<a href="contacts.php">Только зарегистрированные пользователи могут оставлять комментарии.</a>';
	}
	$commentaries = file_get_contents("commentaries.txt");
	echo '<div id="rolling"><div id="commentsWindow">'.$commentaries.'</div><div class="CommentsMessage">'.$SendButtonCode.'</div></div>';
?>