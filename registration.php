<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<form action= "" >
  <div class="registration__container registration_center">
    <h1>Регистрация</h1>
	
    <hr class= "registration__line">
    <label for="email"><b class="registration__point">Email</b></label>
    <input type="text" placeholder="Введите Email" name="email" required class="registration__text">
	
    <label for="fname"><b class="registration__point">Имя</b></label>
    <input type="text" placeholder="Введите имя" name="fname" required class="registration__text">
	
	<label for="lname"><b class="registration__point">Фамилия</b></label>
	<input type="text" placeholder="Введите фамилию" name="lname" required class="registration__text">
	
    <label for="psw"><b class="registration__point">Пароль</b></label>
    <input type="password" placeholder="Введите пароль" name="psw" required class="registration__text">

    <label for="psw-repeat"><b class="registration__point">Повторите пароль</b></label>
    <input type="password" placeholder="Повторите пароль" name="psw-repeat" required class="registration__text">
    <hr class= "registration__line">
    <button type="submit" class="registerbtn">Зарегистрироваться</button>
  </div>
</form>

</body>
</html>