<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../style/index.css" />
    <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet"
  />
  </head>
  <body>
    <div class="forgot-password-container">
      <div class="form-container">
        <form action="../includes/forgotpassword.inc.php"  id="forgotpasswordForm"
        method="post">
          <h2>Recover Your Password</h2>
          <div class="input-box">
            <input type="email" name = 'EmailAddress' placeholder="Email Address" />
            <i class="fas fa-envelope"></i>
          </div>
          <button type="submit" class="btn">Submit</button>
        </form>
      </div>
    </div>
    <!-- FontAwesome for icons -->
    <script
      src="https://kit.fontawesome.com/a076d05399.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
