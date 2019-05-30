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

    <section class="contactHeader">
        <div class="flex">
            <div class="menuPlacement"></div>

            <div class="headerContent">
                <h1>Tag kontakt!</h1>

                <p>Hvis du er interesseret i en hjemmeside fra os,<br>eller har brug for support</p>
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

    <section class="contactInfo">
        <div class="flex">
            <div class="info">
                <h2>
                   Kontakt os
                </h2>

                <p>
                    Tlf: 46 34 09 09<br>
                    info@bonzaimedia.dk
                </p>

                <p>
                    Lige meget om du interesseret i at få et professionelt webdesign,
                    eller support på en hjemmeside vi allerede har lavet til dig,
                    så er du velkomment til at ringe eller skrive.
                </p>

                <p>
                    Da vi har kunder i hele landet foregår det meste af vores
                    kundekommunikation over telefonen eller via mail, så vores
                    dygtige medarbejdere sidder klar til at hjælpe dig.
                </p>

                <p>
                    Kontakt os for et tilbud, så ser vi hvad vi kan gøre for dig.
                </p>
            </div>

            <div class="contactForm">
                <form>
                    <input type="text" class="contactName" id="contactName" name="contactName" placeholder="Navn" required>

                    <input type="email" class="contactEmail" id="contactEmail" name="contactEmail" placeholder="E-mail" required>

                    <input type="text" class="contactPhone" id="contactPhone" name="contactPhone" placeholder="Telefon nr.">

                    <select required>
                        <option value="" disabled selected hidden style="color: gray">
                            Vælg emne
                        </option>

                        <option value="support">
                            Support
                        </option>

                        <option value="sale">
                            Ny hjemmeside
                        </option>
                    </select>

                    <textarea class="contactMsg" id="contactMsg" name="contactMsg" placeholder="Skriv ..." required rows="5">

                    </textarea>

                    <input type="submit" value="Send" class="contactSubmit" id="contactSubmit" name="contactSubmit">
                </form>
            </div>
        </div>
    </section>

    <section class="contactLocation">
        <svg x="0px" y="0px"
             viewBox="0 0 1920 151" style="enable-background:new 0 0 1920 151;" xml:space="preserve">
            <g>
                <path d="M1919.5,0H0.5v145.5h549c0,0,271-5,575-72c351.8-77.5,585-66,795-62V0z"/>
            </g>
        </svg>

        <div class="flex">
            <div class="location">
                <h2>
                    Find os i Roskilde
                </h2>

                <p>
                    Hersegade 20<br>
                    4000, Roskilde
                </p>

                <p>
                    Vi har kontor i Roskilde, og byder gerne på en kop kaffe hvis du
                    foretrækker et personligt møde. Men hvis der er for langt til Roskilde
                    for dig, så er det også helt okay, vi har god erfaring med at klare
                    kommunikationen via telefon og mail.
                </p>
            </div>

            <div class="map" id="googleMap"></div>
        </div>
    </section>

<?php
require ("php/footer.php");
require ("php/javascript.php");
?>

</body>
</html>