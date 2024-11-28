<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - produced by M.</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">     
        <form class="register"action="register.php" method="post">  
            <h1>Register</h1>
            <input type="text" placeholder="Login" name="login">
            <input type="password" placeholder="Password" name="pass">
            <input type="password" placeholder="Confirm password" name="repeatpass">
            <button type="submit"> Register </button>
            <h5 id="switchRegisterButton"> Si vous êtes inscrit CLICK</h5>
        </form>
        <form class="login"action="login.php" method="post">
            <h1>Login</h1>
            <input type="text" placeholder="Login" name="login">
            <input type="password" placeholder="Password" name="pass">
            <button type="submit"> Login </button>
            <h5 id="switchLoginButton"> Si vous n'êtes pas inscrit CLICK</h5>
        </form>
    </div>
</body>
<script>
    let registerButton =document.querySelector("#switchRegisterButton");
    let registerForm = document.querySelector('.register');

    let loginButton = document.querySelector('#switchLoginButton');
    let loginForm = document.querySelector('.login');

    registerButton.addEventListener('click', () => {
        loginForm.style.display = "flex";

        registerForm.style.display = "none";
    });

    loginButton.addEventListener('click', () => {
        registerForm.style.display = "flex";
        loginForm.style.display = "none";
    });
</script>
</html>