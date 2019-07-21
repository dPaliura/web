<?php
require 'php/headerPHP.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="icon" href="totoro.png">
	<link rel="stylesheet" type="text/css" href="styles/site-header.css">
  <link rel="stylesheet" type="text/css" href="styles/BtnTop.css">
  <link rel="stylesheet" type="text/css" href="styles/footer.css">
  <link rel="stylesheet" type="text/css" href="styles/media.css">
  <link rel="stylesheet" type="text/css" href="styles/biography.css">
  <link rel="stylesheet" type="text/css" href="styles/Comments.css">
  <link rel="stylesheet" type="text/css" href="styles/Form.css">
  <script type="text/javascript" src="js/d3/d3.js"></script>
  <script type="text/javascript" src="js/Comments.js"></script>
	<title>Медиа</title>
</head>
<body>

</body>
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
    <h1>Здесь представлены различные тематические фотографии и картинки</h1>
    <div id='mediaBody'>
      <div>
        <h3>Хаяо Миядзаки</h3>
        <div class="photoHolder">
          <img src='medias/MIYAZAKI/1.jpg'>
          <img src='medias/MIYAZAKI/2.jpg'>
          <img src='medias/MIYAZAKI/3.jpg'>
          <img src='medias/MIYAZAKI/4.png'>
          <img src='medias/MIYAZAKI/5.jpg'>
          <img src='medias/MIYAZAKI/6.jpg'>
          <img src='medias/MIYAZAKI/7.jpg'>
          <img src='medias/MIYAZAKI/8.jpg'>
        </div>
      </div>
      <div>
        <h3>Творчество</h3>
        <div class="photoHolder">
          <img src='medias/GHIBLI/1.jpg'>
          <img src='medias/GHIBLI/2.jpg'>
          <img src='medias/GHIBLI/3.jpg'>
          <img src='medias/GHIBLI/4.gif'>
          <img src='medias/GHIBLI/5.jpg'>
          <img src='medias/GHIBLI/6.jpg'>
          <img src='medias/GHIBLI/7.jpg'>
          <img src='medias/GHIBLI/8.jpg'>
          <img src='medias/GHIBLI/9.jpg'>
          <img src='medias/GHIBLI/10.jpg'>
          <img src='medias/GHIBLI/11.jpg'>
          <img src='medias/GHIBLI/12.jpg'>
          <img src='medias/GHIBLI/13.jpg'>
          <img src='medias/GHIBLI/14.gif'>
        </div>
      </div>
    </div>
    <div id='commentaries'>
        <div id='comments' <?php echo 'onclick = "'.'goajax1(\''.(isset($cockies['login']) ? $cockies['login'] : '').'\')"'?> class="AjaxButton">Комментарии</div>
    </div>
  	</main>
    
    <script type="text/javascript" src="js/photoScale.js"></script>
    <footer>
        <ul class="menu">
          <li class="active"><a href="index.php">Главная</a></li>
          <li class="active"><a href="biography.php">Биография Миядзаки</a></li>
          <li class="active"><a href="studio.php">Про студию Ghibli</a></li>
          <li class="chosen">Медиа</li>
          <li class="active"><a href="filmography.php">Фильмография</a></li>
          <li class="active"><a href="contacts.php">Личный кабинет</a></li>
        </ul> 
    </footer>
    <div id="scrollToTop" onclick="goUp()"><div class="left">)</div><div class="right">(</div></div>
    <script type="text/javascript" src="js/ScrollBtn.js"></script>
</body>
</html>