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
  <link rel="stylesheet" type="text/css" href="styles/footer.css">
  <link rel="stylesheet" type="text/css" href="styles/Comments.css">
  <link rel="stylesheet" type="text/css" href="styles/Form.css">
  <script type="text/javascript" src="js/d3/d3.js"></script>
  <script type="text/javascript" src="js/Comments.js"></script>
	<title>Жизнь Хаяо Миядзаки</title>
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
  		<div class="img-L">
  			<p>В детстве будущий классик и не мечтал стать аниматором. Несмотря на тяжелое военное время, семья его жила относительно нормально: дядя был владельцем, а отец — директором целого авиационного завода. Огромные летающие вундервафли завораживали Миядзаки, он очень часто рисовал их. Но сами ужасы войны не коснулись семьи будущего аниматора, его мать несколько лет была обладательницей туберкулеза. Бурный рост популярности японских комиксов-манга пришелся на школьные годы Хаяо Миядзаки.
  			</p>
  			<div class="img">
  				<img id="img1" src="medias/miyazakk.png">
  				<i>Description</i>
  			</div>
  		</div>
  		<div class="img-R">
  			<p>
  			Поначалу он тоже хотел рисовать комиксы, но таки быстро понял, что анима ему ближе, когда увидел Hakuja Den — первый цветной полнометражный мультфильм. Чтобы стать аниматором, Хаяо пришлось самоучкой научиться вырезать рисовать людей, ведь раньше он имел дело только с самолетами и военными кораблями. Однако при этом его высшее образование не имело ничего общего с мультфильмами: он окончил престижный токийский университет политологом-экономистом, где лишь состоял в клубе по изучению детской литературы — в те времена оно было ближе всего к клубу аниме и манги. </p>
  			<div class="img">
  				<img id="img2" src="medias/miyazaki-yung.jpg">
  				<i>Description</i>
  			</div>
  		</div>
  		<div class="img-R">
  			<p>
  			Кстати, именно в Гакусюине он невозбранно увлёкся идеями марксизма-ленинизма, но даже это помочь ему в созданий анимаций, как ни странно, никак не смогло. А жаль.
  			Поэтому, закончив образование в 1963 году, Хаяо пошел работать на ту самую студию Toei Animation, где после трех месяцев обучения стал заниматься рисовкой промежуточных кадров. Первым фильмом, над которым Миядзаки довелось работать, был «Wan Wan Chuushingura». Следующей его поделкой стал первый телесериал студии «Ookami Shonen Ken».
  			</p>
  			<div class="img">
  				<img id="img3" src="medias/miyazaki-yung2.jpg">
  				<i>Description</i>
  			</div>
  		</div>
  		<div>
  			<p>1964 год принес Миядзаки два судьбоносых знакомства: он встретил художницу-аниматора Акеми Оту, будущую жену, а с молодым режиссёром Исао Такахатой его объединило общее дело: Миядзаки стал секретарем Профсоюза аниматоров, где Такахата уже был замом председателя. Через 4 года вышла их первая совместная работа — полнометражный «Taiyou no Ouji: Horusu no Daibouken». Фильм снискал немалую популярность, выгодно отличаясь от картин того времени серьезным сюжетом и глубоким социальным подтекстом. Однако руководству студии фильм о храбром мальчике, освобождающем родной край от прихвостней злого демона, понравился куда меньше. Ребяткам стало тесно в рамках развлекательного кино, и вскоре они свалили на студию A Pro. Но перед этим Миядзаки поработал ведущим аниматором двух хитов международного кинопроката: Sora Tobu Yureisen и Nagagutsu wo Haita Neko.</p>
  		</div>
  		<div class="img-Center">
  			<img src="medias/howls-castle.jpg" id="img4">
  			<i>Description</i>
  		</div>
  		<div>
  			<p>В 1973 году друзья перешли на студию Zuiyo Enterprise, где участвовали в создании телесериалов по мотивам классической зарубежной литературы — Sekai Meisaku Gekijou. Миядзаки стал аниматором шести первых сериалов цикла.</p>
  		</div>
  		<div class="img-L">
  			<p>К 1978 году начался показ сериала Mirai Shounen Conan, где начинают прослеживаются основные темы будущих работ Миядзаки: постапокалиптический мир, причудливые летательные аппараты, маленькая, но храбрая главная героиня и спешащий ей на выручку герой.<br><br>
  			В 1984 году вышло полнометражное продолжение Конана — Mirai Shounen Conan Tokubetsu Hen-Kyodaiki Gigant no Fukkatsu. Последней телевизионной работой Хаяо стал сериал «Meitantei Holmes», в котором герои Конан Дойля изображены в виде Canis erectus.</p>
  			<div class="img">
  				<img src="medias/toto.gif" id="img5">
  				<i>Description</i>
  			</div>
  		</div>
  		<div>
  			<p>Но еще в 1982 году начался выпуск первой манги Хаяо Миядзаки: Kaze no Tani no Nausicaa (именем главная героиня обязана древнегреческой Ναυσῐκάα). Экологический роман в картинках стал популярен, и вскоре издатели решили снять фильм по его мотивам, что в итоге вылилось в экологическое одноимённое аниме и студию Ghibli. Побочным продуктом стал Дзё Хисаиси — музыкой к Навсикае он как добавил тонны ви́на к фильму, так и популяризовал сам себя. Теперь он известнейший японский композитор, а в знак благодарности написал музыку ко всем дальнейшим произведениям Миядзаки.</p>
  		</div>
  		<div class="img-Center">
  			<img src="medias/miyazaki-draw.jpg" id="img6">
  			<i>Description</i>
  		</div>
		<div class="ending">
  			<h1>Идем далее?</h1>
  			<h2>Конечно! <a href="studio.php">В студию!</a></h2>
  		</div>
  		<div class="img-Center">
  			<i id="last-margin">Нажимай на героев, изображенных на картинке, чтобы узнать из какого они мультфильма.</i>
  			<img src="medias/linkmap.jpg" id="img7" usemap="#mymap" widht="550px" height="414px">
  			<map name="mymap">
  				<area shape="poly" coords="104 599 89 651 68 676 90 711 135 714 169 682 169 653 123 616 110 615" href="https://ru.wikipedia.org/wiki/%D0%A5%D0%BE%D0%B4%D1%8F%D1%87%D0%B8%D0%B9_%D0%B7%D0%B0%D0%BC%D0%BE%D0%BA_(%D0%B0%D0%BD%D0%B8%D0%BC%D0%B5)">
  				<area shape="poly" coords="599 771 554 732 528 699 519 647 543 616 521 604 479 571 453 572 445 550 479 517 463 506 463 480 478 462 495 482 505 469 509 438 494 430 533 405 580 378 628 375 669 412 697 465 693 480 696 496 716 525 718 548 725 559 760 586 777 609 757 636 732 642 761 660 789 659 857 707 900 755 795 729 721 678 700 651 698 675 709 700 699 720 661 701 632 719 655 771" href="https://ru.wikipedia.org/wiki/%D0%9F%D1%80%D0%B8%D0%BD%D1%86%D0%B5%D1%81%D1%81%D0%B0_%D0%9C%D0%BE%D0%BD%D0%BE%D0%BD%D0%BE%D0%BA%D0%B5">
  				<area shape="poly" coords="895 745 920 712 912 668 890 646 979 509 987 448 970 367 930 338 905 351 887 372 826 311 781 161 761 138 739 168 734 226 681 177 720 109 717 67 694 39 637 91 603 74 558 109 541 153 559 188 506 168 524 210 452 268 392 328 334 355 309 366 290 362 291 349 285 328 341 246 345 153 431 124 378 126 236 188 238 204 203 215 129 273 133 376 101 412 43 387 74 446 71 483 62 499 94 535 50 593 79 603 150 545 206 504 150 606 172 619 240 562 267 522 257 482 314 444 332 380 338 367 386 380 412 413 408 364 423 331 458 323 487 343 504 394 491 402 506 421 533 405 580 378 628 375 669 412 697 465 693 480 696 496 716 525 718 548 725 559 760 586 777 609 757 636 732 642 761 660 789 659 857 707 900 755 795 729 721 678 700 651 698 675 709 700 699 720 661 701 632 719 655 771" href="https://ru.wikipedia.org/wiki/%D0%9C%D0%BE%D0%B9_%D1%81%D0%BE%D1%81%D0%B5%D0%B4_%D0%A2%D0%BE%D1%82%D0%BE%D1%80%D0%BE">
  				<area shape="poly" coords="807 249 828 311 879 355 888 219 871 205 854 207" href="https://ru.wikipedia.org/wiki/%D0%A3%D0%BD%D0%B5%D1%81%D1%91%D0%BD%D0%BD%D1%8B%D0%B5_%D0%BF%D1%80%D0%B8%D0%B7%D1%80%D0%B0%D0%BA%D0%B0%D0%BC%D0%B8">
  				<area shape="poly" coords="766 133 762 117 776 119 793 137 790 129 792 114 814 119 814 106 834 92 822 74 830 61 840 47 857 43 873 29 892 42 900 73 916 66 926 74 925 93 929 102 945 100 969 110 985 127 977 156 948 179 911 184 907 204 880 211 842 203 838 197 823 202 791 196 803 183 781 169" href="https://ru.wikipedia.org/wiki/%D0%9F%D0%BE%D1%80%D0%BA%D0%BE_%D0%A0%D0%BE%D1%81%D1%81%D0%BE">
  				<area shape="poly" coords="109 130 108 83 123 85 129 100 142 89 160 82 147 63 182 27 191 48 203 31 215 44 204 82 186 95 191 100 190 131 185 141 196 135 209 150 219 149 246 170 233 204 194 215 156 184 148 211 125 252 103 234 107 229 126 231 144 170 138 157 113 164 101 178 51 201 30 186 31 169 56 182 99 156 86 147 88 132 67 117 74 109" href="https://ru.wikipedia.org/wiki/%D0%92%D0%B5%D0%B4%D1%8C%D0%BC%D0%B8%D0%BD%D0%B0_%D1%81%D0%BB%D1%83%D0%B6%D0%B1%D0%B0_%D0%B4%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%BA%D0%B8">
  				<area shape="poly" coords="110 405 125 386 116 377 124 358 132 353 126 338 107 338 110 325 117 314 103 313 94 296 100 284 95 275 88 284 90 294 70 305 83 322 75 335 92 344 85 356 74 358 63 373 71 394 81 389 77 377 88 374 92 391 92 410" href="https://ru.wikipedia.org/wiki/%D0%A5%D0%BE%D0%B4%D1%8F%D1%87%D0%B8%D0%B9_%D0%B7%D0%B0%D0%BC%D0%BE%D0%BA_(%D0%B0%D0%BD%D0%B8%D0%BC%D0%B5)">
  			</map>
  		</div>
      <div id='commentaries'>
        <div id='comments' <?php echo 'onclick = "'.'goajax1(\''.(isset($cockies['login']) ? $cockies['login'] : '').'\')"'?> class="AjaxButton">Комментарии</div>
      </div>
  	</main>
    <footer>
        <ul class="menu">
          <li class="active"><a href="index.php">Главная</a></li>
          <li class="chosen">Биография Миядзаки</li>
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