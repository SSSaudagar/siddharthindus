    $(document).ready(function(){
        
        var nav_ofst = $(".nav_br").offset().top;
        console.log(nav_ofst);
        $(window).scroll(function(){
        var scroltp = $(window).scrollTop();
        var ofst_win = nav_ofst - scroltp;
        if(ofst_win<0){
        $(".nav_br").addClass("active");
        $(".nav_br ul").addClass("active");
        $("span#comp_nm_nv").addClass("active");
        }
        else{
            $(".nav_br").removeClass("active");
            $(".nav_br ul").removeClass("active");
            $("span#comp_nm_nv").removeClass("active");
        }
        });
    });