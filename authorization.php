<?php
require 'db.php';
$errors = array();
$data = $_POST;
$user;
if (isset($data['do_log_in'])){
    if ($data['login'] == '') {
        $errors[] = 'Вы не ввели логин';
    }
    if ($data['password'] == ''){
        $errors[] = 'Вы не ввели пароль';
    }
    else{
        $user = R::find('users', 'login = ?', array($data['login']));
        if ( $user ){
            $user = array_shift($user);
            $text = password_hash('text', PASSWORD_DEFAULT);
            if ($data['captcha'] != 'OK'){
                $errors[] = 'Неверно заполнена капча';
                }
            else{
                if (password_verify($data['password'], $user->password)){
                    SetCookie('login', $user->login, time() + 730*24*60*60);
                    header('Location: /contacts.php');
                }
                else{
                    $errors[] = "Неверный пароль или логин";
                }
                  
            }    
        }
      else{
        $errors[] = 'Неверный логин';
      }
    }
    
}
?>
<!DOCTYPE html>


<html>
<head>
  <meta charset="utf-8"/>
  <link rel="icon" href="totoro.png">
  <link rel="stylesheet" type="text/css" href="styles/site-header.css">
  <link rel="stylesheet" type="text/css" href="styles/Form.css">
  <link rel="stylesheet" type="text/css" href="styles/footer.css">
  <link rel="stylesheet" type="text/css" href="styles/BtnTop.css">
  <link rel="stylesheet" type="text/css" href="styles/contacts.css">
  <link rel="stylesheet" type="text/css" href="styles/error.css">
  <script type="text/javascript" src="js/work_with_cookies.js"></script>
  <script type="text/javascript" src="js/d3/d3.js"></script>
  <title>Авторизация</title>
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
      <div id='error_output' <?php if (!empty($errors)){ echo "class='visible'";}?>>
      <?php
      echo array_shift($errors);
      ?>
      </div>
      <form class='log' method="POST" action="authorization.php">
        Логин<br>
        <input type="text" name="login" value="<?php echo $data['login']?>"><br>
        Пароль<br>
        <input type="password" name="password"><br>
        <div id="captcha" onclick="validate_log()"></div>
        <p><button type="reset">Очистить</button>
        <button type="submit" name='do_log_in'>Войти</button></p>

      </form>

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
    <script type="text/javascript" src="js/formValidUpdate.js"></script>
</body>
</html>