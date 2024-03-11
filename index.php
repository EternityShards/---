<?php
$predefinedUsername = "user123";
$predefinedPassword = "password123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredUsername= isset($_POST["login"]) ? $_POST["login"] : "";
    $enteredPassword = isset($_POST["password"]) ? $_POST["password"] : "";

    if ($enteredUsername === $predefinedUsername && $enteredPassword  === $predefinedPassword) {
        echo "Добро пожаловать!";
    } else {
        echo "Ошибка входа. Пожалуйста, проверьте логин и пароль.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Система входа</title>
</head>
<body>

<form action="" method="post">
    <label for="login">Логин:</label>
    <input type="text" id="login" name="login" required>

    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" value="Войти">
</form>

</body>
</html>