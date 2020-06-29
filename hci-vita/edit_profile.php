<?php include("header.php"); ?>

<?php 
if(isset($_GET['status']) && $_GET['status'] == 1){
print '<div aria-live="polite" aria-atomic="true" style="position: relative;  z-index: 999;" >
  <div class="toast" style="position: absolute; top: 0; right: 0;" data-delay="5000">
    <div class="toast-header">
      <strong class="mr-auto"><i class="fa fa-sign-in"></i> Sign In</strong>
      <small>Just now</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      Welcome to VITA application. Your last sign was Monday, September 11, 2019.
    </div>
  </div>
</div>

<script type="text/javascript">
  $(\'.toast\').toast(\'show\');
</script>

';


}



?>
<h3><i class="fas fa-edit"></i> Edit Profile</h3> <hr>



<div class="card bg-warning">
  <div class="row no-gutters">
    <div class="col-md-2 text-center">
      <div class="card-body">
      <h3>1-3</h3>
      <h6>minutes</h6>
    </div>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Enter Contact Information</h5>
        <p class="card-text">You must enter contacto inforamtion about yourself into the system.</p>
      </div>
    </div>
    <div class="col-md-2 text-center">
      <div class="card-body">
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editPersonalModal"><i class="far fa-edit" ></i> Edit</button>
      
    </div>
    </div>
  </div>
</div>
<br>
<div class="card text-white bg-danger">
  <div class="row no-gutters">
    <div class="col-md-2 text-center">
      <div class="card-body">
      <h3>3-4</h3>
      <h6>minutes</h6>
    </div>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><i class="fas fa-exclamation-circle"></i> Answer Some Questions</h5>
        <p class="card-text">You must answers profile questions in order to be found in this system. The profile question are used by employers to find candidates that meet their specific job opurtunities.</p>
      </div>
    </div>
    <div class="col-md-2 text-center">
      <div class="card-body">
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editPersonalModal"><i class="far fa-edit" ></i> Edit</button>
    </div>
    </div>
  </div>
</div>

<hr>
<div class="card-columns"> 
  
 <!----------About information ---------->   
    <div class="card border-success">
      <h5 class="card-header "><i class="fas fa-info"></i> About  <button type="button" class="float-right btn btn-outline-success btn-sm " data-toggle="modal" data-target="#aboutModal"><i class="far fa-edit"></i></button></h5>
      <div class="card-body">
      <p class="card-text text-justify">
        Sayed Mohsin Reza lives in El Paso, Texas, USA. He is a Ph.D. student in the Department of Computer Science at the University of Texas at El Paso...
      </p>
      
      </div>
    </div>
  

<!----------personal information ---------->  
    <div class="card border-danger">
      <h5 class="card-header"><i class="fas fa-user-tag"></i> Personal Information <button type="button" class="float-right btn btn-sm btn-outline-danger"><i class="far fa-edit" data-toggle="modal" data-target="#editPersonalModal"></i></button></h5>
      <div class="card-body">
      <p class="card-text">
        <b>Name: </b>Sayed Mohsin Reza <br>
        <b>Country: </b>United States <br>
        <b>ZIP Code: </b>79902 <br>
        <b>Location: </b>El Paso, Texas <br>
        <b>Industry: </b>Education, Software <br>
        <b>Phone: </b> --<br>
      </p>

        
      </div>
    </div>
  

<!----------Educaion ---------->
    <div class="card border-warning">
      <h5 class="card-header"><i class="fas fa-university"></i> Educational Information <button type="button" class="float-right btn btn-sm btn-outline-success"><i class="far fa-plus" data-toggle="modal" data-target="#editEducationModal"></i></button></h5>
      <div class="card-body">
      <p class="card-text"><b>University of Texas at El Paso</b><span class="float-right"><button type="button" class=" btn btn-sm btn-outline-warning"><i class="far fa-edit" data-toggle="modal" data-target="#editEducationModal"></i></button> <button type="button" class="btn btn-sm btn-danger"><i class="far fa-trash-alt" data-toggle="modal" data-target="#editEducationModal"></i></button></span><br>
        Doctor of Philosophy - PhD, Computer Science<br>
        August 2019 - present
      </p>
      <hr>
      <p class="card-text"><b>University of Colorado Denver</b> <span class="float-right"><button type="button" class=" btn btn-sm btn-outline-success"><i class="far fa-edit" data-toggle="modal" data-target="#editEducationModal"></i></button> <button type="button" class="btn btn-sm btn-danger"><i class="far fa-trash-alt" data-toggle="modal" data-target="#editEducationModal"></i></button></span> <br>
        Doctor of Philosophy - PhD, Computer Science<br>
        August 2017 - April 2019
      </p>
      <hr>
      <p class="card-text"><b>Jahangirnagar University</b> <span class="float-right"><button type="button" class="btn btn-sm btn-outline-success"><i class="far fa-edit" data-toggle="modal" data-target="#editEducationModal"></i></button> <button type="button" class="btn btn-sm btn-danger"><i class="far fa-trash-alt" data-toggle="modal" data-target="#editEducationModal"></i></button></span><br>
        Master of Science - MSc, Information Technology<br>
        January 2015 - December 2016
      </p>

        
      </div>
    </div>


<!----------Experience ---------->
    <div class="card border-success">
      <h5 class="card-header"><i class="fas fa-briefcase"></i> Experiences  <button type="button" class="float-right btn btn-sm btn-outline-success"><i class="far fa-plus" data-toggle="modal" data-target="#editExperienceModal"></i></button></h5>
      <div class="card-body">
      <p class="card-text"><b>Graduate Teaching Assistant</b> <button type="button" class="float-right btn btn-sm btn-outline-success"><i class="far fa-edit" data-toggle="modal" data-target="#editExperienceModal"></i></button><br>
        University of Texas at El Paso<br>
        Aug 2019 - present
      </p>
      <hr>
      <p class="card-text"><b>Research Assistant</b> <button type="button" class="float-right btn btn-sm btn-outline-success"><i class="far fa-edit" data-toggle="modal" data-target="#editExperienceModal"></i></button><br>
        University of Colorado Denver<br>
        Aug 2017 - May 2019
      </p>
      </div>
    </div>

</div>




<!-------- About Modal ---------->
<div id="aboutModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit About</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php 
        $str = 'Sayed Mohsin Reza lives in El Paso, Texas, USA. He is a Ph.D. student in the Department of Computer Science at the University of Texas at El Paso. He is working as a Graduate Teaching Assistant in UTEP. Before, He was at the University of Colorado Denver, USA...';
        input_area('About','about',$str,'custom_tiny_mce','3','','T',TRUE); ?>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-------- Edit Peronal Modal ---------->
<div id="editPersonalModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Personal Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="row">
          <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control is-valid" placeholder="Enter your first name" value="Sayed Mohsin">
                    <small id="help" class="form-text text-muted">E.g. David</small>
              </div>
          </div>
          <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control is-invalid" placeholder="Enter your last name" value="">
                    <small id="help" class="form-text invalid-feedback">Please enter your lastname. </small>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Country</label>
                     <select id="country" name="country" class="form-control is-valid">
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
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
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
              </div>
          </div>
          <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">ZIP code</label>
                    <input type="text" class="form-control is-valid" placeholder="Enter your zip code" value="79902">
                    <small id="help" class="form-text text-muted">E.g. 79902</small>
              </div>
          </div>
        </div>        
        <div class="form-group">
          <label for="exampleInputEmail1">Location</label>
          <input type="text" class="form-control" placeholder="Enter your location (optional)">
          <small id="help" class="form-text text-muted">E.g. El Paso, Texas Area</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Industry</label>
          <input type="text" class="form-control" placeholder="Enter tour preferred industry (optional) ">
          <small id="help" class="form-text text-muted">E.g. Education</small>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-------- Edit Education Modal ---------->
<div id="editEducationModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Education</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="exampleInputEmail1">School</label>
          <input type="text" class="form-control" placeholder="Enter school name">
          <small id="help" class="form-text text-muted">E.g. University of Texas</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Degree</label>
          <input type="text" class="form-control" placeholder="Enter school name">
          <small id="help" class="form-text text-muted">E.g. Masters of Science</small>
        </div>
        <div class="row">
          <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Start Date</label>
                    <input type="text" class="form-control" placeholder="MM/YYYY">
                    <small id="help" class="form-text text-muted">E.g. 08/2017</small>
              </div>
          </div>
          <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">End Date</label>
                    <input type="text" class="form-control" placeholder="MM/YYYY">
                    <small id="help" class="form-text text-muted">E.g. 04/2019</small>
              </div>
          </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-------- Edit Experience Modal ---------->
<div id="editExperienceModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Experience</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" class="form-control is-valid" placeholder="Enter job title" value= "Assistant Professor">
          <small id="help" class="form-text text-muted">E.g. Assistant Professor</small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Employment Type</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Full-time</option>
                  <option>Part-time</option>
                  <option>Self-emplyed</option>
                  <option>Internship</option>
                  <option>Freelance</option>
                  <option>Other</option>
                </select>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Company</label>
          <input type="text" class="form-control" placeholder="Enter company name">
          <small id="help" class="form-text text-muted">E.g. University of Texas at El Paso</small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Location</label>
          <input type="text" class="form-control" placeholder="Enter job location">
          <small id="help" class="form-text text-muted">E.g. El Paso, Texas Area</small>
        </div>
        <div class="row">
          <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Start Date</label>
                    <input type="text" class="form-control is-valid" placeholder="MM/YYYY" value ="08/2017">
                    <small id="help" class="form-text text-muted">E.g. 08/2017</small>
              </div>
          </div>
          <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">End Date</label>
                    <input type="text" class="form-control is-invalid" placeholder="MM/YYYY" value="14/2019">
                    <small id="help" class="form-text invalid-feedback">Enter month value between 01-12</small>
              </div>
          </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description (optional)</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php 
print load_tiny_mce('300');

include('footer.php'); ?>