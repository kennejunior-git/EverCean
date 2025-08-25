<?php
    session_start();
        $errors = [
            'login' => $_SESSION['login_error'] ?? '',
            'register' => $_SESSION['register_error'] ?? '',
        ];
        $activeForm = $_SESSION['active_form'] ?? 'login';

    session_unset();

    function showError($error) {
        return !empty($error) ? "<p class='error-message'>$error</p>" : '';
    }

    function isActiveForm($formName, $activeForm) {
        return $formName === $activeForm ? 'acive' : '';
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="UTF-8">
<meta name="viewpoint" content="width=device-width, initial-scalew=0.1">
<title>Register</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    
    </head>
<body>
<main>
    <div class="top">
        <img class="logo" src="Img/logo.jpeg" alt="logo">
        <label class="label" for="">EverClean</label>
    </div>

    <div class="form-box  <?= isActiveForm('register', $activeForm);?>">
        <form action="login_register.php" method="post" >
        <h1>
             Create an account
        </h1>

        <?= showError($errors['register']); ?>

        <label for="">Role</label><br>
        <select id="" name="role">
            <option value="client">Client</option>
            <option value="garbagecollector">Garbage collector</option>
        </select><br>

        <label for="name">Full name</label><br>
        <input type="text" name="name" required><br>
        
        <label for="email" >Email</label><br>
        <input type="email" name="email" required><br>
    
        <label for="name">Password</label><br>
        <input type="password" name="password" required><br>

        <input type="hidden" id="location_lat" name="location_lat">
        <input type="hidden" id="location_lng" name="location_lng">

       <span>Already have an account? <a href="login.php">Login</a></span>

       <button name="register" type="submit">Creat account</button>
    </form>
    </div>
    
</main>

<script>
   document.addEventListener("DOMContentLoaded", () => {
      if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(
              function(position) {
                  document.getElementById("location_lat").value = position.coords.latitude;
                  document.getElementById("location_lng").value = position.coords.longitude;
                  console.log("Location captured:", position.coords.latitude, position.coords.longitude);
              },
              function(error) {
                  console.warn("Error getting location:", error.message);
              }
          );
      } else {
          console.warn("Geolocation is not supported in this browser.");
      }
  });
</script>
</body>

</html>