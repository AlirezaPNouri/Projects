<?php 
$error_message ='';

if(isset($_POST['email'])) $email =  $_POST['email']; else $email='';
if(isset($_POST['password'])) $password =  $_POST['password']; else $password='';  


if($email == 'smrezaiit@gmail.com' && $password == 'reza'){
  header("Location: edit_profile.php?status=1");
  die();
}else{

  if($email!='')  $error_message ='password is incorrect. Try again';
}

?>
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

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <div class="row"><div class="col-md-8">

      
      <h1 class="display-3 text-center"><img src="image/logo.png" width="100" height="100" alt="">Vita</h1>
      <p class="text-center"><i>“Customizable Resume Maker Based on Job Requirements”</i><br>A web application having a concept of Artificial Intelligence (AI) to understand job requirements and build customized resumes for your jobs.</p>
      <p class="text-center"><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
    </div>

  <div class="col-md-4">
    <div class="card">
  <div class="card-header">
    <i class="fab fa-keycdn"></i> Access your account
  </div>
  <div class="card-body">
    <form method="post" action="home.php">
  <div class="form-group">
   
  <?php if(isset($_POST['email'])) echo ' <div class="alert alert-danger" role="alert">'.$error_message.'</div>' ?>

    <label for="userEmail"><i class="fa fa-envelope"></i> Email address</label>
    <input name="email" type="email" class="form-control is-invalid" id="userEmail" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $email;?>">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><i class="fa fa-key"></i> Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in-alt"></i> Login</button>
   |  <a class="btn btn-outline-primary" href="importing.php" role="button">Login with <i class="fab fa-linkedin"></i> LinkedIn</a> 
   <hr>
   <button type="submit" class="btn btn-block btn-success"><i class="fa fa-user-plus"></i> Sign Up</button>
</form>
  </div>
</div>
  </div>
</div>
  </div>
</div>



  <div >
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
        <h1 class="display-4"><i class="fas fa-file-import"></i></h1>
        <h2>Easy Importing</h2>
        <p class="text-justify">User can import CV from social and educational website. After emport user can dynamically make different styles may help users to decide which actions to take. </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div>
      <div class="col-md-4">
        <h1 class="display-4"><i class="fas fa-file-user"></i></h1>
        <h2>Customizable CV</h2>
        <p class="text-justify">For diiferent job, user can make changes in CV to focus on different section. User also get some recommended style and customization based on job requirements. </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div>
      <div class="col-md-4">
        <h1 class="display-4"><i class="fas fa-file"></i></h1>
        <h2>Recommended CV</h2>
        <p class="text-justify">AI based recommendation will help the user to understand the important section described in job requirement. It is also time consuming.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div>
    </div>

    <hr>

  </div> <!-- /container -->

<script>
 function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}
function check(){
  if( $('#userEmail').val()=='' ) {
      $('#userEmail').removeClass('is-valid');
      $('#userEmail').removeClass('is-invalid');
    }
    else if( !validateEmail($('#userEmail').val())) { 
      $('#userEmail').removeClass('is-valid');
      $('#userEmail').addClass('is-invalid');

     }else{
      $('#userEmail').removeClass('is-invalid');
      $('#userEmail').addClass('is-valid');
     }
}
  $(document).ready(function() {
  check();
  $('#userEmail').on('input', function() {
    check();
});
});
</script>
<?php include('footer.php'); ?>