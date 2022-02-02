<?php
include('connection.php');
extract($_REQUEST);
if(isset($save))
{
  $sql= mysqli_query($con,"select * from customer where email='$email' ");
  if(mysqli_num_rows($sql))
  {
  $msg= "<h1 style='color:red'> account already exists</h1>";    
  }
  else
  {

      $sql="insert into customer(name,email,password,mobile,address,gender,country) values('$fname','$email','$Passw','$mobi','$addr','$gend','$countr')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:green'>Data Saved Successfully</h1>"; 
   header('location:Login.php'); 
   }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Hotel.Com</title>
  <!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<style>
        body {
          background-image: url('hotel_management.gif');
            background-repeat: no-repeat;
            background-attachment: fixed; 
            background-size: 100% 100%;
          }
</style>
</head>
<body style="margin-top:50px;">
<?php 
include('Menu Bar1.php');
?>
  <br>
  <br>
  <br>
  <br>
  <br>
<div class="container-fluid"> <!-- Primary Id-->
  <div class="container" style="background-color:#90c1ec;color:#000;">
    <div class="row">
      <br>
      
      <center><h1><b><font color="#080808">- Create New Account -</font></b></h1></center>
       <center><?php echo @$msg;?></center><br>
      <div class="col-sm-2"></div>
      <div class="col-sm-6 ">
        <form class="form-horizontal"method="post">
          <div class="form-group">

            <div class="control-label col-sm-5"><h4>Name :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="fname" class="form-control"placeholder="Enter Your Name"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Email-Id:</h4></div>
          <div class="col-sm-7">
              <input type="text" name="email" class="form-control"placeholder="Enter Your Email-id" autocomplete="off"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Password :</h4></div>
          <div class="col-sm-7">
              <input type="password" name="Passw" class="form-control"placeholder="Enter Your Password"autocomplete="off"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Mobile No:</h4></div>
          <div class="col-sm-7">
              <input type="text" name="mobi" class="form-control"placeholder="Enter Your Mobile Number"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Address :</h4></div>
          <div class="col-sm-7">
              <textarea  name="addr" class="form-control"required></textarea>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4 id="top">Gender :</h4></div>
          <div class="col-sm-7">
              <input type="radio" name="gend" value="male"required><b>Male</b>&emsp;
              <input type="radio" name="gend" value="Female"required><b>Female</b>&emsp;
              <input type="radio" name="gend" value="Other"required><b>Other</b>
          </div>
          </div>

          <div class="form-group">
            <div class="control-label col-sm-5"><h4>Country :</h4></div>
          <div class="col-sm-7">
            <select name="countr" class="form-control"required>
              <option value="Albania">Albania</option>
              <option value="Algeria">Algeria</option>
              <option value="Andorra">Andorra</option>
              <option value="Antigua and Barbuda">Antigua and Barbuda</option>
              <option value="Argentina">Argentina</option>
              <option value="Armenia">Armenia</option>
              <option value="Australia">Australia</option>
              <option value="Austria">Austria</option>
              <option value="Azerbaijan">Azerbaijan</option>
              <option value="Bahamas">Bahamas</option>
              <option value="Bahrain">Bahrain</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Barbados">Barbados</option>
              <option value="Belarus">Belarus</option>
              <option value="Belgium">Belgium</option>
              <option value="Belize">Belize</option>
              <option value="Benin">Benin</option>
              <option value="Bhutan">Bhutan</option>
              <option value="Bolivia">Bolivia</option>
              <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
              <option value="Botswana">Botswana</option>
              <option value="Brazil">Brazil</option>
              <option value="Brunei">Brunei</option>
              <option value="Bulgaria">Bulgaria</option>
              <option value="Burkina Faso">Burkina Faso</option>
              <option value="Burundi">Burundi</option>
              <option value="Cambodia">Cambodia</option>
              <option value="Cameroon">Cameroon</option>
              <option value="Canada">Canada</option>
              <option value="Cape Verde">Cape Verde</option>
              <option value="Central African Republic">Central African Republic</option>
              <option value="Chad">Chad</option>
              <option value="Chile">Chile</option>
              <option value="China">China</option>
              <option value="Colombia">Colombia</option>
              <option value="Comoros">Comoros</option>
              <option value="Congo">Congo</option>
              <option value="Costa Rica">Costa Rica</option>
              <option value="Côte d&#39;Ivoire">Côte d'Ivoire</option>
              <option value="Croatia">Croatia</option>
              <option value="Cuba">Cuba</option>
              <option value="Cyprus">Cyprus</option>
              <option value="Czech Republic">Czech Republic</option>
              <option value="Denmark">Denmark</option>
              <option value="Djibouti">Djibouti</option>
              <option value="Dominica">Dominica</option>
              <option value="Dominican Republic">Dominican Republic</option>
              <option value="East Timor">East Timor</option>
              <option value="Ecuador">Ecuador</option>
              <option value="Egypt">Egypt</option>
              <option value="El Salvador">El Salvador</option>
              <option value="Equatorial Guinea">Equatorial Guinea</option>
              <option value="Eritrea">Eritrea</option>
              <option value="Estonia">Estonia</option>
              <option value="Ethiopia">Ethiopia</option>
              <option value="Fiji">Fiji</option>
              <option value="Finland">Finland</option>
              <option value="France">France</option>
              <option value="Gabon">Gabon</option>
              <option value="Gambia">Gambia</option>
              <option value="Georgia">Georgia</option>
              <option value="Germany">Germany</option>
              <option value="Ghana">Ghana</option>
              <option value="Greece">Greece</option>
              <option value="Grenada">Grenada</option>
              <option value="Guatemala">Guatemala</option>
              <option value="Guinea">Guinea</option>
              <option value="Guinea-Bissau">Guinea-Bissau</option>
              <option value="Guyana">Guyana</option>
              <option value="Haiti">Haiti</option>
              <option value="Honduras">Honduras</option>
              <option value="Hong Kong">Hong Kong</option>
              <option value="Hungary">Hungary</option>
              <option value="Iceland">Iceland</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Iran">Iran</option>
              <option value="Iraq">Iraq</option>
              <option value="Ireland">Ireland</option>
              <option value="Israel">Israel</option>
              <option value="Italy">Italy</option>
              <option value="Jamaica">Jamaica</option>
              <option value="Japan">Japan</option>
              <option value="Jordan">Jordan</option>
              <option value="Kazakhstan">Kazakhstan</option>
              <option value="Kenya">Kenya</option>
              <option value="Kiribati">Kiribati</option>
              <option value="North Korea">North Korea</option>
              <option value="South Korea">South Korea</option>
              <option value="Kuwait">Kuwait</option>
              <option value="Kyrgyzstan">Kyrgyzstan</option>
              <option value="Laos">Laos</option>
              <option value="Latvia">Latvia</option>
              <option value="Lebanon">Lebanon</option>
              <option value="Lesotho">Lesotho</option>
              <option value="Liberia">Liberia</option>
              <option value="Libya">Libya</option>
              <option value="Liechtenstein">Liechtenstein</option>
              <option value="Lithuania">Lithuania</option>
              <option value="Luxembourg">Luxembourg</option>
              <option value="Macedonia">Macedonia</option>
              <option value="Madagascar">Madagascar</option>
              <option value="Malawi">Malawi</option>
              <option value="Malaysia">Malaysia</option>
              <option value="Maldives">Maldives</option>
              <option value="Mali">Mali</option>
              <option value="Malta">Malta</option>
              <option value="Marshall Islands">Marshall Islands</option>
              <option value="Mauritania">Mauritania</option>
              <option value="Mauritius">Mauritius</option>
              <option value="Mexico">Mexico</option>
              <option value="Micronesia">Micronesia</option>
              <option value="Moldova">Moldova</option>
              <option value="Monaco">Monaco</option>
              <option value="Mongolia">Mongolia</option>
              <option value="Montenegro">Montenegro</option>
              <option value="Morocco">Morocco</option>
              <option value="Mozambique">Mozambique</option>
              <option value="Myanmar">Myanmar</option>
              <option value="Namibia">Namibia</option>
              <option value="Nauru">Nauru</option>
              <option value="Nepal">Nepal</option>
              <option value="Netherlands">Netherlands</option>
              <option value="New Zealand">New Zealand</option>
              <option value="Nicaragua">Nicaragua</option>
              <option value="Niger">Niger</option>
              <option value="Nigeria">Nigeria</option>
              <option value="Norway">Norway</option>
              <option value="Oman">Oman</option>
              <option value="Pakistan">Pakistan</option>
              <option value="Palau">Palau</option>
              <option value="Panama">Panama</option>
              <option value="Papua New Guinea">Papua New Guinea</option>
              <option value="Paraguay">Paraguay</option>
              <option value="Peru">Peru</option>
              <option value="Philippines">Philippines</option>
              <option value="Poland">Poland</option>
              <option value="Portugal">Portugal</option>
              <option value="Puerto Rico">Puerto Rico</option>
              <option value="Qatar">Qatar</option>
              <option value="Romania">Romania</option>
              <option value="Russia">Russia</option>
              <option value="Rwanda">Rwanda</option>
              <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
              <option value="Saint Lucia">Saint Lucia</option>
              <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
              <option value="Samoa">Samoa</option>
              <option value="San Marino">San Marino</option>
              <option value="Sao Tome and Principe">Sao Tome and Principe</option>
              <option value="Saudi Arabia">Saudi Arabia</option>
              <option value="Senegal">Senegal</option>
              <option value="Serbia and Montenegro">Serbia and Montenegro</option>
              <option value="Seychelles">Seychelles</option>
              <option value="Sierra Leone">Sierra Leone</option>
              <option value="Singapore">Singapore</option>
              <option value="Slovakia">Slovakia</option>
              <option value="Slovenia">Slovenia</option>
              <option value="Solomon Islands">Solomon Islands</option>
              <option value="Somalia">Somalia</option>
              <option value="South Africa">South Africa</option>
              <option value="Spain">Spain</option>
              <option value="Sri Lanka">Sri Lanka</option>
              <option value="Sudan">Sudan</option>
              <option value="Suriname">Suriname</option>
              <option value="Swaziland">Swaziland</option>
              <option value="Sweden">Sweden</option>
              <option value="Switzerland">Switzerland</option>
              <option value="Syria">Syria</option>
              <option value="Taiwan">Taiwan</option>
              <option value="Tajikistan">Tajikistan</option>
              <option value="Tanzania">Tanzania</option>
              <option value="Thailand">Thailand</option>
              <option value="Togo">Togo</option>
              <option value="Tonga">Tonga</option>
              <option value="Trinidad and Tobago">Trinidad and Tobago</option>
              <option value="Tunisia">Tunisia</option>
              <option value="Turkey">Turkey</option>
              <option value="Turkmenistan">Turkmenistan</option>
              <option value="Tuvalu">Tuvalu</option>
              <option value="Uganda">Uganda</option>
              <option value="Ukraine">Ukraine</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
              <option value="Uruguay">Uruguay</option>
              <option value="Uzbekistan">Uzbekistan</option>
              <option value="Vanuatu">Vanuatu</option>
              <option value="Vatican City">Vatican City</option>
              <option value="Venezuela">Venezuela</option>
              <option value="Vietnam">Vietnam</option>
              <option value="Yemen">Yemen</option>
              <option value="Zambia">Zambia</option>
              <option value="Zimbabwe">Zimbabwe</option>
            </select>
        </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4 id="top"></h4></div>
              <!--<div class="col-sm-7">
              <input type="file" name="pict"accept="image/*"required>
              </div>-->
          <div class="row">
            <div class="col-sm-6"style="text-align:right;"><br>
            <input type="submit" value="Submit" name="save"class="btn btn-success btn-group-justified"required style="color:#000;font-family: 'Baloo Bhai', cursive;height:40px;"/>
          </div>
          </div>
          </div>
        </form>
        </div>
      </div>
        <div class="col-sm-4">
        </div>
    </div>
    <br>
<br>
<br>
<br>
<br>
<br>

  </div>
</div>
<?php
    include('Footer.php')
?>
</body>
</html>
