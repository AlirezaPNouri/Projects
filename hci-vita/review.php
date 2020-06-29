<?php include("header.php"); ?>

<h3><i class="fas fa-eye"></i> Review</h3> <hr>

 <div class="row" > <div class="col-md-3">
<div id="list-example" class="list-group">
  <a class="list-group-item list-group-item-action" href="#list-item-personal-information"><i class="fa fa-address-card"></i> Personal Information</a>
  <a class="list-group-item list-group-item-action" href="#list-item-1"><i class="fa fa-info"></i> About</a>
  
  <a class="list-group-item list-group-item-action" href="#list-item-2"><i class="fa fa-user-tie"></i> Experience</a>
  <a class="list-group-item list-group-item-action" href="#list-item-education"><i class="fa fa-user-graduate"></i> Education</a>
  <a class="list-group-item list-group-item-action" href="#list-item-4"><i class="fa fa-list"></i> Accomplishments</a>
</div>
</div>
<div class="col-md-9">
<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
  <h3 id="list-item-personal-information"><i class="fa fa-user"></i> Sayed Mohsin Reza</h3>
  <hr>
  <p>
        <b>Country: </b>United States <br>
        <b>ZIP Code: </b>79902 <br>
        <b>Location: </b>El Paso, Texas <br>
        <b>Industry: </b>Education, Software <br>
      </p>
  <h4 id="list-item-1"><i class="fa fa-info"></i> About</h4>
  <hr>
  <p>Experienced Developer with a demonstrated history of working in the computer software industry. Skilled in Computer Science, WordPress, Java, HTML, and Python. Strong knowledge in Search Engines algorithms with a Master of Science (M.Sc.) focused in Artificial Intelligence from Shahrood University of Technology. </p>
  
  <h4 id="list-item-2"><i class="fa fa-user-tie"></i> Experience</h4>
  <hr>
   <p ><b>Graduate Teaching Assistant</b> <button type="button" class="float-right btn btn-sm btn-outline-primary"><i class="far fa-edit" data-toggle="modal" data-target="#editExperienceModal"></i></button><br>
        University of Texas at El Paso<br>
        Aug 2019 - present
      </p>
      <hr>
      <p><b>Research Assistant</b> <button type="button" class="float-right btn btn-sm btn-outline-primary"><i class="far fa-edit" data-toggle="modal" data-target="#editExperienceModal"></i></button><br>
        University of Colorado Denver<br>
        Aug 2017 - May 2019
      </p>
  <h4 id="list-item-education"><i class="fa fa-user-graduate"></i> Education</h4>
  <hr>
  <p><b>University of Texas at El Paso</b> <button type="button" class="float-right btn btn-sm btn-outline-primary"><i class="far fa-edit" data-toggle="modal" data-target="#editEducationModal"></i></button> <br>
        Doctor of Philosophy - PhD, Computer Science<br>
        August 2019 - present
      </p>
      <hr>
      <p class="card-text"><b>University of Colorado Denver</b> <button type="button" class="float-right btn btn-sm btn-outline-primary"><i class="far fa-edit" data-toggle="modal" data-target="#editEducationModal"></i></button><br>
        Doctor of Philosophy - PhD, Computer Science<br>
        August 2017 - April 2019
      </p>
      <hr>
      <p class="card-text"><b>Jahangirnagar University</b> <button type="button" class="float-right btn btn-sm btn-outline-primary"><i class="far fa-edit" data-toggle="modal" data-target="#editEducationModal"></i></button><br>
        Master of Science - MSc, Information Technology<br>
        January 2015 - December 2016
      </p>
  <h4 id="list-item-4"><i class="fa fa-list"></i> Accomplishments</h4>
  <hr>
  <p> <span class="badge badge-secondary">Advance Artificial Intelligent</span>
  <span class="badge badge-secondary">Artificial Neural Network</span>
  <span class="badge badge-secondary">Fuzzy Logic</span>
  <span class="badge badge-secondary">Image Processing</span>  
  <span class="badge badge-secondary">Machine Learning</span> </p>
</div>
</div>
</div>

<?php include('footer.php'); ?>