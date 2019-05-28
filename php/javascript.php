<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

    $("#burger").click(function(){
        $(".mobileMenu").toggleClass("mobileMenuShow");
    })

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


        // Slideshow
        var $slide = $("#slideLength");
        $(".slideObject").first().addClass("firstSlideObject");
        $(".slideObject").last().addClass("lastSlideObject");

        clone();
        function clone(){
            $(".firstSlideObject").clone().appendTo("#slideLength");
            $(".lastSlideObject").clone().prependTo("#slideLength");
        }
        var $slideObject = $(".slideObject");
        var position = 0;
        var objectWidth = $slideObject.outerWidth();
        var countObjects = $slideObject.length;

        showSlides();

        function showSlides(){
            if(-(objectWidth * countObjects - objectWidth) === position - objectWidth){
                position = 0;
                $slideObject.animate({
                    left: position+'px'
                }, 0);
            }else{
                position = position - objectWidth;
                $slideObject.animate({
                    left: position+'px'
                }, 500);
            }

            setTimeout(showSlides, 1000)
        }






        //var slide = 0;
        //showSlides();

        //function showSlides() {
            //var n;
            //var slides = document.getElementsByClassName("slideObject");
            //for (n = 0; n < slides.length; n++) {
                //slides[n].style.display = "none";
            //}
            //slide++;
            //if (slide > slides.length) {slide = 1}
            //slides[slide-1].style.display = "block";
            //setTimeout(showSlides, 500);
        //}
    })

</script>