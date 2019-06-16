<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

    $("#burger").click(function(){
        $(".mobileMenu").toggleClass("mobileMenuShow");
    });

    $window = $(window);
    $headerHeight = $(".menuPlacement").height();
    $menuHide = ($headerHeight / 4);
    $scrollDistance = $(document).scrollTop();
    $m = 0;

    if( ($headerHeight - $menuHide) <= $scrollDistance ){
        $(".menu").addClass("menuNotAtTop");
    }
    if( ($headerHeight - $menuHide) > $scrollDistance ){
        $(".menu").removeClass("menuNotAtTop");
    }
    $(".menuBack").click(function () {
        $(".menu").removeClass("menuNotAtTop");
        $m = 1;
    });
    $("body").bind("click touchstart", function (event) {
        $target = $(event.target);
        if(!$target.closest('.menuBack').length && $m === 1){
            $(".menu").addClass("menuNotAtTop");
            $m = 0;
        }
    });

    $(window).resize(function(){
        $headerHeight = $(".menuPlacement").height();
        $menuHide = ($headerHeight / 4);
    });

    $(document).scroll(function() {
        $scrollDistance = $(document).scrollTop();

        if( ($headerHeight - $menuHide) <= $scrollDistance ){
            $(".menu").addClass("menuNotAtTop");
        }
        if( ($headerHeight - $menuHide) > $scrollDistance ){
            $(".menu").removeClass("menuNotAtTop");
        }
    });

    $(document).ready(function(){
        $(".menu").removeClass("menuLoad");

        $('#blogScroll').click(function () {
            $('.blogList').animate({
                scrollTop: '+=100'
            }, 100);
        });

        // Slideshow

        // Dots
        var slideCount = $(".slideObject").length;
        dots();
        function dots(){
            var i;
            for(i = 0; i < slideCount; i++){
                $("#slideDots").append("<div class='dot'></div>");
            }
        }
        var dot = document.getElementsByClassName("dot");
        $(".dot").first().addClass("firstDot");
        $(".dot").last().addClass("lastDot");

        // Clone
        var maxSlidesShown = 6;
        $(".slideObject").last().addClass("lastSlideObject");
        clone();
        function clone(){
            var c;
            for(c = 0; c < (maxSlidesShown - 1); c++){
                $(".slideObject:eq(" +c+ ")").clone().appendTo("#slideLength");
            }
            $(".lastSlideObject").clone().prependTo("#slideLength");
        }

        // Slide
        var position = 0;
        showSlides();
        var n = 1;
        function showSlides(){
            var slidesWidth = ($(".slideContainer").outerWidth() / $(".slideObject").outerWidth());
            var slidesShown = Math.floor(slidesWidth);
            var slideObject = $(".slideObject");
            var objectWidth = slideObject.outerWidth();
            var countObjects = (slideObject.length - (maxSlidesShown - slidesShown) );
            var totalWidth = (- ( Math.floor((objectWidth * countObjects - objectWidth) * 10) / 10));
            var currentPosition = (Math.floor((position - (objectWidth * slidesShown)) * 10) / 10);
            if( totalWidth > currentPosition ){
                position = 0;
                slideObject.animate({
                    left: position+'px'
                }, 0);
                n = 0;
            }else{
                position = position - objectWidth;
                slideObject.animate({
                    left: position+'px'
                }, 500);
                $(".dot").removeClass(" active");
                $(".dot:eq("+n+")").addClass(" active");
                n++;
            }
            setTimeout(showSlides, 750);
            var resizeTimer;
            function resizeFunction(){
                position = 0;
                slideObject.animate({
                    left: position+'px'
                }, 0);
                n = 0;
                return false;
            }
            $(window).resize(function(){
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(resizeFunction, 250);
            });
        }
        $(".firstDot").addClass(" active");
    });



    function myMap() {
        var mapProp= {
            center:new google.maps.LatLng(55.639614,12.084784),
            zoom:17,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5edFMHjjsQfptoPzIVLDpHPLIvBfxyjY&callback=myMap"></script>