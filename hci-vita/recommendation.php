<?php include("header.php"); ?>



<div class="text-center">
  <h1 class="display-4">Your Professional Resume</h1>
  <p class="lead">To download your final resume, select a resume template below</p>
    <p>You can make as many resumes as you need to find the job you want!</p>
</div>




<div class= "row">

<div class= "col-sm-3">	
<br><br><br>
<div class="card text-center">
  <h5 class="card-header">Academic Resume</h5>
  
  <div class="card-body">
    <h2 class="card-title"><span class="badge badge-pill badge-primary">2</span></h2>
    <p class="card-text">an academic CV typically does not include a skills summary or qualifications profile since these types of career highlights will be presumed</p>
    <img src="image/1.png" class="img-fluid img-thumbnail" alt="Responsive image">
  </div>
  <div class="card-body">
  <button type="button" class="btn btn-sm btn-outline-primary"  data-toggle="modal" data-target="#editRecommendedCVModal">Download Academic Resume</button>
</div>
</div>
</div>

<div class= "col-sm-6"> 
<div class="card text-center">
  <h5 class="card-header">Industrial Resume</h5>
  
  <div class="card-body">
    <h1 class="card-title"><span class="badge badge-pill badge-primary">1</span></h1>
    <p class="card-text">The type of jobs include producers, manufacturers, maintenance, oil field workers and equipment operators. </p>
    <img src="image/1.png" class="img-fluid img-thumbnail" alt="Responsive image">

  </div>
  <div class="card-body">
  <button type="button" class="btn btn-sm btn-outline-primary"  data-toggle="modal" data-target="#editRecommendedCVModal">Download Business Resume</button>
</div>
</div>
</div>

<div class= "col-sm-3"> 
  <br><br><br>
<div class="card text-center">
  <h5 class="card-header">Volunteer Resume</h5>
  
  <div class="card-body">
    <h3 class="card-title"><span class="badge badge-pill badge-primary">3</span></h3>
    <p class="card-text">Use our Volunteer resume sample to create your own great resume for Volunteer jobs.</p>
    <img src="image/1.png" class="img-fluid img-thumbnail" alt="Responsive image">
    
	<!--a href="#" class="btn btn-primary">Go somewhere</a-->
	
	

  </div>
  <div class="card-body">
  <button type="button" class="btn btn-sm btn-outline-primary"  data-toggle="modal" data-target="#editRecommendedCVModal">Download Volunteer Resume</button>
</div>
</div>

</div>

</div>




<!---Recommendation for CV Modal END-->
<div id="editRecommendedCVModal" class="modal text-center" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content card">
      <div class="modal-header">
        <h5 class="modal-title">Suggested Resume</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <a role="button" href="resume.pdf" target="_blank" class="btn btn-primary text-center"><i class="fas fa-external-link-alt"></i> View</a> |
        <a role="button" href="resume.pdf" target="_blank" class="btn btn-success text-center"><i class="fas fa-download"></i> Download</a> |
      <a role="button" href="customization.php" target="_blank" class="btn btn-info text-center"><i class="fas fa-cog"></i> Customization</a>
        <hr>
        <embed src="resume.pdf" width="100%" height="600px" />
      <div class="modal-footer">
       <button type="button" class="btn btn-primary text-center"><i class="fas fa-external-link-alt"></i> View</button> | 
        <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download</button>
      </div>
    </div>
  </div>
</div>

<!---Recommendation for CV END-->
</div>
<?php include('footer.php'); ?>