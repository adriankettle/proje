<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/master.css">
    <title>Welcome</title>
  </head>
  <body class="settings">
    <header>
      <nav>
        <a href="index.html">Home</a>
        <a href="register.php">Membership</a>
        <a href="about.html">About</a>
        <a href="contact.php">Contact</a>
      </nav>
    </header>
    <div class="main-section">
      <section id="list">
        <form action="register.php" method="post">
          <table>
            <tr>
              <td>Username :</td>
              <td><input type="text" name="username" placeholder="Username"></td>
            </tr>
            <tr>
              <td>Full Name :</td>
              <td><input type="text" name="fullname" placeholder="Full Name"></td>
            </tr>
            <tr>
              <td>E-mail :</td>
              <td><input type="text" name="email" placeholder="E-mail"></td>
            </tr>
            <tr>
              <td>Password :</td>
              <td><input type="password" name="password" placeholder="Password"></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="submitSave" value="Login"></td>
            </tr>
          </table>
        </form>
      </section>
    </div>
    <hr>
    <div class="aside">
      <article class="main">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </article>
    </div>
  </body>
</html>
