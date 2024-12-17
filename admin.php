<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($login === 'admin' && $password === '12345') { 
        $_SESSION['admin_logged_in'] = true;
        header('Location: view_applications.php');
        exit();
    } else {
        echo "Неверный логин или пароль!";
    }
}
?>

<form method="post" action="">
    <label for="login">Логин:</label>
    <input type="text" id="login" name="login" required>
    
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required>
    
    <button type="submit">Войти</button>
</form>
