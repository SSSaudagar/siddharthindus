<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Siddharth Heavy Industries Pvt Ltd</title>
<link rel="shortcut icon" href="assets/img/favicon.ico"  type="image/x-icon" />

<meta name = 'description' content="">
<meta name="keywords" content="">

<!-- Bootstrap -->
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--FONTS-->
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Maven+Pro">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Abel">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Dosis">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Questrial">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Jura">

<link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <style>
        .container-fluid {font-family:abel;}
        #location {height:300px;width:100%}
/*        #hdr_cont {text-align:center;background:#3247D1;padding:10px;color:white;}*/
        .contct_sectn {margin-top:6%;padding:6%;padding-top:0;}
        input[class="form-control"], textarea[class="form-control"] {border-radius:0;border:1px solid grey;color:black}
        input[class="form-control"]:focus, textarea[class="form-control"]:focus {box-shadow:none;border-color:#3247D1}
        .submit, .reset {margin-top:10%;color:white;font-size:20px;border-radius:0;border:0}
        .submit {background:#3247D1;}
        .reset {background:#212121;}
        .reset:hover {background:#212121;color:#dbdbdb}
        .submit:hover {background:#3247D1;color:#dbdbdb;}
        .pg_nm {margin-top:70px;}
        .form_hdrs {text-align:center;}
        h2.form_hdrs {text-transform:uppercase;}
        h4.form_hdrs {font-weight:bold;}
        .sub_text {font-weight:bold;}
    </style>
    
    </head>
    
    <body>
            <div class="nav_bar">
        <h1><span id="sid">Siddharth</span>Industries</h1>
            <ul class="active">
                <h3>Menu <span class="menu_icn">&#9776;</span></h3>
                <li><a href="home.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="facilities.html">Facilities</a></li>
                <li><a href="extrusion.html">Products</a></li>
                <li><a class="actve_pg" href="contact.php">Contact</a></li>
            </ul>
        
         <a class="toggle-nav" href="#" style="text-decoration:none;color:white;">&#9776;</a>
        </div>
<!--
        <div class="top_div">
        </div>
-->
        <h1 class="pg_nm">Contact us</h1>
        <div class="container-fluid">
        <div class="row">
            <div id="location"></div>    
<!--            <h1 id="hdr_cont">Contact Us </h1>-->
        </div>
        <div class="row contct_sectn">
            <div class="col-sm-7">
                <h2 class="form_hdrs">Enquiry Form</h2><br><br>
                <h4 class="form_hdrs">Company Details</h4>
                <div class="sec1">
                    <form method="post" action="" role="form" class="form" onsubmit="">
                        <div class="form-group" style="padding-top:3%;">
                            <div class="col-sm-4">
                            <label for="c_name">*Your Company Name</label>
                            </div>
                                <div class="col-sm-6">
                                    <input name="c_name" id="c_name" class="form-control">
                                </div>
                            </div><br>
                        <div class="form-group" style="padding-top:1%;">
                            <div class="col-sm-4">
                            <label for="indus_type">*Industry Type</label>
                            </div>
                                <div class="col-sm-6">
                                    <input name="indus_type" id="indus_type" class="form-control">
                                </div>
                            </div><br>
                        <div class="form-group" style="padding-top:1%;">
                            <div class="col-sm-4">
                                <label for="req">*Your requirements</label>
                            </div>
                            <div class="col-sm-6">
                                <textarea id="req" rows="6" class="form-control"></textarea>
                            </div>
                        </div><br>
                        <div class="form-group" style="padding-top:16%;">
                            <div class="col-sm-4">
                                <label for="methods">*Present Methods</label>
                            </div>
                            <div class="col-sm-6">
                                <textarea id="methods" rows="4" class="form-control"></textarea>
                            </div>
                        </div><br><br><br><br><br><br>
                        <h4 class="form_hdrs">Your Details</h4>
                        <div class="form-group" style="padding-top:3%;">
                            <div class="col-sm-4">
                            <label for="f_name">*Your Name</label>
                            </div>
                                <div class="col-sm-6">
                                    <input name="f_name" id="f_name" class="form-control">
                                </div>
                            </div><br>
                        <div class="form-group" style="padding-top:1%;">
                            <div class="col-sm-4">
                            <label for="designatn">*Designation</label>
                            </div>
                                <div class="col-sm-6">
                                    <input name="designatn" id="designatn" class="form-control">
                                </div>
                            </div><br>
                        <div class="form-group" style="padding-top:1%;">
                            <div class="col-sm-4">
                                <label for="addres">*Address for Correspondence</label>
                            </div>
                            <div class="col-sm-6">
                                <textarea id="addres" rows="4" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group" style="padding-top:13%;">
                         <div class="col-sm-4">
                                <label for="tel">*Contact Number</label>
                            </div>
                            <div class="col-sm-6">
                            <input name="telephone" id="tel" type="tel" class="form-control">
                            </div>
                        </div>
                        <div class="form-group" style="padding-top:4%;">
                         <div class="col-sm-4">
                                <label for="fax_n">*Fax Number</label>
                            </div>
                            <div class="col-sm-6">
                            <input name="fax_number" id="fax_n" type="tel" class="form-control">
                            </div>
                        </div>
                        <div class="form-group" style="padding-top:4%;">
                         <div class="col-sm-4">
                                <label for="email">*Email Addres</label>
                            </div>
                            <div class="col-sm-6">
                            <input name="email" id="email" type="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group" style="padding-top:3%">
                            <hr>
                        <div class="col-sm-12">
                            <center>
                            <button class="btn btn-default submit" type="submit">Submit</button>
                                <button class="btn btn-default reset" type="reset">Reset</button>
                            </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-5">
                <h3>Siddharth Heavy Industries Pvt. Ltd</h3><br>
                <p>
                    Siddharth Heavy Industries Pvt. Ltd,<br> S.No. 492, Waghawade road, (OFF. KHANAPUR ROAD)
            Mache, Belgaum- 590 014 (INDIA)
                </p>
                <br><br>
                <h3>Contacts</h3><br>
                <p><span class="sub_text">Phone :</span> +91-831-2411175/71</p>
                <p><span class="sub_text">Fax :</span> +91-831-2411174/175</p>
                <p><span class="sub_text">E-mail :</span> <a style="color:#3F51B5;" href="mailto:siddhartindus@gmail.com" title="siddhartindus@gmail.com">siddhartindus@gmail.com</a></p>
                <br><br>
                <h3>Our Representatives</h3><br>
                <p><span class="sub_text">Mr.Prashant Jadhav :</span> +91-9845273840</p>
                <p><span class="sub_text">Mr. Siddharth Chandgadkar :</span> +91-9449159911</p>
            </div>
        </div>
        </div>
        <div class="row footr">
        <h5>SIDDHARTH HEAVY INDUSTRIES S.No. 492, WAGHAWADE ROAD, (OFF. KHANAPUR ROAD)
            MACHE, BELGAUM - 590 014 (INDIA)<br>Tel: +91-831-2411171/172; Fax : +91-831-2411174/175<br>
            E-mail : <a style="color:#3F51B5;" href="mailto:siddhartindus@sancharnet.in" title="siddhartindus@sancharnet.in">siddhartindus@sancharnet.in</a>
            </h5>
        
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js"></script>
         <script src="assets/js/res_menu.js"></script>
        <script>
            var myCent = new google.maps.LatLng(15.84970, 74.49767);
            function initialize(){
                var mapProp = {
                center: myCent,
                zoom : 14,
                scrollwheel:false,
                mapTypeId : google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("location"), mapProp);
                
                var marker = new google.maps.Marker({
                position: myCent
                });
                
                marker.setMap(map);
            }
            
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </body>
</html>