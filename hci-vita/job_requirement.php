<?php include("header.php"); ?>


  <h3><i class="fas fa-briefcase"></i> Job Requirement</h3><hr>

        <div class="card">
          <h5 class="card-header"><i class="fas fa-briefcase"></i> Existing Job Links</h5>
          <div class="card-body">

            <form>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="linkedIn" class="form-label">Choose the website</label>
                    <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Linked In
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Indeed
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Other
  </label>
</div>
                  </div>
                </div>
                <div class="col-sm-6">
              <div class="form-group">
                <label for="indeedId" class="form-label">Link</label>
                  <input type="text" class="form-control" id="indeedId" placeholder="Paste Job Link">
              </div>
            </div>
            
            <div class="col-sm-3">
              <br>
              <button class="btn btn-success"><i class="fa fa-file-import"></i> Fetch Job Requirements</button>
            </div>
          </div>      
            </form>
          </div>

    </div>

<h3 class="text-center"> ---------OR---------</h3>
    <div class="card">
          <h5 class="card-header"><i class="fas fa-briefcase"></i> Custom Job Requirements</h5>
  <div class="card-body">
              <form>
        
                 <?php input_area('Job Description','d','','custom_tiny_mce','3','','T',TRUE); ?>
              </form>
            </div>
          </div>

      

<br>
 <div class="form-group text-center" >
    
      <a role="button" href="recommendation.php" class="btn btn-primary btn-lg" ><i class ="fa fa-cog"></i> Build my resume</a>
    
  </div>


    
<?php 
print load_tiny_mce('300');
include('footer.php'); ?>