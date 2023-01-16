<?php

$errorCodes = array();
$errorCodes[1] = "upload done";
$errorCodes[2] = "upload failed";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monobrut - add building</title>
</head>
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

    h1 {
        margin-bottom: 1rem;
    }

    .dash-btn {
        display: flex;
        padding: 1rem;
        background-color: #1dff8e;
        color: black;
        text-decoration: none;
        font-size: 1.2rem;
        border-bottom: 1.5px solid black;
    }

    .dash-btn:hover {
        text-decoration: underline;
    }

    main {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;

        padding: 1rem;
    }

    section {
        width: 100%;
    }

    form {
        border: solid 2px black;
        width: 90%;
        margin: auto;
        padding: 1rem;

    }

    form label {
        font-size: 1.2rem;
        font-weight: 900;
        display: block;
    }

    form input {
        width: 100%;
        padding: 1rem;
        margin-bottom: 1rem;
    }

    form textarea {
        width: 100%;
        padding: 1rem;
        margin-bottom: 1rem;
    }

    button {
        padding: 1rem 3rem;
        background-color: black;
        color: white;
        border: none;
        font-weight: 900;
        cursor: pointer;
        margin-right: 1rem;
        margin-bottom: 0.5rem;
    }







    @media screen and (min-width:768px) {
        main {
            height: 90vh;
        }

        form {
            border: solid 2px black;
            width: 50%;
            margin: auto;
            padding: 1rem;

        }
    }
</style>

<body>

    <a class="dash-btn" href="../../admin/">Dashboard</a>

    <main>
        <h1>Add a brutalistic building</h1>
        <article class="feedback">

            <?php if (isset($_REQUEST["code"])) {
                $error = $_REQUEST["code"];
                echo $errorCodes[$error];
            } ?>
        </article>
        <section>
            <form id="formBuilding" enctype="multipart/form-data" method="POST" action="uploadBuilding.php">
                <label for="name">Name</label><br>
                <input type="text" name="b_name" required /><br>
                <label for="desc">Description</label><br>
                <textarea id="desc" name="desc" required></textarea><br>
                <label for="city">City</label><br>
                <input type="text" name="city" required /><br>
                <label for="image">Choose image</label><br>
                <input type="file" name="img_src" id="img_src">
                <button class="btn_add" type="submit">Add</button>
                <button id="cancel_btn">Cancel</button>
            </form>
        </section>
    </main>
    <script>
        //clear the form
        let cancelBtn = document.getElementById('cancel_btn');
        cancelBtn.addEventListener('click', (e) => {
            e.preventDefault();
            document.getElementById('formBuilding').reset();
        })
    </script>

</body>

</html>