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
        var slidesWidth = ($(".slideContainer").outerWidth() / $(".slideObject").outerWidth());
        var slidesShown = Math.floor(slidesWidth);
        $(".slideObject").last().addClass("lastSlideObject");
        clone();
        function clone(){
            var c;
            for(c = 0; c < slidesShown; c++){
                $(".slideObject:eq(" +c+ ")").clone().appendTo("#slideLength");
            }
            $(".lastSlideObject").clone().prependTo("#slideLength");
        }
        var $slideObject = $(".slideObject");
        var position = 0;
        var objectWidth = $slideObject.outerWidth();
        var countObjects = $slideObject.length;
        dots();
        function dots(){
            var i;
            for(i = 0; i < (countObjects - (slidesShown + 1)); i++){
                $("#slideDots").append("<div class='dot'></div>");
            }
        }
        var dot = document.getElementsByClassName("dot");
        $(".dot").first().addClass("firstDot");
        $(".dot").last().addClass("lastDot");
        showSlides();
        var n = 1;
        function showSlides(){
            if(-(objectWidth * countObjects - objectWidth) >= position - (objectWidth * slidesShown)){
                position = 0;
                $slideObject.animate({
                    left: position+'px'
                }, 0);
                $(".dot").removeClass(" active");
                $(".lastDot").addClass(" active");
                n = 0;
            }else{
                position = position - objectWidth;
                $slideObject.animate({
                    left: position+'px'
                }, 500);
                $(".dot").removeClass(" active");
                $(".dot:eq("+n+")").addClass(" active");
                n++;
            }
            setTimeout(showSlides, 2000)
        }
        $(".firstDot").addClass(" active");
    })

</script>

<script>
    function myMap() {
        var mapProp= {
            center:new google.maps.LatLng(55.639614,12.084784),
            zoom:17,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5edFMHjjsQfptoPzIVLDpHPLIvBfxyjY&callback=myMap"></script>