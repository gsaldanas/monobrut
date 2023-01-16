<?php
include $_SERVER["DOCUMENT_ROOT"] . '/monobrut/shared/header_dev.php';
//include the DB connection
include $_SERVER["DOCUMENT_ROOT"] . '/monobrut/shared/config.php';


if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
} else {
    echo 'no id selected';
    exit();
}
//$data = array();
//SELECT * FROM `buildings` WHERE `idcategories` = 1
$sql = "SELECT * FROM buildings WHERE idbuildings =:id";
$stmnt = $db_conn->prepare($sql);
$stmnt->bindParam(":id", $id);
$stmnt->execute();

$building = $stmnt->fetch(PDO::FETCH_ASSOC);
// while ($row = $stmnt->fetch(PDO::FETCH_ASSOC)) {
//     $data[] = $row;
// }

// echo '<pre>';
// print_r($building);
// echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        .go-back-btn {
            background-color: #C6FF1D;
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

        .detail-page {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }

        img {
            max-width: 300px;
            object-fit: cover;

        }

        .title {
            margin-top: 1rem;
            font-size: 2rem;
            font-weight: 900;
        }

        .city {
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
            font-size: 1rem;
        }

        .detail-building {
            margin-top: 2rem;
        }


        @media screen and (min-width:768px) {

            .detail-page {
                height: auto;
            }

            img {
                max-width: 600px;
            }

            .detail-building {
                margin-top: 4rem;
                margin-bottom: 4rem;
            }


        }
    </style>
</head>

<body>
    <a class="go-back-btn" href="../index.php">Go back </a>
    <main class="detail-page">

        <div class="detail-building">
            <img src="http://<?= $_SERVER['HTTP_HOST'] ?>/monobrut/uploadFiles/<?= $building['base_img'] ?>">
            <p class="title"><?= $building['name'] ?></p>
            <p class="city"><?= $building['city'] ?></p>
            <p>More details soon</p>
        </div>
    </main>
</body>

</html>