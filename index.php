<?php
$title = "<h1>een <span>titel</span></h1>";
//we requiren de json file. (bekijk hem eens. hij bevat de output van de door vite gegenereerde bestanden)
$manifest = file_get_contents("./dist/manifest.json");
//we lezen hem in als associatieve array
$manifestObject = json_decode($manifest, true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Monobrut</title>
    <?php
    //hieronder printen we de link-href en de script-src uit. met <?= doe je automatisch een echo.
    ?>
    <link rel="stylesheet" href="./dist/<?= $manifestObject["js/index.js"]["css"][0] ?>">
    <script src="./dist/<?= $manifestObject["js/index.js"]["file"] ?>"></script>
</head>

<body>
    <header>
        <article class="logo">
            <span class="name">Monobrut<span class="dot">.</span></span>
        </article>
        <nav>
            <a class="links" href="#">Gallery</a>
            <a class="links" href="#">About</a>
            <a class="links" href="#">Contact</a>
        </nav>
    </header>
    <main>
        <article class="hero-content">

            <h1>Concrete monsters<span class="yellow-dot">.</span></h1>
            <h2>Discover buildings, and its brutality founded in the 1950s.</h2>
            <a class="cta-btn" href="#">Discover</a>
        </article>
    </main>
    <article class="gallery">
        <h2>Brutalism in architecture</h2>
        <section>
            <aside class="_option">
                <p>Filter+</p>
                <button><a href="#">All</a></button>
                <button><a href="#">North America</a></button>
                <button><a href="#">Latin America</a></button>
                <button><a href="#">Europe</a></button>
                <button><a href="#">Oceania</a></button>
                <button><a href="#">Asia</a></button>
                <button><a href="#">Africa</a></button>
                <p>Sort+</p>
                <button><a href="#">Alphabetical Asc</a></button>
                <button><a href="#">Alphabetical Desc</a></button>
            </aside>
        </section>
    </article>
</body>

</html>