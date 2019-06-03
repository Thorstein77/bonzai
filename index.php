<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">
    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Bonzai Media</title>
    <!-- beskrivelse der ses under titlen på f.eks. Google søgninger -->
    <meta name="description" content="Webdesign og udvikling af hjemmesider. Skal du bruge en ny hjemmeside eller webshop?
    Kontakt os i dag, så giver vi dig et godt tilbud, der opfylder dine krav og behov.">


    <link rel="canonical" href="http://kthor.dk">
    <?php
    require ("php/head.php");
    ?>
</head>

<!-- i <body> har man alt indhold på siden -->
<body>

<?php
require ("php/menu.php");
?>

    <section class="indexHeader">
        <div class="flex">
            <div class="menuPlacement"></div>

            <div class="headerContent">
                <h1>Skal du også have lavet din<br>hjemmeside professionelt?</h1>

                <p>Vi har 10 års erfaring i at bygge<br>hjemmesider og webshops</p>
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

    <section class="indexSolutions">
        <div class="flex">
            <div class="indexSolutionsInfo">
                <h2>
                    Alt i en løsning
                </h2>

                <p>
                    Design af website med alt du behøver.<br>
                    Har du brug for en ny hjemmeside eller webshop? Du kan trygt overlade design og udvikling af dit website til os. Er du ikke tilfreds med det design vi har udviklet til dig, udarbejder vi et nyt design uden mer pris.
                </p>

                <p>
                    Sammen med design og udvikling, kommer vores løsninger også med webhotel, e-mail og support.
                </p>

                <p>
                    Vores løsninger har en bindingsperiode på 1 år, med en mindstepris <a href="ny-hjemmeside#anchorPrice">FRA 12.000kr.</a>
                </p>
            </div>

            <div class="grid">
                <div>
                    <img src="images/mariadk_website-clipped.jpg" alt="Webdesign for maria.dk">
                </div>

                <div>
                    <img src="images/audiovector_webshop-clipped.jpg" alt="Webdesign for Audiovector.dk">
                </div>

                <div>
                    <p>
                        Vi laver hjemmesider som er specielt designet til dig, med det du har brug for. Du kan læse mere om vores hjemmeside løsninger <a href="ny-hjemmeside">her.</a>
                    </p>
                </div>

                <div>
                    <p>
                        Vi kan også levere en webshop, enten til din nuværende eller nye hjemmeside. Du kan læse mere om vores webshop løsninger <a href="ny-hjemmeside#anchorWebshop">her.</a>
                    </p>
                </div>
            </div>
        </div>

        <h3>
            Vi leverer alt du har brug for
        </h3>

        <div class="grid">
            <div class="gridObject orange">
                <div>
                    <i class="fas fa-link"></i>

                    <p>Kun 1 års binding</p>
                </div>
            </div>

            <div class="gridObject blue">
                <div>
                    <i class="fas fa-thumbs-up"></i>

                    <p>Tilfredshedsgaranti</p>
                </div>
            </div>

            <div class="gridObject blue" id="gridObject3">
                <div>
                    <i class="fas fa-lock-open"></i>

                    <p>Administrator adgang</p>
                </div>
            </div>

            <div class="gridObject orange" id="gridObject4">
                <div>
                    <i class="fas fa-laptop"></i>

                    <p>Nem administration</p>
                </div>
            </div>

            <div class="gridObject orange" id="gridObject5">
                <div>
                    <i class="fas fa-hotel"></i>

                    <p>Webhotel inkluderet</p>
                </div>
            </div>

            <div class="gridObject blue"  id="gridObject6">
                <div>
                    <i class="fab fa-wordpress"></i>

                    <p>Bygget på WordPress</p>
                </div>
            </div>

            <div class="gridObject blue">
                <div>
                    <i class="fas fa-headset"></i>

                    <p>Telefonsupport<br>på Dansk</p>
                </div>
            </div>

            <div class="gridObject orange">
                <div>
                    <i class="fas fa-bolt"></i>

                    <p>Hurtigt i gang</p>
                </div>
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

    <section class="indexExperience">
        <div style="height: 1px"></div>

        <div class="indexExperienceInfo">
            <h2>
                Erfarent webbureau
            </h2>

            <p>
                Vi har mere end 10 års erfaring i design og udvikling af hjemmesider og webshops.
            </p>

            <p>
                I denne tid har vi arbejdet med kunder, store som små, på at udvikle de helt rigtige løsninger til dem. Vi kan også finde den rigtige løsning til dig.
            </p>

            <p>
                Her er nogle af de kunder, som vi har arbejdet med, og <a href="referencer">her</a> kan du se eksempler på nogle af de cases vi har lavet
            </p>
        </div>

        <div class="slide">
            <div class="slideContainer">
                <div id="slideLength">
                    <div class="slideObject">
                        <img src="images/logos/av.png" alt="Logo Audiovector">
                    </div>

                    <div class="slideObject">
                        <img src="images/logos/distinto.png" alt="Logo Distinto">
                    </div>

                    <div class="slideObject">
                        <img src="images/logos/ethjem.png" alt="Logo Ethjem">
                    </div>

                    <div class="slideObject">
                        <img src="images/logos/gorms.png" alt="Logo Gorms">
                    </div>

                    <div class="slideObject">
                        <img src="images/logos/hk.png" alt="Logo Havarikommissionen">
                    </div>

                    <div class="slideObject">
                        <img src="images/logos/hp.png" alt="Logo High Performance">
                    </div>

                    <div class="slideObject">
                        <img src="images/logos/netto.png" alt="Logo Netto">
                    </div>

                    <div class="slideObject">
                        <img src="images/logos/peugeot-1.png" alt="Logo Peugeot">
                    </div>

                    <div class="slideObject">
                        <img src="images/logos/sr.png" alt="Logo Sarah Rosendahl">
                    </div>
                </div>

                <div id="slideDots"></div>
            </div>
        </div>
    </section>

    <section class="indexControl">
        <div class="indexControlInfo">
            <h2>
                Vi giver dig kontrol
            </h2>

            <p>
                De fleste af vores løsninger bliver udviklet i WordPress.
                Efter de er udviklet er de simple for dig at administrere.
                Vi hjælper dig gerne med at komme i gang med at styre din hjemmeside eller webshop.
            </p>

            <p>
                I forbindelse med overdragelsen underviser vi dig i administration af din hjemmeside.
                Dette kan enten foregå via telefon og TeamViewer, eller på vores kontor i Roskilde.
            </p>

            <p>
                Skulle noget gå galt, kan du altid <a href="kontakt#anchorWrite">ringe eller skrive til os.</a>
            </p>

            <p>
                Du kan læse mere om administration og support <a href="ny-hjemmeside#anchorAdministration">her.</a>
            </p>
        </div>

        <img src="images/index_control.jpg" alt="Administration af hjemmeside">
    </section>

<?php
require ("php/footer.php");
require ("php/javascript.php");
?>



</body>
</html>
