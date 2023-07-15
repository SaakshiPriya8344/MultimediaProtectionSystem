<!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>
</head>
<style>
  .style {
    color: black;
    font-size: 20px;
    display: block;
    width: 50vw;
    margin: auto;
  }

  .username {
    padding: 10px;
    display: flex;
    margin: auto;
    justify-content: center;
  }

  .password {
    display: flex;
    margin: auto;
    justify-content: center;
  }

  .input {
    margin-left: 10px;
    height: 30px;
    width: 300px;
  }

  .button {
    color: black;
    background-color: white;
    font-size: 20px;
    border: 1px solid black;
    display: block;
    margin: auto;
    margin-top: 5px;
    padding: 5px 10px 5px 10px;
  }

  .button:hover {
    cursor: pointer;
    background-color: aquamarine;
  }
</style>

<body>
  <?php
  session_start();

  if (isset($_SESSION['passwordAttempts'])) {
    $passwordAttempts = $_SESSION['passwordAttempts'];
  } else {
    $passwordAttempts = 0;
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'];

    if ($password === '1234567890') {
      // login successful
      $passwordAttempts = 0;
      $_SESSION['passwordAttempts'] = 0;
      header('Location: 1Image.php');
      exit;
    } else {
      // login failed
      $passwordAttempts++;
      $_SESSION['passwordAttempts'] = $passwordAttempts;
      if ($passwordAttempts >= 3) {
        header('Location: http://localhost/Secure-Login/logout.php');
        exit;
      } else {
        $message = 'Incorrect password. Attempts: ' . $passwordAttempts;
      }
    }
  }
  ?>
  <?php if (isset($message)) {
    echo $message;
  } ?>

  <form method="post">
    <div>
      <div class='username'> Username:
        <input type="username" name="username" class='input'>
      </div>
      <div class="password">Password:
      <input type="password" name="password" class='input'>
      </div>
      <input type="submit" class='button' value="Login">
    </div>
  </form>

</body>

</html>