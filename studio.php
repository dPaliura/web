<?php
require 'php/headerPHP.php';
?>
<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8"/>
	<link rel="icon" href="totoro.png">
	<link rel="stylesheet" type="text/css" href="styles/site-header.css">
	<link rel="stylesheet" type="text/css" href="styles/biography.css">
	<link rel="stylesheet" type="text/css" href="styles/BtnTop.css">
	<link rel="stylesheet" type="text/css" href="styles/footer.css"><link rel="stylesheet" type="text/css" href="styles/Comments.css">
  <link rel="stylesheet" type="text/css" href="styles/Form.css">
  <script type="text/javascript" src="js/d3/d3.js"></script>
  <script type="text/javascript" src="js/Comments.js"></script>
	<title>Студия Ghibli</title>
  </head>
  <body>
<header>
  		<div class='outer'>
      <div class="naming"><a href="index.php">Студия Миядзаки</a></div>
      <div class='inner'>
      <?php echo $message;?>
      <div class="signature"><i>Сайт посвящен творчеству<br>великого Хаяо Миядзаки</i></div>
      </div>
      </div>
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
    <h2>Заголовок</h2>
    <div class="img-R">
      <p>«Студия Гибли» фактически появилась в 1983 году, при создании фильма «Навсикая из долины Ветров», созданного по мотивам одноимённой манги.В отличие от других студий, в основном занимающихся производством телевизионных сериалов и OVA, эта студия создавалась только для производства высококачественных полнометражных фильмов, что в условиях острой конкуренции на рынке Японии рискованно: если проект провалится, то фирма сразу обанкротится. Чтобы свести риск к минимуму, служащие нанимались на неполную ставку. Фраза «Вдохнём свежее дыхание в мир японской анимации!» стала девизом студии.<br><br>
      Основной костяк студии составили сотрудники студии Topcraft, нанятой Миядзаки и Такахатой для создания «Навсикаи из Долины Ветров». Президент Topcraft Тору Хара до 1991 года был президентом «Студии Гибли». Тем не менее «Studio Ghibli» оставалась студией двух режиссёров.</p>
      <div class="img">
        <img src="medias/2.jpg" wigth='550px' height='300px'>
        <i>Логотип компании Studio Ghibli</i>
        <img class="marg100" src="medias/9.jpg" width="550" height="325">
        <i>Кадр из фильма "Небесный замок Лапута" (1986)</i>
      </div>
    </div>
    <div>
      <p>Миядзаки создал большое количество фильмов, среди которых — «Мой сосед Тоторо» (1988), «Принцесса Мононокэ» (1997), «Унесённые призраками» (2001), «Рыбка Поньо на утёсе» (2008). Работы Такахаты включают «Могилу светлячков» (1988), «Мои соседи Ямада» (1999). Кроме того, он продюсировал другие ленты. Помимо работ Миядзаки и Такахаты, следует отметить полнометражные фильмы Ёсифуми Кондо «Шёпот сердца» (1995), Томоми Мотидзуки «Волны океана» (1993), известный в США под названием «I Can Hear the Sea», а также Хироюки Мориту и его фильм «Возвращение кота» (2002).</p>
    </div>
    <div class="img-Center">
      <p></p>
        <img src="medias/1.jpg" wigth='1000px' height='400px'>
        <i>Фотография Натальи Хлюстовой</i>
    </div>
    
    <div class="img-R marg80">
      <p class="marg60">Широкую известность студии принесли фильм «Мой сосед Тоторо» и «Могила светлячков» 1988 года. Благодаря популярности персонажа Тоторо и продаже товаров под этой маркой студия смогла покрыть затраты на производство новых лент, а Тоторо был выбран в качестве логотипа компании.</p>
      <div class="img">
        <img src="medias/6.jpg" wigth='550px' height='297px'>
        <i>Кадр из фильма "Унесенные призраками" (2001)</i>
      </div>
    </div>
    <div class="img-L marg60">
      <p>В 2014 году инсайдер на японском сайте News Cafe сообщил, что «Воспоминания Марни» станет последней работой студии и она готовится распустить свой штат. Главный менеджер Ghibli, Тосио Судзуки, заявил, что студии «нужна передышка», поэтому она приостанавливает работу над полнометражными фильмами. Журналисты видели причину кризиса в уходе Миядзаки и других ключевых сотрудников, основавших компанию, на пенсию. Впрочем, как торговая марка, Ghibli скорее всего продолжит существование. Однако Хаяо Миядзаки решил продолжать выпускать полнометражные фильмы.<br><br><br>
      28 ноября 2017 года Кодзи Хосино ушел с поста президента; его заменил Киёфуми Накадзима (бывший директор музея Гибли). Тогда Хосино был назначен председателем студии Ghibli.</p>
      <div class="img">
        <img src="medias/7.jpg" wigth='550px' height='293px'>
        <i>Кадр из фильма "Ветер крепчает" (2013)</i>
        <img class="marg60" src="medias/4.jpg" wigth='550px' height='345px'>
        <i>Кадр из фильма "Воспоминания Марни" (2014)</i>
      </div>
    </div>
    <div class="ending">
      <h2>Далее я предлагаю ознакомиться с творчествои студии Гибли:<br><br><a href="filmography.php" >Фильмография</a><a href="media.php" style="margin-left: 130px">Медиаданные</a></h2>
    </div>
    <div class="img-Center marg80">
        <img src="medias/3.jpg" wigth='1000px' height='440px'>
        <i>Кадр из фильма "Рыбка Поньо на утёсе" (2008)</i>
    </div>
    <div id='commentaries'>
        <div id='comments' <?php echo 'onclick = "'.'goajax1(\''.(isset($cockies['login']) ? $cockies['login'] : '').'\')"'?> class="AjaxButton">Комментарии</div>
    </div>
    </main>
  	<footer>
        <ul class="menu">
          <li class="active"><a href="index.php">Главная</a></li>
          <li class="active"><a href="biography.php">Биография Миядзаки</a></li>
          <li class="chosen">Про студию Ghibli</li>
          <li class="active"><a href="media.php">Медиа</a></li>
          <li class="active"><a href="filmography.php">Фильмография</a></li>
          <li class="active"><a href="contacts.php">Личный кабинет</a></li>
        </ul> 
    </footer>
  	<div id="scrollToTop" onclick="goUp()"><div class="left">)</div><div class="right">(</div></div>
  	<script type="text/javascript" src="js/ScrollBtn.js"></script>
  </body>
</html>