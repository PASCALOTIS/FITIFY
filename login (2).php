<<!DOCTYPE html>
<html>
<head>
  <title>Login and Registration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      color: #3bdc23;
      margin-bottom: 30px;
    }

    form input {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    form button {
      width: 100%;
      background-color: #3bdc23;
      color: #fff;
      border: none;
      border-radius: 3px;
      padding: 10px 15px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Login</h1>
    <form action="login.php" method="POST">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
    <hr>
    <h1>Register</h1>
    <form action="register.php" method="POST">
      <input type="text" name="name" placeholder="Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Register</button>
    </form>
  </div>
</body>
</html>



