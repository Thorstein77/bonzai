<!doctype html>
<!-- Fortæller det er html5 -->
<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - alt det som man ikke ser som selve indholdet -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">
    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Blog - Bonzai Media</title>
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

                <p>Vi giver dig den information du behøver, til at holde din hjemmeside up-to-date</p>
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
            </div>

            <div class="blogSneakPeak">
                <h2>Blog</h2>
                <article>
                    <div class="blogDate">
                        <p><i class="far fa-calendar-alt"></i> 11. juni 2019</p>
                    </div>
                    <h4>Gør din wenshop lækker<br>– 10 tips til bedre produktbilleder</h4>
                    <p>Lyssætning, sans for detalje og redigering af billeder er alle ting som kan hjælpe dig, med at forbedre dine produktbilleder.</p>
                    <button onclick="window.location.href = 'blogPost.php';">Læs bloggen</button>
                </article>
                <hr class="blogLine">
                <article>
                    <div class="blogDate">
                        <p><i class="far fa-calendar-alt"></i> 28. maj 2019</p>
                    </div>
                    <h4>Bør din virksomhed have e-mærket?</h4>
                    <p>E-mærket er jo ikke gratis, så er det pengene værd? Det kan skabe trykhed hos dine kunder, hvilket kan have betydning for om de vælger din webshop.</p>
                    <button>Læs bloggen</button>
                </article>
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

    <section class="bonzaiNews">
        <h2>Bonzai nyheder</h2>
        <div class="bonzaiNewsFlex">
            <article>
                <div class="blogDate">
                    <p><i class="far fa-calendar-alt"></i> 24. maj 2018</p>
                </div>
                <h4>GDPR den 25. maj 2018</h4>
                <p>Databehandleraftale Behandling af personlige oplysninger hos Network Media ApS. Vi tilbyder en databehandleraftale, der styrer forholdet mellem dig "Kunden" (fungerer som dataansvarlig) og "Network Media ApS" (fungerer som databehandler). Databehandleraftalen gør det lettere for dig som kunde at ...</p>
                <button>Læs mere</button>
            </article>
            <article>
                <div class="blogDate">
                    <p><i class="far fa-calendar-alt"></i> 28. september 2017</p>
                </div>
                <h4>Nyt support flow</h4>
                <p>Hej.Torsdag den 28. September, fik vi hos Network Media et nyt support system. I arbejdet for at give et bedre support flow, og bedre kontrol muligheder til vores kunders webhoteller.Desværre havde det den utilsigtet reaktion, at vores systemer begyndte at sende mails ud til gamle sager, dette er selvfølgelige ...</p>
                <button>Læs mere</button>
            </article>
        </div>
    </section>



<?php
require ("php/footer.php");
require ("php/javascript.php");
?>

</body>
</html>