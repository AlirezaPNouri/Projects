<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    .breadcrumb-item + .breadcrumb-item::before {
        content: ">";
    }
    </style>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.2/js/umd/util.js"></script>
    <script src="https://cdn.tiny.cloud/1/tm123gedjb5ba1xckv8bro7bairtq81zrerp27dixurnyd9i/tinymce/5/tinymce.min.js"></script>
    <title>VITA - Home</title>
  </head>

<body>

    <nav class="navbar navbar-expand-lg sticky-top  navbar-dark bg-primary" >
        <a class="navbar-brand" href="home.php"><b><i class="fab fa-firstdraft"></i> VITA</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php"><i class="fa fa-home"></i> Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="faq.php"><i class="fa fa-question"></i> FAQ</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
      </li>
      <?php if(basename($_SERVER['REQUEST_URI'], ".php") != 'home'){ ?>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user"></i> Sayed Mohsin Reza
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="edit_profile.php"><i class="fa fa-edit"></i> Edit Profile</a>
          <a class="dropdown-item" href="review.php"><i class="fa fa-eye"></i> View Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="home.php?status=1"><i class="fa fa-sign-out"></i> Log Out</a>
        </div>
      </li>
    <?php }  ?>
      
    </ul>
    </form>
  </div>
</nav>
<br>

<!--body start-->

<div class="container-fluid">

<!---breadcrumb---->
<?php
$files = array(
    'home' => array('icon' =>'fas fa-home' , 'name' => 'Home'),  
    'edit_profile' => array('icon' => 'fas fa-edit', 'name' => 'Edit Profile'),
    'review' => array('icon' => 'fas fa-eye', 'name' => 'Review'),
    'job_requirement' => array('icon' => 'fas fa-briefcase', 'name' => 'Job Requirement'),
    'recommendation' => array('icon' => 'fas fa-file-user', 'name' => 'Recommendation'),);

if(basename($_SERVER['REQUEST_URI'], ".php") != 'home'){

print '<nav aria-label="breadcrumb"> <ol class="breadcrumb">';    
    foreach ($files as $key => $value) {
       if(basename($_SERVER['REQUEST_URI'], ".php") == $key){
          print '<li class="breadcrumb-item"><i class="'.$value['icon'].'"></i> '.$value['name'].'</li>';
       }else{
          print '<li class="breadcrumb-item"><a href="'.$key.'.php"><i class="'.$value['icon'].'"></i> '.$value['name'].'</a></li>';
       }
    }
  print '</ol></nav>';
}

//must call load_tiny_mce function
function input_tiny_mce($label,$name,$value='',$help=''){
    $str="";
    $str.=input_area($label,$name,$value,'custom_tiny_mce','3',$help,'F');
    return $str;
}

//------------------ Design: textarea --------------//
// the function will not be used in future version. use create_textarea function instead of this    
function input_area($label,$name,$value='',$class='',$rows='3',$help='',$print='T',$required=false){
        if($required==false){$required='';$asterisk='';}else {$required='required';$asterisk='<span class="text-danger">*</span>';}
        if($class=='')$class='form-control';
        $str=  '<div class="form-group">
        <label for="'.$name.'" class="col-form-label">'.$label.$asterisk.'</label>
        <textarea rows="'.$rows.'" class ="'.$class.'" id="'.$name.'" aria-describedby="'.$name.'_helpBlock" name="'.$name.'" placeholder="'.$label.'" '.$required.'>'.$value.'</textarea>
        <span id="'.$name.'_helpBlock" class="help-block">'.$help.'</span>
        
        </div>';
        if($print=='T')print $str;else return $str;
}
//------------------ Design: textarea --------------//

function load_tiny_mce($height="600"){

    return "
    <script>
    tinymce.init({
      selector: 'textarea.custom_tiny_mce',
      height: ".$height.",
      theme: 'silver',
      plugins: [
          'advlist autolink lists link image charmap print preview hr anchor pagebreak',
          'searchreplace wordcount visualblocks visualchars code fullscreen',
          'insertdatetime media nonbreaking save table directionality',
          'emoticons template paste textpattern imagetools codesample'
      ],
      toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
      toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
      image_advtab: true,
      templates: [
          { title: 'Test template 1', content: 'Test 1' },
          { title: 'Test template 2', content: 'Test 2' }
      ],
      content_css: [
          '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i'
      ]
  });

  </script>

  ";

}


?>

