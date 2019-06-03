<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">
    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Ny hjemmeside - Bonzai Media</title>

    <meta name="description" content="Webdesign og udvikling af hjemmesider behøver ikke koste det hvide ud af øjnene.
    Hos Bonsai Media får du utroligt meget for pengene. Her kan du læse mere om hvad du får for dine penge.">

    <link rel="canonical" href="http://kthor.dk/ny-hjemmeside">
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
            <img src="images/website_for-your-needs.jpg" alt="Webdesign for EnCoat">
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
            <h2>
                Arbejdsprocess
            </h2>

            <p>
                Vi vil gerne give dig en god oplevelse, og en glidende arbejdsprocess, derfor er dette den process, du kan forvente når du bestiller en hjemmeside hos os.
            </p>

            <p>
                Det kan variere hvor lang tid de forskellige dele tager, alt efter omfanget af opgaven, og dine ønsker for design og indhold, derfor er tids bestemmelserne her vejledende.
            </p>

            <p>
                Bestillingen starter ved at <a href="kontakt#anchorWrite">kontakte os,</a> derfra hjælper vi dig igennem processen.
            </p>
        </div>

        <div class="grid">
            <div class="gridObject">
                <h4>
                    Bestil din hjemmeside eller webshop online
                </h4>

                <p>
                    Ring eller skriv til os for at indgå en aftale.
                    Når bestillingen er på plads betales der for oprettelse samt første måned.
                </p>
            </div>

            <div class="gridObject">
                <h4>
                    Kontakt med designeren
                </h4>

                <p>
                    Du vil indenfor et arbejdsdøgn blive kontaktet af vores designer, som noterer dine konkrete ønsker til design og indhold.
                </p>
            </div>

            <div class="gridObject">
                <h4>
                    Designeren og udvikleren opbygger siden
                </h4>

                <p>
                    Alt efter opgavens omfang og dine ønsker, opbygges hjemmesiden gennemsnitlig på en uges tid.
                </p>
            </div>

            <div class="gridObject">
                <h4>
                    Din hjemmeside er online
                </h4>

                <p>
                    Hvis du har input til design eller indhold rettes det til.
                    Derefter lægger vi siden online på vores server.
                </p>
            </div>
        </div>
    </div>
</section>
<span id="anchorPrice"></span>
<section class="newPrice">
    <div class="flex">
        <div class="newPriceInfo">
            <h2>
                Hvad koster en professionel hjemmeside?
            </h2>

            <div>
                <p>
                    Vores løsninger koster forskelligt alt efter dine behov og ønsker, men som standard starter vores priser <b>FRA:</b>
                </p>

                <ul>
                    <li>
                        Hjemmeside i WordPress: 8.000 kr.
                    </li>

                    <li>
                        Webshop i WooCommerce: 8.000 kr.
                    </li>

                    <li>
                        Webshop i Magento 2: 14.000 kr.
                    </li>
                </ul>
            </div>

            <p>
                Nogle tillægsservices kan øge omkostningerne. Vi giver selvfølgelig et tilbud baseret på dine ønsker.
            </p>

            <p>
                Vores løsninger kommer som standard med et abonnement, dette dækker over services som webhotel, support, e-mail og daglig backup.
            </p>

            <div>
                <p>
                    Abonnement priserne er:
                </p>

                <ul>
                    <li>
                        WordPress: 350 kr. per måned.
                    </li>

                    <li>
                        WooCommerce: 450 kr. per måned.
                    </li>

                    <li>
                        Magento 2: 750 kr. per måned.
                    </li>
                </ul>
            </div>
        </div>

        <div class="grid">
            <div class="gridObject gridObjectOrange">
                <div class="gridFlex">
                    <i class="fas fa-sync-alt"></i>
                    <p>
                        Abonnement<br>FRA 350 kr.
                    </p>
                </div>
            </div>

            <div class="gridObject">
                <div class="gridFlex">
                    <i class="fab fa-wordpress"></i>
                    <p>
                        Hjemmeside<br>FRA 8.000 kr.
                    </p>
                </div>
            </div>

            <div class="gridObject">
                <div class="gridFlex">
                    <i class="fab fa-wordpress"></i>
                    <p>
                        WooCommerce<br>FRA 8.000kr.
                    </p>
                </div>
            </div>

            <div class="gridObject gridObjectOrange">
                <div class="gridFlex">
                    <i class="fab fa-magento"></i>
                    <p>
                        Magento 2<br>FRA 14.000 kr.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<span id="anchorWebshop"></span>
<section class="newWebshop">
    <svg x="0px" y="0px" viewBox="0 0 1920 151" style="enable-background:new 0 0 1920 151;" xml:space="preserve" id="newWebshowSvgTop">
        <g>
            <path d="M1919.5,0H0v145.5h549.5c0,0,271-5,575-72c351.8-77.5,585-66,795-62V0z"/>
        </g>
    </svg>

    <div class="flex">
        <div class="webshopInfo">
            <h2>
                Webshop
            </h2>

            <p>
                Vi har lavet webshops lige så længe som vi har lavet almindelige hjemmesider, så du er også her i trygge hænder.
            </p>

            <p>
                Vi har gennem denne tid prøvet flere forskellige shopsystemer, og er kommet frem til at vi foretrækker at arbejde
                i WooCommerce eller Magento til udvikling af webshops. Disse systemer virker upåklageligt, kan holde styr på din
                omsætning online, og måske vigtigst af alt, er simple for dig at administrere selv.
            </p>

            <p>
                Når vi er færdige med at designe og udvikle din webshop, hjælper vi dig i gang med administrationen.
            </p>

            <div class="grid">
                <div class="gridObject">
                    <div class="flex">
                        <i class="fas fa-credit-card"></i>
                        <p>
                            Betaling<br>med kort
                        </p>
                    </div>
                </div>

                <div class="gridObject gridObjectOrange">
                    <div class="flex">
                        <i class="fab fa-wordpress"></i>
                        <p>
                            Bygget på<br>WooCommerce
                        </p>
                    </div>
                </div>

                <div class="gridObject">
                    <div class="flex">
                        <i class="fab fa-magento"></i>
                        <p>
                            Bygget på<br>Magento 2
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="img">
            <img src="images/website_webshop.jpg" alt="Webshop - Audiovector">
        </div>
    </div>

    <svg x="0px" y="0px" viewBox="0 0 1920 151" style="enable-background:new 0 0 1920 151;" xml:space="preserve" id="newWebshowSvgBtm">
        <g>
            <path d="M0.5,145.5h549c0,0,271-5,575-72c351.8-77.5,585-66,795-62V151H0.5V145.5z"/>
        </g>
    </svg>
</section>

<section class="newMobile">
    <div class="flex">
        <div class="img">
            <img src="images/mobile.png" alt="Mobilvenlig hjemmeside">
        </div>

        <div class="mobile">
            <h2>
                100% mobilvenlig hjemmeside
            </h2>

            <p>
                Din hjemmeside skal ikke kun se lækker ud på den store skærm, men også på mobilen. De fleste folk bruger nemlig mobilen lige så meget som computeren.
            </p>

            <p>
                Vi sørger derfor altid for at de hjemmesider vi levere fungere på alle skærmstørrelser. Ligeledes er alle vores
                webshops mobilvenlige, så dine kunder altid har din butik, lige ved hånden.
            </p>
        </div>
    </div>
</section>
<span id="anchorAdministration"></span>
<section class="newAministration">
    <div class="flex">
        <div class="administration">
            <h2>
                Administrer<br>dit websted
            </h2>

            <p>
                Du kan selv nemt redigere sider eller elementer på dit websted.
            </p>

            <p>
                Vi bygger vores løsninger i WordPress og Magento 2. Vi bygger hjemmesiden op så det er nemt for dig at redigere indlæg, oprette nye sider mm.
            </p>

            <p>
                Er din hjemmeside en webshop vil det også være nemt og hurtigt at oprette nye produkter, redigere i gamle eller helt slette produkter.
                I webshop løsningerne får du også et overblik over din online omsætning.
            </p>

            <p>
                I slutningen af udviklingen, underviser vi dig gerne i brugen af din nye hjemmeside. Dette vil dække alt du har brug for at vide,
                for at administrere din hjemmeside eller webshop. Vi underviser dig enten over Teamviewer og telefon, eller på vores kontor i Roskilde.
            </p>

            <p>
                Har du brug for hjælp til noget du ikke selv kan løse? Så ring til os eller <a href="contact.php#anchorWrite">skriv til support.</a>
            </p>
        </div>

        <img src="images/website_adminstrator.jpg" alt="WordPress administration">
    </div>
</section>

<?php
require ("php/footer.php");
require ("php/javascript.php");
?>

</body>
</html>
