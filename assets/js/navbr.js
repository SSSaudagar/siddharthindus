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
        $(".nav_br span#menu_icon").addClass("active");
        }
        else{
            $(".nav_br").removeClass("active");
            $(".nav_br ul").removeClass("active");
            $("span#comp_nm_nv").removeClass("active");
            $(".nav_br span#menu_icon").removeClass("active");
        }
        });
        $("span#menu_icon").click(function(){
        $(".nav_br ul").addClass("active1");
        });
        $(".nav_br ul li#menu_list_icon").click(function(){
        $(".nav_br ul").removeClass("active1");
        });
    });