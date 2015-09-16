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
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Maven+Pro">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Abel">
<style>
	body, html{font-family:'abel', sans-serif;overflow-x: hidden}
	h1,h2,h3,h4,h5,h6{margin:0}
	.container-fluid{padding: 2%;}
	.main_cont{background:#212121;padding-bottom: 0px}
	h1#company_name {font-weight: bold;color:white;text-transform: uppercase;float:left;font-size:50px;padding:0 10px;}
	h1#company_name span {color: #cc0000;}
	h4#moto {color:grey;float:right;margin-top:10px;border-left:1px solid grey;padding:10px 14px}
	.nav_br {background:black;margin-top: 2%;width: 100%;box-shadow: 0 0 4px 2px rgba(0,0,0,0.2);}
	.nav_br ul{list-style: none;}
	.nav_br ul li{display: inline-block;padding: 4px 16px;font-size: 20px;color: white;transition: all 0.2s ease-in;}
	.nav_br ul a:hover li{background:#7f0000;color:white;font-weight:bold;transition: all 0.2s ease-in;}

/*Page name section*/
.pg_nm {color:white;background:#141414;padding:10px;padding-left: 4%;}
h1.pg_nm {font-size: 40px;text-transform: uppercase;}

#location {height:300px;width:100%}
.contct_sectn {margin-top:6%;padding:6%;padding-top:0;}
.form-group {padding-top:3%;}
input[class="form-control"], textarea[class="form-control"] {border-radius:0;border:1px solid grey;color:black}
input[class="form-control"]:focus, textarea[class="form-control"]:focus {box-shadow:none;border-color:red}
.submit, .reset {margin-top:10%;color:white;font-size:20px;border-radius:0;border:0}
.submit {background:#cc0000;color:white}
.reset {background:#212121;}
.reset:hover, .reset:active, .reset:focus {background:#212121;color:#dbdbdb}
.submit:hover, .submit:active, .submit:focus {background:#b20000;color:white;transition:background 0.1s ease-in}
.form_hdrs {text-align:center;}
.method_bx {padding-bottom:16%;}
h2.form_hdrs {text-transform:uppercase;}
h4.form_hdrs {font-weight:bold;}
.sub_text {font-weight:bold;}
.form-group {padding-top: 4%;}
.method_bx {padding-top: 20%;}
.contct-boxes1 {padding-top: 14%;}
.contct-boxes2 {padding-top: 6%;}
.contct-boxes3 {padding-top: 6%;}
.btn_sectn {padding-top:3%;}
.invalid {color:red;font-weight: bold;}	
	
/*footer*/    
.footr {text-align: center;padding: 20px 0 20px 0;}
.footr h5{background:#f5f5f5;padding: 20px;}
.footr a{color:red}
    
/*responsive content*/
@media screen and (max-width:420px) {#location {height:200px;}
    .btn_sectn {padding-top:0%;}
    .contct_details {margin-top:16%;padding-top:10%;border-top:1px solid #dbdbdb;}
}
    
    /*top div*/
@media screen and (max-width:440px)
{
    h1.pg_nm {font-size: 32px;}
}

@media screen and (max-width:340px)
{
    h1.pg_nm {font-size: 24px;}
}
</style>
</head>
<body>
	<div class="container-fluid main_cont">
		<div class="row">
            <h1 id="company_name"><span>SIDDHARTH HEAVY INDUSTRIES PVT. LTD</span></h1>
		<h4 id="moto">Designed and Manufactured to perfection</h4>
		</div>
			<div class="nav_br">
		<ul>
			<a href="index.html"><li>Home</li></a>
			<a href="about.html"><li>About</li></a>
			<a href="facilities.html"><li>Facilities</li></a>
			<a href="products.html"><li>Products</li></a>
			<a href="contact.php"><li>Contact us</li></a>
		</ul>
		</div>
	</div>
	<div class="top_div">
        </div>
        <h1 class="pg_nm">Contact us</h1>
            <div id="location"></div>
		<div class="container-fluid content-container">
		<div class="row contct_sectn">
            <div class="col-sm-7">
                <h2 class="form_hdrs">Enquiry Form</h2><br><br>
                <h4 class="form_hdrs">Company Details</h4>
                <div class="sec1">
                    <form method="post" action="" role="form" class="form" onsubmit="">
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="c_name">*Your Company Name</label>
                            </div>
                                <div class="col-sm-6">
                                    <input name="c_name" maxlength="30" id="c_name" class="form-control">
                                    <span class="invalid" id="invalid_cnmae"></span>
                                </div>
                            </div><br>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="indus_type">*Industry Type</label>
                            </div>
                                <div class="col-sm-6">
                                    <input name="indus_type" maxlength="30" id="indus_type" class="form-control">
                                </div>
                            </div><br>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="req">*Your requirements</label>
                            </div>
                            <div class="col-sm-6">
                                <textarea id="req" maxlength="100" rows="6" class="form-control"></textarea>
                            </div>
                        </div><br>
                        <div class="form-group method_bx">
                            <div class="col-sm-4">
                                <label for="methods">*Present Methods</label>
                            </div>
                            <div class="col-sm-6">
                                <textarea id="methods" maxlength="100" rows="4" class="form-control"></textarea>
                            </div>
                        </div><br>
                        <h4 class="form_hdrs">Your Details</h4>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="f_name">*Your Name</label>
                            </div>
                                <div class="col-sm-6">
                                    <input name="f_name" id="f_name" maxlength="30" class="form-control">
                                    <span class="invalid" id="invalid_nmae"></span>
                                </div>
                            </div><br>
                        <div class="form-group">
                            <div class="col-sm-4">
                            <label for="designatn">*Designation</label>
                            </div>
                                <div class="col-sm-6">
                                    <input name="designatn" id="designatn" maxlength="30" class="form-control">
                                    <span class="invalid" id="invalid_desig"></span>
                                </div>
                            </div><br>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="addres">*Address for Correspondence</label>
                            </div>
                            <div class="col-sm-6">
                                <textarea id="addres" maxlength="120" rows="4" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group contct-boxes1">
                         <div class="col-sm-4">
                                <label for="tel">*Contact Number</label>
                            </div>
                            <div class="col-sm-6">
                            <input name="telephone" maxlength="11" id="tel" type="tel" class="form-control">
                                <span class="invalid" id="invalid_input1"></span>
                            </div>
                        </div>
                        <div class="form-group contct-boxes2">
                         <div class="col-sm-4">
                                <label for="fax_n">*Fax Number</label>
                            </div>
                            <div class="col-sm-6">
                            <input name="fax_number" maxlength="11" id="fax_n" type="tel" class="form-control">
                                <span class="invalid" id="invalid_input2"></span>
                            </div>
                        </div>
                        <div class="form-group contct-boxes3">
                         <div class="col-sm-4">
                                <label for="email">*Email Addres</label>
                            </div>
                            <div class="col-sm-6">
                            <input name="email" id="email" pattern = "^.+@[^\.].*\.[a-z]{2,}$" type="email" class="form-control">
                            </div>
                        </div>
                        <div class="form-group btn_sectn">
                            <hr>
                        <div class="col-sm-12">
                            <center>
                            <button class="btn btn-default submit" type="submit">Submit Details</button>
                                <button class="btn btn-default reset" type="reset">Reset</button>
                            </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-5 contct_details">
                <h3>Siddharth Heavy Industries Pvt. Ltd</h3><br>
                <p>
                    Siddharth Heavy Industries Pvt. Ltd,<br> S.No. 492, Waghawade road, (OFF. KHANAPUR ROAD)
            Mache, Belgaum- 590 014 (INDIA)
                </p>
                <br><br>
                <h3>Contacts</h3><br>
                <p><span class="sub_text">Phone :</span> +91-831-2411175/71</p>
                <p><span class="sub_text">Fax :</span> +91-831-2411174/175</p>
                <p><span class="sub_text">E-mail :</span> <a style="color:red;" href="mailto:siddhartindus@gmail.com" title="siddhartindus@gmail.com">siddhartindus@gmail.com</a></p>
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
            E-mail : <a href="mailto:siddhartindus@sancharnet.in" title="siddhartindus@sancharnet.in">siddhartindus@sancharnet.in</a>
            </h5>
        
        </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="assets/js/contct_map.js"></script>
        <script src="assets/js/contact-validate.js"></script>
</body>
</html>