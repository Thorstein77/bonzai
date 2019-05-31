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
    <?php
    require ("php/head.php");
    ?>
</head>

<!-- i <body> har man alt indhold på siden -->
<body>

<?php
require ("php/menu.php");
?>
<section class="newHeader">
    <div class="flex">
        <div class="menuPlacement"></div>

        <div class="headerContent">
            <h1>Hjemmesider lavet<br>til dine behov</h1>

            <p>Vi bygger unikke hjemmesider og webshops<br>til dig og dit publikum</p>
        </div>
    </div>

    <div class="headerPush">

    </div>

    <div class="design">
        <div class="img">
            <img src="images/website_for-your-needs.jpg">
        </div>

        <div class="text">
            <h2>
                Websider designet efter dine behov
            </h2>

            <p>
                Der findes websider i mange forskellige niveauer af kvalitet,
                dog får man sjældent mere end man betaler for.
                Vi oplever ofte at vores kunder bliver overraskede over,
                hvor meget de får med i vores løsninger.
            </p>

            <p>
                I udviklingsprocessen tildeler vi altid en dedikeret designer til din case.
                Dette sikrer at designeren der arbejder på din case forstår dine ønsker og behov.
            </p>

            <p>
                Alle vores løsninger kommer med en tilfredshedsgaranti.
                Er det design vi udvikler ikke lige i skabet første gang, laver vi det om.
            </p>
        </div>
    </div>

    <svg x="0px" y="0px"
         viewBox="0 0 1920 151" style="enable-background:new 0 0 1920 151;" xml:space="preserve">
        <g>
            <path d="M0.5,145.5h549c0,0,271-5,575-72c351.8-77.5,585-66,795-62V151H0.5V145.5z"/>
        </g>
    </svg>
</section>

<section class="newProcess">
    <div class="flex">
        <div class="process">

        </div>

        <div class="timeline">
            <div class="timelineObject">

            </div>

            <div class="timelineObject">

            </div>

            <div class="timelineObject">

            </div>

            <div class="timelineObject">

            </div>
        </div>
    </div>
</section>

<section class="newPrice">
    <div class="flex">
        <div>

        </div>

        <div class="grid">
            <div class="gridObject">

            </div>

            <div class="gridObject">

            </div>

            <div class="gridObject">

            </div>

            <div class="gridObject">

            </div>
        </div>
    </div>
</section>

<section class="newWebshow">
    <svg x="0px" y="0px" viewBox="0 0 1920 151" style="enable-background:new 0 0 1920 151;" xml:space="preserve">
        <g>
            <path d="M1919.5,0H0.5v145.5h549c0,0,271-5,575-72c351.8-77.5,585-66,795-62V0z"/>
        </g>
    </svg>

    <div class="flex">
        <div class="webshopInfo">
            <h2>

            </h2>

            <p>

            </p>

            <p>

            </p>

            <p>

            </p>

            <div class="grid">
                <div class="gridObject">

                </div>

                <div class="gridObject">

                </div>

                <div class="gridObject">

                </div>
            </div>
        </div>

        <div class="img">
            <img src="images/website_webshop.jpg">
        </div>
    </div>

    <svg x="0px" y="0px" viewBox="0 0 1920 151" style="enable-background:new 0 0 1920 151;" xml:space="preserve">
        <g>
            <path d="M0.5,145.5h549c0,0,271-5,575-72c351.8-77.5,585-66,795-62V151H0.5V145.5z"/>
        </g>
    </svg>
</section>

<section class="newMobile">
    <div class="flex">
        <div class="img">
            <img>
        </div>

        <div class="mobile">

        </div>
    </div>
</section>

<section class="newAministration">
    <div class="flex">
        <div class="administration">

        </div>

        <div class="img">
            <img src="images/website_adminstrator.jpg">
        </div>
    </div>
</section>

<?php
require ("php/footer.php");
require ("php/javascript.php");
?>

</body>
</html>
