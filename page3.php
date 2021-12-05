<?php session_start();?>
<!DOCTYPE HTML>
<html>
<head>
<style>
    body{
        background: dodgerblue;
    }
   .formIn{
       display: flex;
       flex-direction: column;
       width:50%;
       align-content: center;
   }
   .button{
       background-color: coral;
       width:150px;
       margin:1em;
   }
   .error{
       color: red;

   }
   span{
       margin-bottom: 1em;
   }
   .login .password .email {
       border: 1px solid red;
       margin-bottom: 1em;
   }
</style>
</head>
<body>
<?php $nameErr=$mailErr=$loginErr=$passwordErr="";
if ($_SERVER["REQUEST_METHOD"]==="POST"){
    if(empty($_POST["name"])){
        $nameErr = "Заполните имя";
    }
    elseif (isset($_COOKIE['name'])){
        $name = test_inputN($_COOKIE['name']);
    }
    else{
        $name = test_inputN($_POST["name"]);
    }

    if(empty($_POST["login"])){
        $loginErr = "Заполните логин";
    }
    elseif (isset($_COOKIE['login'])){
        $login = test_inputL($_COOKIE['login']);
    }
    else{
        $login = test_inputL($_POST["login"]);
    }
    if(empty($_POST["password"])){
        $passwordErr = "Заполните пароль";
    }
    else{
        $password = test_inputP($_POST["password"]);
    }
    if(empty($_POST["email"])){
        $mailErr = "Заполните электронный адрес";
    }
    else{
        $mail = test_inputM($_POST["email"]);
    }
    if(!empty($_POST["comment"])){
       return $_POST["comment"];
    }
}
function test_inputN($name) {
    $name = trim($name);
    $name = htmlspecialchars($name);
    $pattern = '/^[A-Za-z]*$/';
    if (preg_match($pattern,$name,$matches[0])){
        setcookie('name', $name, time()+7200);
        return $name;
    }
}
function test_inputL($login) {

    $login = trim($login);
    $login = htmlspecialchars($login);
    $pattern = '/^[A-Za-z0-9_]{1,15}$/';
    if (preg_match($pattern,$login,$matches[0])){
        setcookie('login', $login, time()+7200);
        return $login;
    }
    else{
        $loginErr = "Логин должен состять из латинских букв и цифр, например, 'Bober12'";
    }
}
function test_inputP($pass) {
    $pass = trim($pass);
    $pass = htmlspecialchars($pass);
    $pattern = '/^[A-Za-z0-9_\}\{\[\]\(\)-]{1,8}$/';
    if (preg_match($pattern,$pass)){
        setcookie('password', $pass, time()+7200);
        return $pass;
    }
}
function test_inputM($mail) {
    $mail = trim($mail);
    $mail = htmlspecialchars($mail);
    $pattern = '/^[A-Za-z0-9_]*@[A-Za-z0-9_]*\.[A-Za-z0-9_]*$/';
    if (preg_match($pattern,$mail)){
        setcookie('email', $mail, time()+7200);
        return $mail;
    }
}
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h2> Форма регистрации </h2>
    <span class="error">* поле обязательное для заполнения</span>
    <div class="formIn">
        <label for="name">Введите Ваше имя:</label>
        <input id="name" type="text" class="name">
       <span class="error">*<?php echo $nameErr;?></span>
        <label for="login">Введите новый логин:</label>
        <input id="login" class="login" type="text" name="login">
        <span class="error">*<?php echo $loginErr;?></span>
        <label for="password">Введите новый пароль:</label>
        <input id="password" class="password" type="password" name="password">
        <span class="error">*<?php echo $passwordErr;?></span>
        <label for="email">Введите новый E-mail:</label>
        <input id="email" type="email" class="email" name="email">
        <span class="error">*<?php echo $mailErr;?></span>
        <label for="ta-1">Комментарий</label><textarea name="comment" id="ta-1" cols="30" rows="10" style="background-color: bisque; width:40%; margin:1em "></textarea>
        <input name="button" type="submit" class="button"></input>
    </div>
</form>

<?php
echo "<h2>Вы ввели:</h2>";
echo $name;
echo "<br>";
echo $login;
echo "<br>";
echo $mail;
echo "<br>";
echo $password;

echo "<br>";
?>
</body>
</html>