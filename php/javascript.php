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
    })

</script>