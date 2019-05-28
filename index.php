<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>

    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700|Sanchez&display=swap&subset=latin-ext" rel="stylesheet">
    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<!-- i <body> har man alt indhold på siden -->
<body>

<?php
require ("php/menu.php");
?>

    <section>
        <div>
            <div></div>

            <div>
                <h1>placeholder</h1>

                <p>tekst her</p>
            </div>
        </div>

        <!-- inline svg -->
    </section>

    <section>
        <div class="flex">
            <div>
                <h2>
                    overskrift
                </h2>

                <p>tekst her</p>
            </div>

            <div class="grid">
                <div>
                    <img>
                </div>

                <div>
                    <p>
                        tekst her
                    </p>
                </div>

                <div>
                    <img>
                </div>

                <div>
                    <p>
                        tekst her
                    </p>
                </div>
            </div>
        </div>

        <h3>
            overskrift
        </h3>

        <div class="grid">
            <div>
                <i></i>

                <p></p>
            </div>

            <div>
                <i></i>

                <p></p>
            </div>

            <div>
                <i></i>

                <p></p>
            </div>

            <div>
                <i></i>

                <p></p>
            </div>

            <div>
                <i></i>

                <p></p>
            </div>

            <div>
                <i></i>

                <p></p>
            </div>

            <div>
                <i></i>

                <p></p>
            </div>

            <div>
                <i></i>

                <p></p>
            </div>
        </div>

        <!-- inline svg -->
    </section>

    <section>
        <h2>
            overskrift
        </h2>

        <p>
            tekst her
        </p>

        <div class="slide">

        </div>
    </section>

    <section>
        <img>

        <div>
            <h2>
                overskrift
            </h2>

            <p>
                tekst her
            </p>
        </div>
    </section>

<?php
require ("php/footer.php");
require ("php/javascript.php");
?>



</body>
</html>
