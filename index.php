<?php include('config.php'); ?>
<html lang="en">

<head>
    <title>Animated Login</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>fonts/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>style.css" rel="stylesheet" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave, do, meu, site">
    <meta name="description" content="Descrição do meu website">
    <meta name="author" content="Ariel Lopes">
    <meta charset="utf-8" />
</head>

<body class="flex">
    <div class="container">
        <div class="user"></div>
        <form>
            <h1>Login</h1>
            <div class="input">
                <input type="text" required>
                <label>Username</label>
            </div>
            <div class="input box">
                <input type="password" required>
                <label>Password</label>
                <div class="forgot">
                    <a href="#">Forgot Password?</a>
                </div>
            </div>
            <input type="submit" value="Login">
        </form method="get">
        <div class="div">
            <div class="line"></div>
            <div class="signup">
                Don't Have an account? <a href="#">Sign Up</a>
            </div>
        </div>
    </div>
</body>

</html>