<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>ABC Organization Pvt Ltd</title>
<link rel="shortcut icon" href="assets/img/favicon.ico"  type="image/x-icon" />

<meta name = 'description' content="">
<meta name="keywords" content="">
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/navbar.css" rel="stylesheet">
<link href="assets/css/contact.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Abel">
</head>
<body>
    <div class="container-fluid main_cont">
        <div class="row">
            <h1 id="company_name"><span>ABC Organization Pvt. Ltd</span></h1>
        <h4 id="moto">Designed and Manufactured to perfection</h4>
        </div>
        <div class="nav_br">
                <span id="comp_nm_nv">ABC Organization</span>
                <span id="menu_icon">&#9776;</span>
        <ul>
            <li id="menu_list_icon"><span>Menu &#9776;</span></li>
            <a href="index.html"><li>Home</li></a>
            <a href="about.html"><li>About</li></a>
            <a href="facilities.html"><li>Facilities</li></a>
            <a href="products.html"><li>Products</li></a>
            <a href="contact.php"><li>Contact Us</li></a>
        </ul>
        </div>
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
                                    <input name="c_name" maxlength="30" id="c_name" class="form-control" autofocus>
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
                <h3>ABC Organization Pvt. Ltd</h3><br>
                <p>
                    ABC Organization Pvt. Ltd,<br> S.No. 492, abc road, (OFF. xyz ROAD)
            ipsum, lorem- xxx xxx (INDIA)
                </p>
                <br><br>
                <h3>Contacts</h3><br>
                <p><span class="sub_text">Phone :</span> +91-xxx-xxxxxxx/xx</p>
                <p><span class="sub_text">Fax :</span> +91-xxx-xxxxxxx/xxx</p>
                <p><span class="sub_text">E-mail :</span> <a style="color:red;" href="#" title="Sample email">abc@gmail.com</a></p>
                <br><br>
                <h3>Our Representatives</h3><br>
                <p><span class="sub_text">Mr. ghj :</span> +91-xxx-xxxxxxx</p>
                <p><span class="sub_text">Mr. xyz :</span> +91-xxx-xxxxxxx</p>
            </div>
        </div>
    </div>
    <div class="row footr">
        <h5>ABC Organization Pvt Ltd S.No. XXX, ABC ROAD, (OFF. XYZ ROAD)
            lorem, Lorem Ipsum - xxx xxx (INDIA)<br>Tel: +91-xxx-xxxxxxx/xxx; Fax : +91-xxx-xxxxxxx/xxx<br>
            E-mail : <a href="#" title="Sample email">abc@sancharnet.in</a>
            </h5>

        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/navbr.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="assets/js/contct_map.js"></script>
        <script src="assets/js/contact-validate.js"></script>
</body>
</html>
