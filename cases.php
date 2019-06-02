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
<section class="casesHeader">
    <div class="flex">
        <div class="menuPlacement"></div>

        <div class="headerContent">
            <h1>Unikke kunder fortjener<br>unikke løsninger</h1>

            <p>Alle vores hjemmesider laves<br>efter den enkelte kundes ønsker og behov</p>
        </div>
    </div>

    <svg x="0px" y="0px"
         viewBox="0 0 1920 151" style="enable-background:new 0 0 1920 151;" xml:space="preserve">
            <style type="text/css">
                .st0{display:none;}
            </style>
        <g id="Lag_2" class="st0">
            <rect y="-930" class="st1" width="549" height="1076"/>
        </g>
        <g>
            <path d="M0.5,145.5h549c0,0,271-5,575-72c351.8-77.5,585-66,795-62V151H0.5V145.5z"/>
        </g>
        </svg>
</section>

<section class="cases">
    <div class="grid">
        <div class="gridObject">
            <div class="imageScroll">
                <img src="images/cases/audiovector-ref-1.jpg" alt="Eksempel på webdesign for Audiovector">
            </div>

            <a href="https://audiovector.com/" target="_blank">
                Audiovector
            </a>
        </div>

        <div class="gridObject">
            <div class="imageScroll">
                <img src="images/cases/sandrarosen-ref.jpg" alt="Eksempel på webdesign for Sandra Rosen">
            </div>

            <a href="https://sandrarosendahl.dk/" target="_blank">
                Sandra Rosendal
            </a>
        </div>

        <div class="gridObject">
            <div class="imageScroll">
                <img src="images/cases/lohke-ref.jpg" alt="Eksempel på webdesign for Lohke">
            </div>

            <a href="https://lohke.dk/" target="_blank">
                Lohke
            </a>
        </div>

        <div class="gridObject">
            <div class="imageScroll">
                <img src="images/cases/barbarmaria-ref.jpg" alt="Eksempel på webdesign for Barbara Maria">
            </div>

            <a href="https://barbaramaria.dk/" target="_blank">
                BarbaraMaria
            </a>
        </div>

        <div class="gridObject">
            <div class="imageScroll">
                <img src="images/cases/djpromo-ref.jpg" alt="Eksempel på webdesign for DJ promo">
            </div>

            <a href="#" target="_blank">
                DJ Promo
            </a>
        </div>

        <div class="gridObject">
            <div class="imageScroll">
                <img src="images/cases/tpradio-ref.jpg" alt="Eksempel på webdesign for TP-Radio">
            </div>

            <a href="https://tpradio.com/" target="_blank">
                TP Radio
            </a>
        </div>

        <div class="gridObject">
            <div class="imageScroll">
                <img src="images/cases/mariadk-ref.jpg" alt="Eksempel på webdesign for Maria.dk">
            </div>

            <a href="#" target="_blank">
                Maria
            </a>
        </div>

        <div class="gridObject">
            <div class="imageScroll">
                <img src="images/cases/gormspizza-ref.jpg" alt="Eksempel på webdesign for Gorms Pizza">
            </div>

            <a href="https://www.gormspizza.dk/" target="_blank">
                Gorms Pizza
            </a>
        </div>

        <div class="gridObject">
            <div class="imageScroll">
                <img src="images/cases/highperformance-ref.jpg" alt="Eksempel på webdesign for High Performance">
            </div>

            <a href="https://high-performance.dk/" target="_blank">
                High Performance
            </a>
        </div>
    </div>
</section>

<?php
require ("php/footer.php");
require ("php/javascript.php");
?>

</body>
</html>