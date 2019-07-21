<?php
require "db.php";
$cockies = $_COOKIE;
if (isset($cockies['login'])){
    $user = R::find('users', 'login = ?', array($cockies['login']));
    if ($user){
        $user = array_shift($user);
        if ($user->status == 2){
            $pretext = "<h2>Здравствуй, мой Покровитель. Низкий тебе поклон.</h2>";
        }
        elseif($user->status == 12){
            $pretext = '<h4>Ну ты дядя, как так-то, а? Че ж ты такое бесовское делал, что тебя на кичу посадили?</h4>';
        }
        else{
            $pretext = "<h2>Добро пожаловать в личный кабинет, ".$user->login;
        }
    $text = $pretext."</h2><br><br><p>
Здесь хранятся ваши регистрационные данные и пользовательские настройки (в будущем может и будут)<br><br>
<b>Имя:</b> ".(trim($user->first_name)?$user->first_name:'не указано')."<br><b>Фамилия: </b>".(trim($user->last_name)?$user->last_name:'не 
указано')."<br><b>Пол: </b>".(!$user->sex?'женский':($user->sex==1?'мужской':'не указан'))."<br><b>Дата рождения: 
</b>".($user->birthdate == '0000-00-00' ? 'Не указано' : $user->birthdate)."<br><br><b>Место проживания</b><br><b>Страна:</b> ".($user->country==''?'не указано':$user->country)."<br><b>Город:</b> ".($user->city==''?'не указано':$user->city)."<br><br><b>Регистрационные данные</b><br><b>Логин:</b> ".$user->login."<br><b>E-mail:</b> ".$user->email."<div class='logout'><a href='logout.php'>Выйти</a></div>";
    }
    else{
        $text = "В ваших данных cookies отмечено, что вы авторизованы, но ваших данных<br>
нет в нашей базе данных. Вы можете авторизоваться или зарегестрироваться, тогда<br>
ваши данные cookies будут переписаны.
<div class='choo el'>
<div class='log'><a href='authorization.php'>Авторизация</a></div>
<div class='reg'><a href='register.php'>Регистрация</a></div>
</div>";
    }
}
else{
    $text = "<p>Если вы уже зарегистрированы, то здесь вы можете войти в свой личный кабинет.<br>
Для зарегестрированных пользователей (будут) доступны комментарии на страничках,<br>
а так же вы сможете скачать торрент любого из мультфильмов в хорошем качестве.</p>
<div class='choo el'>
<div class='log'><a href='authorization.php'>Авторизация</a></div>
<div class='reg'><a href='register.php'>Регистрация</a></div>
</div>";
}



?>


<!DOCTYPE html>


<html>
<head>
  <meta charset="utf-8"/>
  <link rel="icon" href="totoro.png">
  <link rel="stylesheet" type="text/css" href="styles/site-header.css">
  <link rel="stylesheet" type="text/css" href="styles/footer.css">
  <link rel="stylesheet" type="text/css" href="styles/BtnTop.css">
  <link rel="stylesheet" type="text/css" href="styles/contacts.css">
  <title>Оставить отзыв</title>
</head>
<body>
<header>
      <div class="naming">
      <a href="index.php">Студия Миядзаки</a></div>
      <div class="signature"><i>Сайт посвящен творчеству<br>великого Хаяо Миядзаки</i></div>
      <nav>
        <ul class="menu">
          <li><a class="bio" href="biography.php"></a></li>
          <li><a class="studio" href="studio.php"></a></li>
          <li><a class="media" href="media.php"></a></li>
          <li><a class="film" href="filmography.php"></a></li>
          <li><a class="contacts" href="contacts.php"></a></li>
        </ul>
      </nav>
    </header>


    <main>
<?php echo $text; ?>
    </main>


    <footer>
        <ul class="menu">
          <li class="active"><a href="index.php">Главная</a></li>
          <li class="active"><a href="biography.php">Биография Миядзаки</a></li>
          <li class="active"><a href="studio.php">Про студию Ghibli</a></li>
          <li class="active"><a href="media.php">Медиа</a></li>
          <li class="active"><a href="filmography.php">Фильмография</a></li>
          <li class="chosen">Личный кабинет</li>
        </ul> 
    </footer>
    <div id="scrollToTop" onclick="goUp()"><div class="left">)</div><div class="right">(</div></div>
    <script type="text/javascript" src="js/ScrollBtn.js"></script>
</body>
</html>