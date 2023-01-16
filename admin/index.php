<?php
include $_SERVER["DOCUMENT_ROOT"] . '/monobrut/shared/header_dev.php';
include $_SERVER["DOCUMENT_ROOT"] . '/monobrut/auth/secure.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
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

        .logout-btn {
            display: flex;
            padding: 1rem;
            background-color: #1dff8e;
            color: black;
            text-decoration: none;
            font-size: 1.2rem;
            border-bottom: 1.5px solid black;
        }

        .logout-btn:hover {
            text-decoration: underline;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 2rem;
        }


        .menu {
            display: grid;
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .menu article {
            padding: 1rem;
            border: solid 2px black;
            width: 250px;
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            box-shadow: 5px 10px;
            transition: all 200ms ease;
        }

        .menu article:hover {
            box-shadow: none;
        }

        .menu article a {
            text-decoration: none;
            color: black;
            font-weight: 900;
            font-size: 2rem;

        }

        .menu article a:hover {
            background-color: #1dff8e;
        }

        .welcome {
            text-align: center;
            margin-bottom: 4rem;
        }

        @media screen and (min-width:768px) {
            main {
                height: 100vh;
            }


            .menu {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                gap: 30px;
            }
        }
    </style>
</head>

<body>

    <a class="logout-btn" href="../auth/logout.php">logout</a>


    <main>
        <h1 class="welcome">Welcome, <?php echo $_SESSION["username"]; ?> Choose your activity.</h1>
        <section class="menu">
            <article>
                <a href="buildings/index.php">Manage buildings</a>
            </article>
            <article>
                <a href="#">Manage categories</a>
            </article>
            <article>
                <a href="#">Overview of the buildings</a>
            </article>
        </section>
    </main>
</body>

</html>