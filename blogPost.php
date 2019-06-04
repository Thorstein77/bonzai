<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">
    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Artikel - Blog - Bonzai Media</title>
    <?php
    require ("php/head.php");
    ?>
</head>

<!-- i <body> har man alt indhold på siden -->
<body>

<?php
require ("php/menu.php");

?>
<section class="blogHeader">
    <div class="flex">
        <div class="menuPlacement"></div>

        <div class="headerContent">
            <h1>Vi holder dig opdateret</h1>
            <p>Vi giver dig den information du behøver,<br> til at holde din hjemmeside up-to-date</p>
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

<section class="blog">
    <div class="blogContent">
        <div class="blogTitles">
            <div class="blogAll">
                <h4>Alle blogs</h4>
                <div class="blogList">
                    <ul>
                        <li><a href="blogPost.php">Gør din webshop lækker</a></li>
                        <li><a href="#">Bør din virksomhed have e-mærket?</a> </li>
                        <li><a href="#">Undgå at kunden springer fra købet</a> </li>
                        <li><a href="#">Hvilke sociale medier skal jeg bruge?</a> </li>
                        <li><a href="#">Værdien af et godt webdesign</a> </li>
                        <li><a href="#">Google SEO</a> </li>
                        <li><a href="#">5 fordele ved en webshop</a> </li>
                        <li><a href="#">Guide til social media marketing</a> </li>
                    </ul>
                </div>
                <input type="button" value="Se flere" id="blogScroll" />
            </div>
            <button class="btnBack" onclick="window.location.href = 'blog.php';">Tilbage til blog</button>
        </div>

        <article id="post">
            <div class="blogDate">
                <p><i class="far fa-calendar-alt"></i> 11. juni 2019</p>
            </div>
            <h2>Gør din webshop lækker</h2>
            <h3>– 10 tips til bedre produktbilleder</h3>
            <h4>Lyssætning, sans for detalje og redigering af billeder er alle ting som kan hjælpe dig, med at forbedre dine produktbilleder.<br>
                Udseendet på din webshop er med til at skabe tryghed hos kunden, derfor er det vigtigt at den ser professionel og lækker ud, det er dine produktbilleder med til at sikrer.
            </h4>
            <h5>1. Tænk over kamera kvaliteten</h5>
            <p>Brug ikke bare et tilfældigt gammelt digitalkamera eller smartphone. Hvis du ikke vil investere i et spejlreflekskamera, så kan du godt bruge en smartphone, men vælg en som er relativt ny på markedet, og hvor der fra producentens side er lagt vægt på fotokvalitet. Vi foreslår modeller som Apple iPhone, som gerner har et 12 MP-kamera. Hvis du er mere til Android foreslår vi Huawei P20 eller P30 Pro, som byder på mindst 24 MP, eller OnePlus som kan tilbyde op til 48 MP.
                <br><br>
                Hvis du er mere til at købe et kamera, så anbefaler vi at det som minimum er et hvor du kan indstille blænde og lukketid. Vi foreslår kameraer som Canon EOS 750D med et Canon 50mm 1.8 objektiv.</p>
            <div class="imgFlex">
                <img class="img1" alt="Canon EOS 750D" src="images/blog_camera.jpg">
                <img class="img2" alt="Canon 50mm 1.8 objektiv" src="images/blog_lens.jpg">
            </div>
            <h5>2. Brug et stativ</h5>
            <p>Et uklart, rystet billede ser ikke professionelt ud. Selvom du synes at du har en rolig hånd er det ikke sikkert at det er nok, især ikke hvis du skal fotografere mange produkter og derfor være i gang i lang tid. Så gør dig selv en tjeneste og invester i et stativ, enten et tripod stativ eller gorillapod, alt efter behov. Dette lader dig stabilisere kameraet, og et stativ kan ofte justeret i højden, og er ikke nødvendigvis dyrt.</p>
            <h5>3. Husk belysning</h5><p>
            Mørke billeder kan give et skummelt udtryk, og det er nok ikke den udstråling din webshop skal have, når dine kunder skal have tillid til dig, og dine produkter. Så husk at kaste lys noget lys. Hvis dit studie har meget naturligt lys kan det friste at nøjes med det, dette kan dog resultere i stor difference i billedernes belysning, alt efter vejr og tidspunkt mens du fotografere. Derfor bør du supplere med diverse lamper til flash belysning eller kontinuerlig belysning.</p>
            <h5>4. Fotoboks</h5>
            <p>Hvis det at sætte et studie op med lamper er mere end du tør kaste dig over, så er en anden god løsning at bruge en fotoboks. Specifikt en model som har LED paneler, så du ikke skal bekymre dig om hvor lyset skal stå. De er simple at sætte og og variere i pris fra 300-2.000 kr. alt efter størrelse og model.</p>
            <h5>5. Undgå udbrænding</h5>
            <p>Hold øje med at højlys områder ikke brænder ud, så du ikke mister detaljer eller produktet går i et med baggrunden. I sådanne tilfælde skal du justere lukkertiden og dermed eksponeringen, så der lukkes mindre lys ind. Hvis du ikke har mulighed for at ændre disse indstillinger, kan du evt. prøve at løfte skyggerne i redigeringen efterfølgende.</p>
            <img alt="udbrænding af højlys" src="images/blog_light.jpg">
            <h5>6. Vær opmærksom på baggrunden</h5>
            <p>Baggrunden skal være ensartet og ensfarvet, så den ikke tager fokus fra produktet. Det er stærkt anbefalet at bruge en hvid baggrund, da en farvet baggrund kan give genskin på produktet og give en forkert farve. Brug eventuelt en hvid foto baggrund eller en fotoboks. En hvid baggrund er også bedst at bruge hvis produktet skal fritlægges i efterbehandlingen.
                <br><br>
                Ud over farven på baggrunden, skal du også generelt være opmærksom på at baggrunden er tager sig godt ud og er ryddelig. Støvsug eventuelt underlaget. Hvis du har elementer som bakker dit produkt op, så sørg for de er arrangeret pænt og uden at tage fokus fra selve produktet.</p>
            <h5>7. Stræb efter ensartethed</h5>
            <p>Webshoppen skal som en helhed se godt en ensartet ud, det nytter ikke at billederne har helt forskellig farve og lyssætning. Hvis dine billeder har en unik stil, så vær konsekvent med at holde stilen.
                <br><br>
                Ydermere er det vigtigt at produkterne er placeret ensartet, brug noget til at markere placeringen, f.eks. et lille stykke farvet tape eller post-it. Vær dog opmærksom på at markøren ikke er synlig i billedet.
            </p>
            <h5>8. Regn ikke med et billede er nok</h5>
            <p>Tag billeder fra forskellige vinkler, og tag gerne mere end et fra hver vinkel, da det ikke er sikkert det første er det bedste. Dine kunder kan ikke tage og føle på produktet før de bestiller, så det er vigtigt at give dem mulighed for at se det fra forskellige vinkler.</p>
            <img alt="samling af billeder" src="images/blog_photos.jpg">
            <h5>9. Juster billederne</h5>
            <p>Det er nok et punkt du ofte springer over, men det kan give dine billeder et ekstra pift at efterredigere billeder. Photoshop er det bedste værktøj til at justere lyd og kontrast eller fritlægge billedet, til hvis det skal på en anden baggrund.
                <br><br>
                Hvis du ikke har erfaring med billedredigering findes der en del gratis kurser og tutorials. Ellers kan det anbefales at få et professionel til at hjælpe med redigering af billederne, når du er kunde hos Bonzai, er der mulighed for hjælp til grundlæggende redigering.</p>
            <h5>10. Undgå tunge billeder</h5>
            <p>Hvis du uploader billederne uden at optimere dem til web fylder de måske 3-5 MB. Det er tungt for siden, og gør derfor visningen langsom, hvilket kan resultere i at brugeren giver op og bruger en anden webshop. Derfor skal du sørge for at komprimere dem, det er ideelt hvis de fylder 75 KB, men kan fylde op til 300 KB.</p>
        </article>
    </div>
</section>


<?php
require ("php/footer.php");
require ("php/javascript.php");
?>

</body>
</html>