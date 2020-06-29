
<?php include("header.php"); ?>
  <!-- Main jumbotron for a primary marketing message or call to action -->
<h3><i class="fas fa-question"></i> Frequntly Asked Question (FAQ)</h3> <hr>

<?php
$qas = array( 
  0 =>array('question' => 'Can I make a resume for free?' , 'answer' => "Yes, vita.com is the best place to build, print, download, and post your resume online for free. There's absolutely no cost and it's easy to start (and finish) writing your professional resume. Use our free online resume builder to create the perfect resume in just minutes!"),
  1 => array('question' => 'How do you create a professional resume?', 'answer' => 'We can help you in creating your professional resume just within 5 steps. Try now our application.')
);


print ' <div class="form-group">
    
    <input type="name" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search your question">
  </div>';

print '<div class="accordion" id="accordionExample">';
foreach ($qas as $key => $value) {
  
  print '<div class="card">
    <div class="card-header" id="heading'.$key.'">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse'.$key.'" aria-expanded="true" aria-controls="collapse'.$key.'">
         '.$value['question'].'
        </button>
      </h2>
    </div>

    <div id="collapse'.$key.'" class="collapse" aria-labelledby="heading'.$key.'" data-parent="#accordionExample">
      <div class="card-body">
       '.$value['answer'].'
      </div>
    </div>
  </div> ';
}
print '</div>

<br>

<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center">Don\'t Find Your Question</h5>
    <h6 class="card-subtitle mb-2 text-muted text-center">You can ask your question here</h6>
     <div class="form-group">
    <label for="exampleInputEmail1">Your Name <span class="text-danger">*</span></label>
    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We\'ll never share your name & email with anyone else.</small>
  </div>
     <div class="form-group">
    <label for="exampleInputEmail1">Your Email address <span class="text-danger">*</span></label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We\'ll never share your email with anyone else.</small>
  </div>';
input_area('Your Question','question','','custom_tiny_mce','3','','T',TRUE);
    print '<button type="submit" class="btn btn-primary">Send</button>
  </div>
</div>

';




print load_tiny_mce('300');
include('footer.php'); ?>