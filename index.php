<?php
require 'php/headerPHP.php';
?>
<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<link rel="icon" href="totoro.png">
	<link rel="stylesheet" type="text/css" href="styles/site-header.css">
	<link rel="stylesheet" type="text/css" href="styles/flex-structure.css">
	<link rel="stylesheet" type="text/css" href="styles/BtnTop.css">
	<link rel="stylesheet" type="text/css" href="styles/footer.css">
	<link rel="stylesheet" type="text/css" href="styles/Comments.css">
	<link rel="stylesheet" type="text/css" href="styles/Form.css">
	<script type="text/javascript" src="js/d3/d3.js"></script>
	<script type="text/javascript" src="js/Comments.js"></script>
	<title>Хаяо Миядзаки</title>
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
  		<h1>Добро пожаловать в мир прекрасных мультфильмов!</h1>
  		<div class="P1">
  		<img id="img2" src="medias/miyazaki-main.jpg", alt="Извини, что-то не так с изображением Миядзаки. Сообщи мне об этой ошибке в разделе 'Контакты'">
			<p>
			Возможно тебе доводилось когда-нибудь видеть или хотя бы слышать про<br>
			такие замечательные японские мультфильмы, как «Ходячий замок Хаула», «Унесенные призраками»,<br>
			«Ветер крепчает» или «Мой сосед Тоторо». Все эти шедевры – плод творчества одного японского<br>
			режиссера-аниматора Хаяо Миядзаки (Hayao Miyazaki).<br><br>
			Мультипликации, сделанные в Студии Гибли (studio Ghibli) поражают своей красочностью,<br>
			насыщенным и невообразимым сюжетом и втягивают в просмотр, как детей, так и взрослых.<br>
			Но так же втягивают, как взрослых, так и детей, ведь множество мультфильмов не нацелены<br>
			на некоторую возрастную категорию. Удивительно! Ведь все эти шедевры делались вручную,<br>
			без применения технологий обработки анимации.
			</p>
		</div>
		<i>Миядзаки, которому<br>за 70, выглядит молодо</i>
		<div>
			<img id="img1" src="medias/howls-moving-castle-15.jpg" alt="Перейди в раздел Контакты, чтобы сообщить мне, если изображение в этом месте не отобразилось.">
		</div>
		<i>Кадр из мультфильма<br>"Ходячий Замок Хаула"<br>2004 г.</i>
		<p class="P3">Дорогой друг, если ты не знаком с Миядзаки, то я желаю тебе приятнейшего знакомства и вдохновения. Ведь творчество этого человека действительно вдохновляет каждой картиной. Если ты уже знаком с Хаяо, то я желаю тебе прогуляться по этому саду, где я попытался собрать самое интересное о творчестве Хаяо Миядзаки и самой студии Гибли.</p>
		<h1>С чего же начнем?</h1>
		<div class="ending">
			<h2>Прежде <a href="biography.php">познакомить тебя с Хаяо Миядзаки</a>, или <a href="studio.php">провести в Студию Гибли</a>?</h2>
		</div>
		<div>			
			<a href="biography.php" title="Едем дальше!" target="_self"><img src="medias/catbus.gif" alt="SORRE"></a>
		</div>
		<div id='commentaries'>
	  		<div id='comments' <?php echo 'onclick = "'.'goajax1(\''.(isset($cockies['login']) ? $cockies['login'] : '').'\')"'?> class="AjaxButton">Комментарии</div>
  		</div>
  	</main>
  	<footer>
        <ul class="menu">
          <li class="chosen">Главная</li>
          <li class="active"><a href="biography.php">Биография Миядзаки</a></li>
          <li class="active"><a href="studio.php">Про студию Ghibli</a></li>
          <li class="active"><a href="media.php">Медиа</a></li>
          <li class="active"><a href="filmography.php">Фильмография</a></li>
          <li class="active"><a href="contacts.php">Личный кабинет</a></li>
        </ul> 
    </footer>
  	<div id="scrollToTop" onclick="goUp()"><div class="left">)</div><div class="right">(</div></div>
  	<script type="text/javascript" src="js/ScrollBtn.js"></script>
  </body>
</html>