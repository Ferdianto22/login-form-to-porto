<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php echo'
    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm">
            <label for="username">Nama Pengguna:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Kata Sandi:</label>
            <input type="password" id="password" name="password" required>

            <button type="button" onclick="validateLogin()">Masuk</button>
        </form>
        <div id="errorMessage" class="error"></div>
    </div>'
    ?>
    <script src="login.js"></script>
</body>
</html>
