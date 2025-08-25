<?php
    session_start();
        $errors = [
            'login' => $_SESSION['login_error'] ?? '',
            'register' => $_SESSION['register_error'] ?? ''
        ];
        $activeForm = $_SESSION['active_form'] ?? 'login';

    session_unset();

    function showError($error) {
        return !empty($error) ? "<p class='error-message'>$error</p>" : '';
    }

    function isActiveForm($formName, $activeForm) {
        return $formName === $activeForm ? 'active' : '';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <main>
    <div class="top">
        <img class="logo" src="Img/logo.jpeg" alt="logo">
        <label class="label" for="">EverClean</label>
    </div>

    <div class="form-box  <?= isActiveForm('login', $activeForm);?>">
        <form action="login_register.php" method="post">
        <h1>
             Login in to your account
        </h1>

        <?= showError($errors['login']); ?>

        <label for="email">Email</label><br>
        <input type="email" name="email"><br>
    
        <label for="name">Password</label><br>
        <input type="password" name="password"><br>

       <span>Don't yet have account? <a href="signup.php">Sign-Up</a></span>

       <button name="login" type="submit">Login</button>
    </form>
    </div>
</main>
</body>
</html>