<?php
include $_SERVER["DOCUMENT_ROOT"] . '/monobrut/shared/header_dev.php';
include('auth/secure_login.php');
$errors["401"] = "wrong user credentials";
$errors["418"] = "I'm a teapot.";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        main {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            flex-direction: column;
        }

        h1 {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-transform: uppercase;
            font-weight: 900;
            letter-spacing: 1px;
            font-size: 4rem;
            margin-bottom: 2rem;
        }

        h1 span {
            color: #1dff8e;
        }

        form {
            border: solid 3px black;
            width: 70%;
            height: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;

        }

        form label {
            font-size: 1.2rem;
            margin-top: auto;
            text-align: left;
            width: 100%;
            padding-left: 0.6rem;
        }

        .go-back-btn {
            background-color: #1dff8e;
            width: 100%;
            display: flex;
            padding: 1rem;
            text-decoration: none;
            font-size: 1.4rem;
            color: black;
            border-bottom: 1.5px solid black;
        }

        .go-back-btn:hover {
            text-decoration: underline;
        }

        form input {
            width: 100%;
            padding: 1rem;
            font-size: 1.4rem;

        }

        .login-btn {
            margin-top: auto;
            background-color: black;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: 900;
            transition: all 300ms ease;
        }

        .login-btn:hover {
            background-color: #1dff8e;
        }
    </style>
</head>

<body>
    <a class="go-back-btn" href="index.php">Return home </a>
    <main>
        <?php
        if (isset($_GET["error"])) {
            print($errors["401"]);
        }
        ?>
        <h1>Monobrut HQ<span>.</span></h1>
        <form method="post" action="auth/auth.php">
            <label for="uname">Username</label><br>
            <input type="text" id="email" name="email" placeholder="your email" required><br>
            <label for="pwd">Password</label><br>
            <input type="password" id="pwd" name="pwd" placeholder="your password" required><br><br>
            <input class="login-btn" type="submit" value="login">
        </form>

    </main>
</body>

</html>