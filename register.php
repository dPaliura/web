<?php
require "db.php";
$cockies = $_COOKIE;
$data = $_POST;
$errors = array();
if (isset($data['do_sign_up'])){
    if (R::count('users', 'login = ?', array($data['login'])) > 0){
        $errors[] = 'Пользователь с таким логином уже существует!';
    }
    if (R::count('users', 'email = ?', array($data['email'])) > 0){
        $errors[] = 'Пользователь с такой почтой уже зарегестрирован!';
    }
    if ($data['password'] != $data['confirm_password']){
        $errors[] = 'Неверно введен повторный пароль!';
    }
    if ($data['captcha'] != 'OK'){
        $errors[] = 'Неверно заполнена капча';
    }
    if (empty($errors)){
        $user = R::dispense('users');
        $user->login = $data['login'];
        $user->email = $data['email'];
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->sex = $data['sex'];
        $user->birthdate = $data['birthdate'];
        $user->country = $data['country'];
        $user->city = $data['city'];
        $user->status = 0;
        R::store($user);
        SetCookie('login', $user->login, time() + 730*24*60*60);
        header('Location: /contacts.php');
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
  <script type="text/javascript" src="js/d3/d3.js"></script>

  <title>Регистрация</title>
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
<form class="reg" method="POST" onsubmit="
function validate_reg(){
    var field = document.forms[0].elements['login'].value;
    if (field.length < 5 || field.length > 20 || field.search(/[^\d\w_-]/)+1){ d3.select('\
        #error_output').attr('class', 'visible').html('Логин должен состоять из 5 - 25 \
        символов<br>и содержать только:<br>1) латинские буквы;<br>2) цифры;<br>3) символы \'-\' и \'_\''); return false}

    field = document.forms[0].elements['email'].value;
    var ATs = field.match(/@/g);
    if (ATs == null){
        d3.select('#error_output').attr('class', 'visible').html('Email записан без разделителя \'@\''); return false
    }
    else if (ATs.length > 1){
      d3.select('#error_output').attr('class', 'visible').html('Email должен содержать единственный разделитель \'@\''); return false
    }
    var regExp = /[^-.\w!#$%&*^=+`?{}].*@/;//[-.\w!#$%&*^-=+`/?{}]/
    if (field.search(regExp) + 1 || field.search(/@/) == 0){
        d3.select('#error_output').attr('class', 'visible').html('В именной части почтового адреса<br>использованы \
        недопустимые символы<br>или же она пуста'); return false
    }
    if (field.search(/@\w+\.\w+/) == -1){
        d3.select('#error_output').attr('class', 'visible').html('Неверный формат адресной части адреса электронной почты.'); return false
    }
    field = document.forms[0].elements['password'].value;
    if (field.length < 6 || field.length > 30){
        d3.select('#error_output').attr('class', 'visible').html('Пароль должен состоять из 6 - 30 символов'); return false
    }
    if (field.search(/[^-+=!?.,\w]/) + 1){
        d3.select('#error_output').attr('class', 'visible').html('Пароль может содержать только:<br>1) латинские буквы;<br>\
        2) цифры;<br>3) символы \'+\', \'-\', \'=\', \'_\', \'!\', \'?\', \'.\' и \',\''); return false
    }
    if (!(field.search(/\d/)+1 && field.search(/[a-zA-Z]/)+1)){
        d3.select('#error_output').attr('class', 'visible').html('Пароль должен содержать хотя бы<br>одну букву и одну цифру.'); return false
    }

} return validate_reg();" action="/register.php">
        <h3>Регистрационные данные (обязательно)</h3>
        Логин<br>
        <input type="text" name="login" value="<?php echo $data['login']?>"><br>
        Электронная почта<br>
        <input type='text' name='email' value="<?php echo $data['email']?>"><br>
        Пароль<br>
        <input type='password' name='password' value="<?php echo $data['password']?>"><br>
        Повторите пароль
        <input type="password" name="confirm_password"><br><br>
        <h3>Персональные данные</h3>
        Имя<br>
        <input type='text' name='first_name' value="<?php echo $data['first_name']?>"><br>
        Фамилия<br>
        <input type="text" name="last_name" value="<?php echo $data['last_name']?>"><br>
        Пол<br>
        <div>
        <input type="radio" name="sex" value='1'>Мужской<br>
        <input type="radio" name="sex" value='0'>Женский<br>
        <input type="radio" name="sex" checked value='-1'>Не указан
        </div><br><br>
        Дата рождения<br>
        <input type="date" name="birthdate" min='1920-01-01' max='2014-01-01' value="<?php echo $data['birthdate']?>"><br>
        <h4>Где вы живете?</h4>
        Страна<br>
        <input type="text" name="country" value="<?php echo $data['country']?>"><br>
        Город<br>
        <input type="text" name="city" value="<?php echo $data['city']?>"><br>
        <div onclick='validate_log()' id="captcha"></div>
        <p><button type="reset">Заново</button>
        <button type="submit" name='do_sign_up'>Зарегистрировать</button></p>
      </form>
      <script type="text/javascript" src="js/formValidUpdate.js"></script>
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