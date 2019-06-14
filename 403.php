<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>

    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>403 - Bonzai Media</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://use.fontawesome.com/97e05deb5f.js"></script>
    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    require ("php/head.php");
    ?>
</head>

<!-- i <body> har man alt indhold på siden -->
<body>

<?php
require ("php/menu.php");
?>

<div class="errorPage">
    <div class="flex">
        <h2>403</h2>

        <p>
            Du har desværre ikke adgang til den side du søgte,
            <br>prøv eventuelt et af disse links:
        </p>

        <div class="errorFlex">
            <div>
                <a href="kthor.dk">
                    Forside
                </a>
            </div>

            <div>
                <a href="ny-hjemmeside">
                    Ny Hjemmeside
                </a>
            </div>

            <div>
                <a href="referencer">
                    Cases / Referencer
                </a>
            </div>

            <div>
                <a href="kontakt">
                    Kontakt
                </a>
            </div>

            <div>
                <a href="blog">
                    Blog
                </a>
            </div>
        </div>
    </div>
</div>

<?php
require ("php/javascript.php");
?>

</body>
</html>