$(document).ready(function(){
    function val_txt(text_input){         //for text only inputs
        var i_el = $(text_input);
        var t = i_el.val();
        t = $.trim(t);
        var t_l = t.length;
        if(t_l==0){
            $(i_el).css("borderColor", "red");
            $(i_el).focus();
            $(i_el).next("span").html("<span class='glyphicon glyphicon-exclamation-sign'></span> Missing");
            return false;
        }
        else{
            if(isNaN(t)){
                $(i_el).css("borderColor", "black");
                $(i_el).next("span").html("");
                return true;
            }
            else{
                $(i_el).css("borderColor", "red");
                $(i_el).focus();
                $(i_el).next("span").html("<span class='glyphicon glyphicon-exclamation-sign'></span> Invalid input");
                return false;
            }
        }
    }
    
    function val_num(num_input){         //for number only inputs
        var i_el = $(num_input);
        var n = i_el.val();
        n = $.trim(n);
        var n_l = n.length;
        if(n_l==0){
            $(i_el).css("borderColor", "red");
            $(i_el).focus();
            $(i_el).next("span").html("<span class='glyphicon glyphicon-exclamation-sign'></span> Invalid input");
            return false;
        }
        else{
            if(isNaN(n)){
                $(i_el).css("borderColor", "red");
                $(i_el).focus();
                $(i_el).next("span").html("<span class='glyphicon glyphicon-exclamation-sign'></span> Invalid input");
                return false;
            }
            else{
                $(i_el).css("borderColor", "black");
                $(i_el).next("span").html("");
                return true;
            }
        }
    }
        
    function val_input(input_field){
        var i_el = $(input_field);
        var t = i_el.val();
        t = $.trim(t);
        var t_l = t.length;
        if(t_l==0){
            $(i_el).css("borderColor", "red");
            $(i_el).focus();
            $(i_el).next("span").html("<span class='glyphicon glyphicon-exclamation-sign'></span> Invalid input");
            return false;
        }
        else{
            $(i_el).css("borderColor", "black");
            $(i_el).next("span").html("");
            return true;
        }
    }
    
    $("form").submit(function(){
        var email = val_input("#email");
        var fax_n = val_num("#fax_n");
        var contct = val_num("#tel");
        var adres = val_input("#addres");
        var designatn = val_txt("#designatn");
        var nm = val_txt("#f_name");
        var pres_meth = val_input("#methods");
        var req = val_input("#req");
        var indus_type = val_input("#indus_type");
        var cn = val_txt("#c_name");
        
        if(email && fax_n && contct && adres && designatn && nm && pres_meth && req && indus_type && cn){
            return true;
        }
        else{
            return false;
        }
    });
    
});