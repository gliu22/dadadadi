<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Normal user page</title>

    <!-- Bootstrap -->
    <link href="asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body onload="init()">
    <?php
    require_once '../include.php';

    $theID=mysql_escape_string($_GET["id"]);
    echo "hello ".$_GET["firstname"];

    ?>
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul id="myTabs" class="nav nav-tabs nav-stacked" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#basicInfo" data-toggle="tab" role="tab" aria-controls="basicInfo">Basic Information</a>
                        </li>
                        <li role="presentation">
                            <a href="#submit" data-toggle="tab" role="tab" aria-controls="submit">Submit Article</a>
                        </li>
                        <li role="presentation">
                            <a href="#statues" data-toggle="tab" role="tab" aria-controls="statues">Submition Statues</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-8">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="basicInfo">
                            <div class="sign-up-form">
                              <form class="form-horizontal" action="../doAction.php?act=update" method="post">
                                <?php

                                $sql= "Select * from user_table where id=".$theID."";
                                //$resNum=getResultNum($sql);
                                $row=fetchOne($sql);
                                $theEmail = $row['Email'];
                                $theFirstname = $row['firstname'];
                                $theLastname = $row['lastname'];
                                $theDegree = $row['Degree'];
                                $theAffiliation = $row['Affiliation'];
                                $thePhone = $row['Phone'];
                                $theCountry = $row['Region'];
                                $theWeb = $row['Webpage'];
                                $theFB = $row['Facebook'];
                                $theLK = $row['Linkedln'];
                                ?>

                                <div class="form-group">
                                    <label for="firstName" class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="sign-up-input form-control"  readonly="readonly" name= "Email" id="Email" value=<?php echo $theEmail?>> </div>
                                </div>

                                  <div class="form-group">
                                      <label for="firstName" class="col-sm-3 control-label">First Name</label>
                                      <div class="col-sm-9">
                                          <input type="text" class="sign-up-input form-control" name="firstname" id="firstName" value=<?php echo $theFirstname?> required="required"> </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                                      <div class="col-sm-9">
                                          <input type="text" class="sign-up-input form-control" name="lastname" id="lastName" value=<?php echo $theLastname?> required="required"> </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="degree" class="col-sm-3 control-label">Degree</label>
                                      <div class="col-sm-9">
                                          <select class="form-control" name="Degree" id="degree" required="required">
                                              <option value="default"><?php echo $theDegree?></option>
                                              <option value="bachelor">Bachelor</option>
                                              <option value="master">Master</option>
                                              <option value="doctor">Doctor</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="affiliation" class="col-sm-3 control-label">Affiliation</label>
                                      <div class="col-sm-9">
                                          <input type="text" class="sign-up-input form-control" name="Affiliation" id="affiliation" value=<?php echo $theAffiliation?> required="required"> </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="phone" class="col-sm-3 control-label">Phone</label>
                                      <div class="col-sm-9">
                                          <input type="text" class="sign-up-input form-control" name="Phone" id="phone" value=<?php echo $thePhone?> required="required"> </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="countryId" class="col-sm-3 control-label">Country</label>
                                      <div class="col-sm-9">
                                          <select name="Region" id="countryId" class="form-control">
                                              <option value="0">default</option>
                                              <option value="1" <?php if ($theCountry == 1 ) echo 'selected' ; ?> >Afghanistan</option>
                                              <option value="2" <?php if ($theCountry == 2 ) echo 'selected' ; ?>>Aland Islands</option>
                                              <option value="3" <?php if ($theCountry == 3 ) echo 'selected' ; ?>>Albania</option>
                                              <option value="4" <?php if ($theCountry == 4 ) echo 'selected' ; ?>>Algeria</option>
                                              <option value="5" <?php if ($theCountry == 5 ) echo 'selected' ; ?>>American Samoa</option>
                                              <option value="6" <?php if ($theCountry == 6 ) echo 'selected' ; ?>>Andorra</option>
                                              <option value="7" <?php if ($theCountry == 7 ) echo 'selected' ; ?>>Angola</option>
                                              <option value="8" <?php if ($theCountry == 8 ) echo 'selected' ; ?>>Anguilla</option>
                                              <option value="9" <?php if ($theCountry == 9 ) echo 'selected' ; ?>>Antarctica</option>
                                              <option value="10" <?php if ($theCountry == 10 ) echo 'selected' ; ?>>Antigua and Barbuda</option>
                                              <option value="11" <?php if ($theCountry == 11 ) echo 'selected' ; ?>>Argentina</option>
                                              <option value="12"<?php if ($theCountry == 12 ) echo 'selected' ; ?>>Armenia</option>
                                              <option value="13"<?php if ($theCountry == 13 ) echo 'selected' ; ?>>Aruba</option>
                                              <option value="14"<?php if ($theCountry == 14 ) echo 'selected' ; ?>>Australia</option>
                                              <option value="15"<?php if ($theCountry == 15 ) echo 'selected' ; ?>>Austria</option>
                                              <option value="16"<?php if ($theCountry == 16 ) echo 'selected' ; ?>>Azerbaijan</option>
                                              <option value="17"<?php if ($theCountry == 17 ) echo 'selected' ; ?>>Bahamas</option>
                                              <option value="18"<?php if ($theCountry == 18 ) echo 'selected' ; ?>>Bahrain</option>
                                              <option value="19"<?php if ($theCountry == 19 ) echo 'selected' ; ?>>Bangladesh</option>
                                              <option value="20"<?php if ($theCountry == 20 ) echo 'selected' ; ?>>Barbados</option>
                                              <option value="21"<?php if ($theCountry == 21 ) echo 'selected' ; ?>>Belarus</option>
                                              <option value="22"<?php if ($theCountry == 22 ) echo 'selected' ; ?>>Belgium</option>
                                              <option value="23"<?php if ($theCountry == 23 ) echo 'selected' ; ?>>Belize</option>
                                              <option value="24"<?php if ($theCountry == 24 ) echo 'selected' ; ?>>Benin</option>
                                              <option value="25"<?php if ($theCountry == 25 ) echo 'selected' ; ?>>Bermuda</option>
                                              <option value="26"<?php if ($theCountry == 26 ) echo 'selected' ; ?>>Bhutan</option>
                                              <option value="27"<?php if ($theCountry == 27 ) echo 'selected' ; ?>>Bolivia</option>
                                              <option value="28"<?php if ($theCountry == 28 ) echo 'selected' ; ?>>Bosnia and Herzegovina</option>
                                              <option value="29"<?php if ($theCountry == 29 ) echo 'selected' ; ?>>Botswana</option>
                                              <option value="30"<?php if ($theCountry == 30 ) echo 'selected' ; ?>>Bouvet Island</option>
                                              <option value="31"<?php if ($theCountry == 31 ) echo 'selected' ; ?>>Brazil</option>
                                              <option value="32"<?php if ($theCountry == 32 ) echo 'selected' ; ?>>British Indian Ocean Territory</option>
                                              <option value="33"<?php if ($theCountry == 33 ) echo 'selected' ; ?>>British Virgin Islands</option>
                                              <option value="34"<?php if ($theCountry == 34 ) echo 'selected' ; ?>>Brunei</option>
                                              <option value="35"<?php if ($theCountry == 35 ) echo 'selected' ; ?>>Bulgaria</option>
                                              <option value="36"<?php if ($theCountry == 36 ) echo 'selected' ; ?>>Burkina Faso</option>
                                              <option value="37"<?php if ($theCountry == 37 ) echo 'selected' ; ?>>Burundi</option>
                                              <option value="38"<?php if ($theCountry == 38 ) echo 'selected' ; ?>>Cambodia</option>
                                              <option value="39"<?php if ($theCountry == 39 ) echo 'selected' ; ?>>Cameroon</option>
                                              <option value="40"<?php if ($theCountry == 40 ) echo 'selected' ; ?>>Canada</option>
                                              <option value="41"<?php if ($theCountry == 41 ) echo 'selected' ; ?>>Cape Verde</option>
                                              <option value="42"<?php if ($theCountry == 42 ) echo 'selected' ; ?>>Cayman Islands</option>
                                              <option value="43"<?php if ($theCountry == 43 ) echo 'selected' ; ?>>Central African Republic</option>
                                              <option value="44"<?php if ($theCountry == 44 ) echo 'selected' ; ?>>Chad</option>
                                              <option value="45"<?php if ($theCountry == 45 ) echo 'selected' ; ?>>Chile</option>
                                              <option value="46"<?php if ($theCountry == 46 ) echo 'selected' ; ?>>China</option>
                                              <option value="47"<?php if ($theCountry == 47 ) echo 'selected' ; ?>>Christmas Island</option>
                                              <option value="48"<?php if ($theCountry == 48 ) echo 'selected' ; ?>>Cocos (Keeling) Islands</option>
                                              <option value="49"<?php if ($theCountry == 49 ) echo 'selected' ; ?>>Colombia</option>
                                              <option value="50"<?php if ($theCountry == 50 ) echo 'selected' ; ?>>Comoros</option>
                                              <option value="51"<?php if ($theCountry == 51 ) echo 'selected' ; ?>>Congo</option>
                                              <option value="52"<?php if ($theCountry == 52 ) echo 'selected' ; ?>>Cook Islands</option>
                                              <option value="53"<?php if ($theCountry == 53 ) echo 'selected' ; ?>>Costa Rica</option>
                                              <option value="54"<?php if ($theCountry == 54 ) echo 'selected' ; ?>>Croatia</option>
                                              <option value="55"<?php if ($theCountry == 55 ) echo 'selected' ; ?>>Cuba</option>
                                              <option value="56"<?php if ($theCountry == 56 ) echo 'selected' ; ?>>Cyprus</option>
                                              <option value="57"<?php if ($theCountry == 57 ) echo 'selected' ; ?>>Czech Republic</option>
                                              <option value="58"<?php if ($theCountry == 58 ) echo 'selected' ; ?>>Democratic Republic of Congo</option>
                                              <option value="59"<?php if ($theCountry == 59 ) echo 'selected' ; ?>>Denmark</option>
                                              <option value="60"<?php if ($theCountry == 60 ) echo 'selected' ; ?>>Disputed Territory</option>
                                              <option value="61"<?php if ($theCountry == 61 ) echo 'selected' ; ?>>Djibouti</option>
                                              <option value="62"<?php if ($theCountry == 62 ) echo 'selected' ; ?>>Dominica</option>
                                              <option value="63"<?php if ($theCountry == 63 ) echo 'selected' ; ?>>Dominican Republic</option>
                                              <option value="64"<?php if ($theCountry == 64 ) echo 'selected' ; ?>>East Timor</option>
                                              <option value="65"<?php if ($theCountry == 65 ) echo 'selected' ; ?>>Ecuador</option>
                                              <option value="66"<?php if ($theCountry == 66 ) echo 'selected' ; ?>>Egypt</option>
                                              <option value="67"<?php if ($theCountry == 67 ) echo 'selected' ; ?>>El Salvador</option>
                                              <option value="68"<?php if ($theCountry == 68 ) echo 'selected' ; ?>>Equatorial Guinea</option>
                                              <option value="69"<?php if ($theCountry == 69 ) echo 'selected' ; ?>>Eritrea</option>
                                              <option value="70"<?php if ($theCountry == 70 ) echo 'selected' ; ?>>Estonia</option>
                                              <option value="71"<?php if ($theCountry == 71 ) echo 'selected' ; ?>>Ethiopia</option>
                                              <option value="72"<?php if ($theCountry == 72 ) echo 'selected' ; ?>>Falkland Islands</option>
                                              <option value="73"<?php if ($theCountry == 73 ) echo 'selected' ; ?>>Faroe Islands</option>
                                              <option value="74"<?php if ($theCountry == 74 ) echo 'selected' ; ?>>Federated States of Micronesia</option>
                                              <option value="75"<?php if ($theCountry == 75 ) echo 'selected' ; ?>>Fiji</option>
                                              <option value="76"<?php if ($theCountry == 76 ) echo 'selected' ; ?>>Finland</option>
                                              <option value="77"<?php if ($theCountry == 77 ) echo 'selected' ; ?>>France</option>
                                              <option value="78"<?php if ($theCountry == 78 ) echo 'selected' ; ?>>French Guyana</option>
                                              <option value="79"<?php if ($theCountry == 79 ) echo 'selected' ; ?>>French Polynesia</option>
                                              <option value="80"<?php if ($theCountry == 80 ) echo 'selected' ; ?>>French Southern Territories</option>
                                              <option value="81"<?php if ($theCountry == 81 ) echo 'selected' ; ?>>Gabon</option>
                                              <option value="82"<?php if ($theCountry == 82 ) echo 'selected' ; ?>>Gambia</option>
                                              <option value="83"<?php if ($theCountry == 83 ) echo 'selected' ; ?>>Georgia</option>
                                              <option value="84"<?php if ($theCountry == 84 ) echo 'selected' ; ?>>Germany</option>
                                              <option value="85"<?php if ($theCountry == 85 ) echo 'selected' ; ?>>Ghana</option>
                                              <option value="86"<?php if ($theCountry == 86 ) echo 'selected' ; ?>>Gibraltar</option>
                                              <option value="87"<?php if ($theCountry == 87 ) echo 'selected' ; ?>>Greece</option>
                                              <option value="88"<?php if ($theCountry == 88 ) echo 'selected' ; ?>>Greenland</option>
                                              <option value="89"<?php if ($theCountry == 89) echo 'selected' ; ?>>Grenada</option>
                                              <option value="90"<?php if ($theCountry == 90 ) echo 'selected' ; ?>>Guadeloupe</option>
                                              <option value="91"<?php if ($theCountry == 91 ) echo 'selected' ; ?>>Guam</option>
                                              <option value="92"<?php if ($theCountry == 92 ) echo 'selected' ; ?>>Guatemala</option>
                                              <option value="93"<?php if ($theCountry == 93 ) echo 'selected' ; ?>>Guinea</option>
                                              <option value="94"<?php if ($theCountry == 94 ) echo 'selected' ; ?>>Guinea-Bissau</option>
                                              <option value="95"<?php if ($theCountry == 95 ) echo 'selected' ; ?>>Guyana</option>
                                              <option value="96"<?php if ($theCountry == 96 ) echo 'selected' ; ?>>Haiti</option>
                                              <option value="97"<?php if ($theCountry == 97 ) echo 'selected' ; ?>>Heard Island and Mcdonald Islands</option>
                                              <option value="98"<?php if ($theCountry == 98 ) echo 'selected' ; ?>>Honduras</option>
                                              <option value="99"<?php if ($theCountry == 99 ) echo 'selected' ; ?>>Hong Kong</option>
                                              <option value="100"<?php if ($theCountry == 100 ) echo 'selected' ; ?>>Hungary</option>
                                              <option value="101"<?php if ($theCountry == 101 ) echo 'selected' ; ?>>Iceland</option>
                                              <option value="102"<?php if ($theCountry == 102 ) echo 'selected' ; ?>>India</option>
                                              <option value="103"<?php if ($theCountry == 103 ) echo 'selected' ; ?>>Indonesia</option>
                                              <option value="104"<?php if ($theCountry == 104 ) echo 'selected' ; ?>>Iran</option>
                                              <option value="105"<?php if ($theCountry == 105 ) echo 'selected' ; ?>>Iraq</option>
                                              <option value="106"<?php if ($theCountry == 106 ) echo 'selected' ; ?>>Iraq-Saudi Arabia Neutral Zone</option>
                                              <option value="107"<?php if ($theCountry == 107 ) echo 'selected' ; ?>>Ireland</option>
                                              <option value="108"<?php if ($theCountry == 108 ) echo 'selected' ; ?>>Israel</option>
                                              <option value="109"<?php if ($theCountry == 109 ) echo 'selected' ; ?>>Italy</option>
                                              <option value="110"<?php if ($theCountry == 110 ) echo 'selected' ; ?>>Ivory Coast</option>
                                              <option value="111"<?php if ($theCountry == 111 ) echo 'selected' ; ?>>Jamaica</option>
                                              <option value="112"<?php if ($theCountry == 112 ) echo 'selected' ; ?>>Japan</option>
                                              <option value="113"<?php if ($theCountry == 113 ) echo 'selected' ; ?>>Jordan</option>
                                              <option value="114"<?php if ($theCountry == 114 ) echo 'selected' ; ?>>Kazakhstan</option>
                                              <option value="115"<?php if ($theCountry == 115 ) echo 'selected' ; ?>>Kenya</option>
                                              <option value="116"<?php if ($theCountry == 116 ) echo 'selected' ; ?>>Kiribati</option>
                                              <option value="117"<?php if ($theCountry == 117 ) echo 'selected' ; ?>>Kuwait</option>
                                              <option value="118"<?php if ($theCountry == 118 ) echo 'selected' ; ?>>Kyrgyzstan</option>
                                              <option value="119"<?php if ($theCountry == 119 ) echo 'selected' ; ?>>Laos</option>
                                              <option value="120"<?php if ($theCountry == 120 ) echo 'selected' ; ?>>Latvia</option>
                                              <option value="121"<?php if ($theCountry == 121 ) echo 'selected' ; ?>>Lebanon</option>
                                              <option value="122"<?php if ($theCountry == 122 ) echo 'selected' ; ?>>Lesotho</option>
                                              <option value="123"<?php if ($theCountry == 123 ) echo 'selected' ; ?>>Liberia</option>
                                              <option value="124"<?php if ($theCountry == 124 ) echo 'selected' ; ?>>Libya</option>
                                              <option value="125"<?php if ($theCountry == 125 ) echo 'selected' ; ?>>Liechtenstein</option>
                                              <option value="126"<?php if ($theCountry == 126 ) echo 'selected' ; ?>>Lithuania</option>
                                              <option value="127"<?php if ($theCountry == 127 ) echo 'selected' ; ?>>Luxembourg</option>
                                              <option value="128"<?php if ($theCountry == 128 ) echo 'selected' ; ?>>Macau</option>
                                              <option value="129"<?php if ($theCountry == 129 ) echo 'selected' ; ?>>Macedonia</option>
                                              <option value="130"<?php if ($theCountry == 130 ) echo 'selected' ; ?>>Madagascar</option>
                                              <option value="131"<?php if ($theCountry == 131 ) echo 'selected' ; ?>>Malawi</option>
                                              <option value="132"<?php if ($theCountry == 132 ) echo 'selected' ; ?>>Malaysia</option>
                                              <option value="133"<?php if ($theCountry == 133 ) echo 'selected' ; ?>>Maldives</option>
                                              <option value="134"<?php if ($theCountry == 134 ) echo 'selected' ; ?>>Mali</option>
                                              <option value="135"<?php if ($theCountry == 135 ) echo 'selected' ; ?>>Malta</option>
                                              <option value="136"<?php if ($theCountry == 136 ) echo 'selected' ; ?>>Marshall Islands</option>
                                              <option value="137"<?php if ($theCountry == 137 ) echo 'selected' ; ?>>Martinique</option>
                                              <option value="138"<?php if ($theCountry == 138 ) echo 'selected' ; ?>>Mauritania</option>
                                              <option value="139"<?php if ($theCountry == 139 ) echo 'selected' ; ?>>Mauritius</option>
                                              <option value="140"<?php if ($theCountry == 140 ) echo 'selected' ; ?>>Mayotte</option>
                                              <option value="141"<?php if ($theCountry == 141 ) echo 'selected' ; ?>>Mexico</option>
                                              <option value="142"<?php if ($theCountry == 142 ) echo 'selected' ; ?>>Moldova</option>
                                              <option value="143"<?php if ($theCountry == 143 ) echo 'selected' ; ?>>Monaco</option>
                                              <option value="144"<?php if ($theCountry == 144 ) echo 'selected' ; ?>>Mongolia</option>
                                              <option value="145"<?php if ($theCountry == 145 ) echo 'selected' ; ?>>Montserrat</option>
                                              <option value="146"<?php if ($theCountry == 146 ) echo 'selected' ; ?>>Morocco</option>
                                              <option value="147"<?php if ($theCountry == 147 ) echo 'selected' ; ?>>Mozambique</option>
                                              <option value="148"<?php if ($theCountry == 148 ) echo 'selected' ; ?>>Myanmar</option>
                                              <option value="149"<?php if ($theCountry == 149 ) echo 'selected' ; ?>>Namibia</option>
                                              <option value="150"<?php if ($theCountry == 150 ) echo 'selected' ; ?>>Nauru</option>
                                              <option value="151"<?php if ($theCountry == 151 ) echo 'selected' ; ?>>Nepal</option>
                                              <option value="152"<?php if ($theCountry == 152 ) echo 'selected' ; ?>>Netherlands</option>
                                              <option value="153"<?php if ($theCountry == 153 ) echo 'selected' ; ?>>Netherlands Antilles</option>
                                              <option value="154"<?php if ($theCountry == 154 ) echo 'selected' ; ?>>New Caledonia</option>
                                              <option value="155"<?php if ($theCountry == 155 ) echo 'selected' ; ?>>New Zealand</option>
                                              <option value="156"<?php if ($theCountry == 156 ) echo 'selected' ; ?>>Nicaragua</option>
                                              <option value="157"<?php if ($theCountry == 157 ) echo 'selected' ; ?>>Niger</option>
                                              <option value="158"<?php if ($theCountry == 158 ) echo 'selected' ; ?>>Nigeria</option>
                                              <option value="159"<?php if ($theCountry == 159 ) echo 'selected' ; ?>>Niue</option>
                                              <option value="160"<?php if ($theCountry == 160 ) echo 'selected' ; ?>>Norfolk Island</option>
                                              <option value="161"<?php if ($theCountry == 161 ) echo 'selected' ; ?>>North Korea</option>
                                              <option value="162"<?php if ($theCountry == 162 ) echo 'selected' ; ?>>Northern Mariana Islands</option>
                                              <option value="163"<?php if ($theCountry == 163 ) echo 'selected' ; ?>>Norway</option>
                                              <option value="164"<?php if ($theCountry == 164 ) echo 'selected' ; ?>>Oman</option>
                                              <option value="165"<?php if ($theCountry == 165 ) echo 'selected' ; ?>>Pakistan</option>
                                              <option value="166"<?php if ($theCountry == 166 ) echo 'selected' ; ?>>Palau</option>
                                              <option value="167"<?php if ($theCountry == 167 ) echo 'selected' ; ?>>Palestinian Territories</option>
                                              <option value="168"<?php if ($theCountry == 168 ) echo 'selected' ; ?>>Panama</option>
                                              <option value="169"<?php if ($theCountry == 169 ) echo 'selected' ; ?>>Papua New Guinea</option>
                                              <option value="170"<?php if ($theCountry == 170 ) echo 'selected' ; ?>>Paraguay</option>
                                              <option value="171"<?php if ($theCountry == 171 ) echo 'selected' ; ?>>Peru</option>
                                              <option value="172"<?php if ($theCountry == 172 ) echo 'selected' ; ?>>Philippines</option>
                                              <option value="173"<?php if ($theCountry == 173 ) echo 'selected' ; ?>>Pitcairn Islands</option>
                                              <option value="174"<?php if ($theCountry == 174 ) echo 'selected' ; ?>>Poland</option>
                                              <option value="175"<?php if ($theCountry == 175 ) echo 'selected' ; ?>>Portugal</option>
                                              <option value="176"<?php if ($theCountry == 176 ) echo 'selected' ; ?>>Puerto Rico</option>
                                              <option value="177"<?php if ($theCountry == 177 ) echo 'selected' ; ?>>Qatar</option>
                                              <option value="178"<?php if ($theCountry == 178 ) echo 'selected' ; ?>>Reunion</option>
                                              <option value="179"<?php if ($theCountry == 179 ) echo 'selected' ; ?>>Romania</option>
                                              <option value="180"<?php if ($theCountry == 180 ) echo 'selected' ; ?>>Russia</option>
                                              <option value="181"<?php if ($theCountry == 181 ) echo 'selected' ; ?>>Rwanda</option>
                                              <option value="182"<?php if ($theCountry == 182 ) echo 'selected' ; ?>>Saint Helena and Dependencies</option>
                                              <option value="183"<?php if ($theCountry == 183 ) echo 'selected' ; ?>>Saint Kitts and Nevis</option>
                                              <option value="184"<?php if ($theCountry == 184 ) echo 'selected' ; ?>>Saint Lucia</option>
                                              <option value="185"<?php if ($theCountry == 185 ) echo 'selected' ; ?>>Saint Pierre and Miquelon</option>
                                              <option value="186"<?php if ($theCountry == 186 ) echo 'selected' ; ?>>Saint Vincent and the Grenadines</option>
                                              <option value="187"<?php if ($theCountry == 187 ) echo 'selected' ; ?>>Samoa</option>
                                              <option value="188"<?php if ($theCountry == 188 ) echo 'selected' ; ?>>San Marino</option>
                                              <option value="189"<?php if ($theCountry == 189 ) echo 'selected' ; ?>>Sao Tome and Principe</option>
                                              <option value="190"<?php if ($theCountry == 190 ) echo 'selected' ; ?>>Saudi Arabia</option>
                                              <option value="191"<?php if ($theCountry == 191 ) echo 'selected' ; ?>>Senegal</option>
                                              <option value="192"<?php if ($theCountry == 192 ) echo 'selected' ; ?>>Seychelles</option>
                                              <option value="193"<?php if ($theCountry == 193 ) echo 'selected' ; ?>>Sierra Leone</option>
                                              <option value="194"<?php if ($theCountry == 194 ) echo 'selected' ; ?>>Singapore</option>
                                              <option value="195"<?php if ($theCountry == 195 ) echo 'selected' ; ?>>Slovakia</option>
                                              <option value="196"<?php if ($theCountry == 196 ) echo 'selected' ; ?>>Slovenia</option>
                                              <option value="197"<?php if ($theCountry == 197 ) echo 'selected' ; ?>>Solomon Islands</option>
                                              <option value="198"<?php if ($theCountry == 198 ) echo 'selected' ; ?>>Somalia</option>
                                              <option value="199"<?php if ($theCountry == 199 ) echo 'selected' ; ?>>South Africa</option>
                                              <option value="200"<?php if ($theCountry == 200 ) echo 'selected' ; ?>>South Georgia and South Sandwich Islands</option>
                                              <option value="201"<?php if ($theCountry == 201 ) echo 'selected' ; ?>>South Korea</option>
                                              <option value="202"<?php if ($theCountry == 202 ) echo 'selected' ; ?>>Spain</option>
                                              <option value="203"<?php if ($theCountry == 203 ) echo 'selected' ; ?>>Spratly Islands</option>
                                              <option value="204"<?php if ($theCountry == 204 ) echo 'selected' ; ?>>Sri Lanka</option>
                                              <option value="205"<?php if ($theCountry == 205 ) echo 'selected' ; ?>>Sudan</option>
                                              <option value="206"<?php if ($theCountry == 206 ) echo 'selected' ; ?>>Suriname</option>
                                              <option value="207"<?php if ($theCountry == 207 ) echo 'selected' ; ?>>Svalbard and Jan Mayen</option>
                                              <option value="208"<?php if ($theCountry == 208 ) echo 'selected' ; ?>>Swaziland</option>
                                              <option value="209"<?php if ($theCountry == 209 ) echo 'selected' ; ?>>Sweden</option>
                                              <option value="210"<?php if ($theCountry == 210 ) echo 'selected' ; ?>>Switzerland</option>
                                              <option value="211"<?php if ($theCountry == 211 ) echo 'selected' ; ?>>Syria</option>
                                              <option value="212"<?php if ($theCountry == 212 ) echo 'selected' ; ?>>Taiwan</option>
                                              <option value="213"<?php if ($theCountry == 213 ) echo 'selected' ; ?>>Tajikistan</option>
                                              <option value="214"<?php if ($theCountry == 214 ) echo 'selected' ; ?>>Tanzania</option>
                                              <option value="215"<?php if ($theCountry == 215 ) echo 'selected' ; ?>>Thailand</option>
                                              <option value="216"<?php if ($theCountry == 216 ) echo 'selected' ; ?>>Togo</option>
                                              <option value="217"<?php if ($theCountry == 217 ) echo 'selected' ; ?>>Tokelau</option>
                                              <option value="218"<?php if ($theCountry == 218 ) echo 'selected' ; ?>>Tonga</option>
                                              <option value="219"<?php if ($theCountry == 219 ) echo 'selected' ; ?>>Trinidad and Tobago</option>
                                              <option value="220"<?php if ($theCountry == 220 ) echo 'selected' ; ?>>Tunisia</option>
                                              <option value="221"<?php if ($theCountry == 221 ) echo 'selected' ; ?>>Turkey</option>
                                              <option value="222"<?php if ($theCountry == 222 ) echo 'selected' ; ?>>Turkmenistan</option>
                                              <option value="223"<?php if ($theCountry == 223 ) echo 'selected' ; ?>>Turks And Caicos Islands</option>
                                              <option value="224"<?php if ($theCountry == 224 ) echo 'selected' ; ?>>Tuvalu</option>
                                              <option value="225"<?php if ($theCountry == 225 ) echo 'selected' ; ?>>Uganda</option>
                                              <option value="226"<?php if ($theCountry == 226 ) echo 'selected' ; ?>>Ukraine</option>
                                              <option value="227"<?php if ($theCountry == 227 ) echo 'selected' ; ?>>United Arab Emirates</option>
                                              <option value="228"<?php if ($theCountry == 228 ) echo 'selected' ; ?>>United Kingdom</option>
                                              <option value="229"<?php if ($theCountry == 229 ) echo 'selected' ; ?>>USA</option>
                                              <option value="230"<?php if ($theCountry == 230 ) echo 'selected' ; ?>>United States Minor Outlying Islands</option>
                                              <option value="231"<?php if ($theCountry == 231 ) echo 'selected' ; ?>>Uruguay</option>
                                              <option value="232"<?php if ($theCountry == 232 ) echo 'selected' ; ?>>US Virgin Islands</option>
                                              <option value="233"<?php if ($theCountry == 233 ) echo 'selected' ; ?>>Uzbekistan</option>
                                              <option value="234"<?php if ($theCountry == 234 ) echo 'selected' ; ?>>Vanuatu</option>
                                              <option value="235"<?php if ($theCountry == 235 ) echo 'selected' ; ?>>Vatican City</option>
                                              <option value="236"<?php if ($theCountry == 236 ) echo 'selected' ; ?>>Venezuela</option>
                                              <option value="237"<?php if ($theCountry == 237 ) echo 'selected' ; ?>>Vietnam</option>
                                              <option value="238"<?php if ($theCountry == 238 ) echo 'selected' ; ?>>Wallis and Futuna</option>
                                              <option value="239"<?php if ($theCountry == 239 ) echo 'selected' ; ?>>Western Sahara</option>
                                              <option value="240"<?php if ($theCountry == 240 ) echo 'selected' ; ?>>Yemen</option>
                                              <option value="241"<?php if ($theCountry == 241 ) echo 'selected' ; ?>>Zambia</option>
                                              <option value="242"<?php if ($theCountry == 242 ) echo 'selected' ; ?>>Zimbabwe</option>
                                              <option value="243"<?php if ($theCountry == 243 ) echo 'selected' ; ?>>Serbia</option>
                                              <option value="244"<?php if ($theCountry == 244 ) echo 'selected' ; ?>>Montenegro</option>
                                              <option value="245"<?php if ($theCountry == 245 ) echo 'selected' ; ?>>other</option>
                                              <option value="362"<?php if ($theCountry == 362 ) echo 'selected' ; ?>>Kosovo</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="webPage" class="col-sm-3 control-label">Personal Webpage</label>
                                      <div class="col-sm-9">
                                          <input type="text" class="sign-up-input form-control" name="Webpage" id="webPage" value=<?php echo $theWeb?>> </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="faceBook" class="col-sm-3 control-label">Facebook</label>
                                      <div class="col-sm-9">
                                          <input type="text" class="sign-up-input form-control" name="Facebook" id="faceBook" value=<?php echo $theFB?>> </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="linkedIn" class="col-sm-3 control-label">LinkedIn</label>
                                      <div class="col-sm-9">
                                          <input type="text" class="sign-up-input form-control" name="Linkedln" id="linkedIn" value=<?php echo $theLK?>> </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="col-sm-offset-3 col-sm-9">
                                          <button type="submit" class="btn btn-default">Update</button>
                                      </div>
                                  </div>
                              </form>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="submit">
                            <div class="sign-up-form">
                                <form class="form-horizontal" action="../doAction.php?act=upload" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="userEmail" class="col-sm-3 control-label">Journal</label>
                                        <div class="col-sm-9">
                                          <select class="form-control" name="Journal_ID" id="Journal_ID" required="required" >
                                            <option value="0">Please select a journal</option>
                                              <option value="4">Orange</option>
                                              <option value="5">Apple</option>
                                              <option value="6">Banana</option>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Title" class="col-sm-3 control-label">PaperTitle</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="Title" class="sign-up-input form-control" id="userPwd" placeholder="Title" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Abstract" class="col-sm-3 control-label">Abstract</label>
                                        <div class="col-sm-9">
                                            <textarea name="Abstract" rows="8" cols="40"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Key" class="col-sm-3 control-label">Keywords(Please separate by ",")</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="keyword" class="sign-up-input form-control" id="lastName" placeholder="key1,key2,key3" required="required"> </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="degree" class="col-sm-3 control-label">Number of pages</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="Num_Of_Page" class="sign-up-input form-control" id="lastName" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="affiliation" class="col-sm-3 control-label">Paper File</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="Paper_Path" class="sign-up-input form-control" required="required"> </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="col-sm-3 control-label">Graphic Files</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="Photo_Path" class="sign-up-input form-control"  > </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="countryId" class="col-sm-3 control-label">Paper Field</label>
                                        <div class="col-sm-9" name= "field_select" id="field_select">

                                        </div>
                                    </div>

                                    <input type="hidden" name="USER_ID" value="<?php echo $theID;?>" >
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-default">UpLoad</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="statues">
                            <div class="sign-up-form">
                              <?php

                              $sql= "Select Title, Status, Comment from Article where USER_ID = ".$theID."";
                              //$resNum=getResultNum($sql);
                              $rows=fetchAll($sql);
                              if(!$rows){
                              	echo "sorry,no books";
                              	exit;
                              }

                              ?>
                              <?php  foreach($rows as $row):?>
                                <form class="form-horizontal form-space-button" action="">
                                    <div class="form-group">
                                        <label for="userEmail" class="col-sm-3 control-label">Name</label>
                                        <div class="col-sm-9">
                                            <span><?php echo $row['Title']?> </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userPwd" class="col-sm-3 control-label">Audit Situation</label>
                                        <div class="col-sm-9">
                                            <span><?php echo $row['Status']?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="firstName" class="col-sm-3 control-label">comment</label>
                                        <div class="col-sm-9">
                                            <span><?php echo $row['Comment']?></span>
                                        </div>
                                    </div>

                                </form>
                                  <?php endforeach;?>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="asset/bootstrap/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </div>

    <script>

    function init(){
        var select = document.getElementById("Journal_ID");
        select.onchange = getData;
    }

    function getData(e){
        var str = e.target.value;
        request = new XMLHttpRequest();
        var url  = "data.php?Journal_ID=" + str;
        request.onreadystatechange = function(){
            if (request.readyState == 4 && request.status == 200) {
                document.getElementById("field_select").innerHTML = request.responseText;
            }
        };
        request.open("GET",url,true);
        request.send(null);
    }
</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  </body>
</html>
