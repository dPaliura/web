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
  <link rel="stylesheet" type="text/css" href="styles/filmography.css">
  <link rel="stylesheet" type="text/css" href="styles/Comments.css">
  <link rel="stylesheet" type="text/css" href="styles/Form.css">
  <script type="text/javascript" src="js/d3/d3.js"></script>
  <script type="text/javascript" src="js/Comments.js"></script>
  <script type="text/javascript" src="js/graph.js"></script>
	<title>Фильмография</title>
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
    <h2>Здесь вы можете ознакомиться с фильмами студии Ghibli, а так же скачать любой из низ.<br>Для скачивания необходимо зарегестрироваться!!!</h2>
    <table rules="none">
      <tr>
        <td>Обложка</td>
        <td>Название фильма</td>
        <td>Премьера</td>
        <td>IMDB рейтинг</td>
        <td>torrent</td>
      </tr>
      <tr>
        <td class='ImageCell'><img src='medias/covers/1984.jpg'></td>
        <td>Навсикая из долины ветров</td>
        <td>11 марта 1984</td>
        <td>8.1</td>
        <td><a <?php if (isset($_COOKIE['login'])){ echo 'href="torrents/1984.torrent"'; } else{ echo 'href="/contacts.php"'; }?>>скачать</a></td>
      </tr>

      <tr class='second'>
        <td class='ImageCell'><img src='medias/covers/1986.jpg'></td>
        <td>Небесный замок Лапута</td>
        <td>2 августа 1986</td>
        <td>8.1</td>
        <td><a <?php if (isset($_COOKIE['login'])){ echo 'href="torrents/1986.torrent"'; }
        else{ echo 'href="/contacts.php"'; }?>>скачать</a></td>
      </tr>

      <tr>
        <td class='ImageCell'><img src='medias/covers/1988.jpg'></td>
        <td>Могила светлячков</td>
        <td>16 апреля 1988</td>
        <td>8.5</td>
        <td><a <?php if (isset($_COOKIE['login'])){ echo 'href="torrents/1988.torrent"'; }
        else{ echo 'href="/contacts.php"'; }?>>скачать</a></td>
      </tr>

    <tr class='second'>
        <td class='ImageCell'><img src='medias/covers/1988(totoro).jpg'></td>
        <td>Мой сосед Тоторо</td>
        <td>16 апреля 1988</td>
        <td>8.2</td>
        <td><a <?php if (isset($_COOKIE['login'])){ echo 'href="torrents/1988(totoro).torrent"'; }
        else{ echo 'href="/contacts.php"'; }?>>скачать</a></td>
      </tr>

      <tr>
        <td class='ImageCell'><img src='medias/covers/1989.jpg'></td>
        <td>Ведьмина служба доставки</td>
        <td>29 июля 1989</td>
        <td>8.0</td>
        <td><a <?php if (isset($_COOKIE['login'])){ echo 'href="torrents/1989.torrent"'; }
        else{ echo 'href="/contacts.php"'; }?>>скачать</a></td>
      </tr>

    <tr class='second'>
        <td class='ImageCell'><img src='medias/covers/1991.jpg'></td>
        <td>Ещё вчера</td>
        <td>20 июля 1991</td>
        <td>7.7</td>
        <td><a <?php if (isset($_COOKIE['login'])){ echo 'href="torrents/1991.torrent"'; }
        else{ echo 'href="/contacts.php"'; }?>>скачать</a></td>
      </tr>

      <tr>
        <td class='ImageCell'><img src='medias/covers/1992.jpg'></td>
        <td>Порко Россо</td>
        <td>18 июля 1992</td>
        <td>7.8</td>
        <td><a <?php if (isset($_COOKIE['login'])){ echo 'href="torrents/1992.torrent"'; }
        else{ echo 'href="/contacts.php"'; }?>>скачать</a></td>
      </tr>

    <tr class='second'>
        <td class='ImageCell'><img src='medias/covers/1993.jpg'></td>
        <td>Здесь слышен океан</td>
        <td>3 мая 1993</td>
        <td>6.9</td>
        <td>-</td>
      </tr>

      <tr>
        <td class='ImageCell'><img src='medias/covers/1994.jpg'></td>
        <td>Помпоко: Война тануки</td>
        <td>16 июля 1994</td>
        <td>7.4</td>
        <td><a <?php if (isset($_COOKIE['login'])){ echo 'href="torrents/1994.torrent"'; }
        else{ echo 'href="/contacts.php"'; }?>>скачать</a></td>
      </tr>

      <tr class='second'>
        <td class='ImageCell'><img src='medias/covers/1995.jpg'></td>
        <td>Шёпот сердца</td>
        <td>15 июля 1995</td>
        <td>8.0</td>
        <td><a <?php if (isset($_COOKIE['login'])){ echo 'href="torrents/1995.torrent"'; }
        else{ echo 'href="/contacts.php"'; }?>>скачать</a></td>
      </tr>

       <tr>
        <td class='ImageCell'><img src='medias/covers/1997.jpg'></td>
        <td>Принцесса Мононокэ</td>
        <td>12 июля 1997</td>
        <td>8.4</td>
        <td><a <?php if (isset($_COOKIE['login'])){ echo 'href="torrents/1997.torrent"'; }
        else{ echo 'href="/contacts.php"'; }?>>скачать</a></td>
      </tr>

      <tr class='second'>
        <td class='ImageCell'><img src='medias/covers/1999.jpg'></td>
        <td>Мои соседи Ямада</td>
        <td>17 июля 1999</td>
        <td>7.3</td>
        <td><a <?php if (isset($_COOKIE['login'])){ echo 'href="torrents/1999.torrent"'; }
        else{ echo 'href="/contacts.php"'; }?>>скачать</a></td>
      </tr>

       <tr>
        <td class='ImageCell'><img src='medias/covers/2001.jpg'></td>
        <td>Унесённые призраками</td>
        <td>27 июля 2001</td>
        <td>8.6</td>
        <td><a <?php if (isset($_COOKIE['login'])){ echo 'href="torrents/2001.torrent"'; }
        else{ echo 'href="/contacts.php"'; }?>>скачать</a></td>
      </tr>

      <tr class='second'>
        <td class='ImageCell'><img src='medias/covers/2002.jpg'></td>
        <td>Возвращение кота</td>
        <td>19 июля 2002</td>
        <td>7.3</td>
        <td><a <?php if (isset($_COOKIE['login'])){ echo 'href="torrents/2002.torrent"'; }
        else{ echo 'href="/contacts.php"'; }?>>скачать</a></td>
      </tr>

       <tr>
        <td class='ImageCell'><img src='medias/covers/2004.jpg'></td>
        <td>Ходячий замок Хаула</td>
        <td>20 ноября 2004</td>
        <td>8.2</td>
        <td><a <?php if (isset($_COOKIE['login'])){ echo 'href="torrents/2004.torrent"'; }
        else{ echo 'href="/contacts.php"'; }?>>скачать</a></td>
      </tr>

      <tr class='second'>
        <td class='ImageCell'><img src='medias/covers/2006.jpg'></td>
        <td>Сказания Земноморья</td>
        <td>29 июля 2006</td>
        <td>6.5</td>
        <td><a <?php if (isset($_COOKIE['login'])){ echo 'href="torrents/2006.torrent"'; }
        else{ echo 'href="/contacts.php"'; }?>>скачать</a></td>
      </tr>

       <tr>
        <td class='ImageCell'><img src='medias/covers/2008.jpg'></td>
        <td>Рыбка Поньо на утёсе</td>
        <td>19 июля 2008</td>
        <td>7.7</td>
        <td><a <?php if (isset($_COOKIE['login'])){ echo 'href="torrents/2008.torrent"'; }
        else{ echo 'href="/contacts.php"'; }?>>скачать</a></td>
      </tr>

      <tr class='second'>
        <td class='ImageCell'><img src='medias/covers/2010.jpg'></td>
        <td>Ариэтти из страны лилипутов</td>
        <td>17 июля 2010</td>
        <td>7.7</td>
        <td><a <?php if (isset($_COOKIE['login'])){ echo 'href="torrents/2010.torrent"'; }
        else{ echo 'href="/contacts.php"'; }?>>скачать</a></td>
      </tr>

      <tr>
        <td class='ImageCell'><img src='medias/covers/2011.jpg'></td>
        <td>Со склонов Кокурико</td>
        <td>16 июля 2011</td>
        <td>7.4</td>
        <td><a <?php if (isset($_COOKIE['login'])){ echo 'href="torrents/2011.torrent"'; }
        else{ echo 'href="/contacts.php"'; }?>>скачать</a></td>
      </tr>

      <tr class='second'>
        <td class='ImageCell'><img src='medias/covers/2013.jpg'></td>
        <td>Ветер крепчает</td>
        <td>20 июля 2013</td>
        <td>7.8</td>
        <td><a <?php if (isset($_COOKIE['login'])){ echo 'href="torrents/2013.torrent"'; }
        else{ echo 'href="/contacts.php"'; }?>>скачать</a></td>
      </tr>

       <tr>
        <td class='ImageCell'><img src='medias/covers/2013(kaguya).jpg'></td>
        <td>Сказание о принцессе Кагуя</td>
        <td>23 ноября 2013</td>
        <td>8.1</td>
        <td><a <?php if (isset($_COOKIE['login'])){ echo 'href="torrents/2013(kaguya).torrent"'; }
        else{ echo 'href="/contacts.php"'; }?>>скачать</a></td>
      </tr>

      <tr class='second'>
        <td class='ImageCell'><img src='medias/covers/2014.jpg'></td>
        <td>Воспоминания Марни</td>
        <td>19 июля 2014</td>
        <td>7.8</td>
        <td><a <?php if (isset($_COOKIE['login'])){ echo 'href="torrents/2014.torrent"'; }
        else{ echo 'href="/contacts.php"'; }?>>скачать</a></td>
      </tr>

      <tr>
        <td class='ImageCell'><img src='medias/covers/2016.jpg'></td>
        <td>Красная черепаха</td>
        <td>  18 мая 2016</td>
        <td>7.6</td>
        <td><a <?php if (isset($_COOKIE['login'])){ echo 'href="torrents/2016.torrent"'; }
        else{ echo 'href="/contacts.php"'; }?>>скачать</a></td>
      </tr>




    </table>

    <div id='graph_there'></div>
    <div id='commentaries'>
        <div id='comments' <?php echo 'onclick = "'.'goajax1(\''.(isset($cockies['login']) ? $cockies['login'] : '').'\')"'?> class="AjaxButton">Комментарии</div>
    </div>
  	</main>
  	<footer>
        <ul class="menu">
          <li class="active"><a href="index.php">Главная</a></li>
          <li class="active"><a href="biography.php">Биография Миядзаки</a></li>
          <li class="active"><a href="studio.php">Про студию Ghibli</a></li>
          <li class="active"><a href="media.php">Медиа</a></li>
          <li class="chosen">Фильмография</li>
          <li class="active"><a href="contacts.php">Личный кабинет</a></li>
        </ul> 
    </footer>
    <div id="scrollToTop" onclick="goUp()"><div class="left">)</div><div class="right">(</div></div>
    <script type="text/javascript" src="js/filmography.js"></script>
    <script type="text/javascript" src="js/ScrollBtn.js"></script>
</body>
</html>