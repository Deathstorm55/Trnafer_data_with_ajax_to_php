<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/form.css">

</head>

<body>
    <div class="form">
        <h2>Login form</h2>
        <form action="" autocomplete="off">
            <div class="error-text">Error</div>

            <div class="input">
                <label for="">Email</label>
                <input type="email" name="email" placeholder="Enter Your Email: " required>
            </div>
            <div class="input">
                <label for="">Password</label>
                <input type="password" name="pass" id="" placeholder="Enter Password: " required>
            </div>

            <div class="submit">
                <input type="submit" value="Login Now" class="button">
            </div>
        </form>
        <div class="link">Not signed up? <a href="register.php">Signup Now</a></div>
    </div>
    <script src="js/login.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
</body>

</html>