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

<aside class="menuBack">
    <i class="fas fa-chevron-right"></i>

    <nav class="menu menuLoad">
        <div class="logoImg">
            <a href="index.php">
                <img src="images/logoOffWhite.svg">
            </a>
        </div>

        <ul class="verticalFlex">
            <li>
                <a href="newWebsite.php">
                    Ny hjemmeside
                </a>
            </li>

            <li>
                <a href="cases.php">
                    Cases / Referencer
                </a>
            </li>

            <li>
                <a href="contact.php">
                    Kontakt
                </a>
            </li>

            <li>
                <a href="blog.php">
                    Blog
                </a>
            </li>
        </ul>

        <ul class="flex">
            <li class="teamIcon">
                <a>
                    <img src="images/teamviewer.png">
                </a>
            </li>

            <li class="someIcons">
                <ul>
                    <li>
                        <a href="https://da-dk.facebook.com/networkmediadk" target="_blank">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>

                    <li>
                        <a href="https://www.instagram.com/networkmediadk/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>

                    <li>
                        <a href="https://dk.linkedin.com/company/network-media-aps" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

    $window = $(window);
    $windowHeight = $window.height();

    $scrollDistance = $(document).scrollTop();

    if( $windowHeight <= $scrollDistance ){
        $(".menu").addClass("menuNotAtTop");
    }if( $windowHeight > $scrollDistance ){
        $(".menu").removeClass("menuNotAtTop");
    }

    $(document).scroll(function() {
        $scrollDistance = $(document).scrollTop();

        if( $windowHeight <= $scrollDistance ){
            $(".menu").addClass("menuNotAtTop");
        }if( $windowHeight > $scrollDistance ){
            $(".menu").removeClass("menuNotAtTop");
        }
    });

    $(document).ready(function(){
        $(".menu").removeClass("menuLoad");
    })

</script>

</body>
</html>