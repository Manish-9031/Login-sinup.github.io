<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Form</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- ICONS CDN FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  
  <div class="form">
    <span class="form__title">Login</span>

    <form class="form__content" method="post">
      <div class="form__field">
        <input type="text" class="form__input" placeholder="Username" name="usern" required>
        <i class="form__icon fa-solid fa-user"></i>
      </div>

      <div class="form__field">
        <i class="form__icon form__icon--hide fa-solid fa-eye-slash"></i>
        <input type="password" class="form__input form__input--pass" placeholder="Password" name="userp" required>
        <i class="form__icon fa-solid fa-lock"></i>
      </div>

      <div class="form__forgot-pass"><a href="#">Forgot Password?</a></div>

      <input type="submit" value="Login" name="loginn" class="form__btn">

      <div class="form__signup">Not a member? <a href="#">Signup</a></div>
    </form>
  </div>

<!---------- JS ------------->
  <script>
    const hideIcon = document.querySelector('.form__icon--hide');
    const passField = document.querySelector('.form__input--pass');

    hideIcon.addEventListener('click', () => {
      hideIcon.classList.toggle('fa-eye-slash');
      hideIcon.classList.toggle('fa-eye');

      if(hideIcon.classList.contains('fa-eye')){
        passField.type = 'text';
      }else{
        passField.type = 'password';
      }
    })

  </script>
  <?php include 'connect.php'?>


</body>
</html>