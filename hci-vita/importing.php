<?php
include("header.php");
print '<h3><i class="fas fa-file-import"></i> Importing your data</h3> <hr>
We are collecting your data from your linkedin account. Give us some moment...
';


print '<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
</div>
<h5><b>Time Passed </b><time>00:00:00</time></h5>
<desc></desc>
';


include("footer.php");
?>

<script type="text/javascript">
	var desc = document.getElementsByTagName('desc')[0];
	var h5 = document.getElementsByTagName('time')[0],
	seconds = 0, minutes = 0, hours = 0, t;
	var strings = ["Checking login...","Importing Personal Information...", "Importing Educational Information...", "Importing Experiences...", "Importing Skills..."];
function add() {
    seconds++;
    if (seconds >= 60) {
        seconds = 0;
        minutes++;
        if (minutes >= 60) {
            minutes = 0;
            hours++;
        }
    }
    
    h5.textContent = (hours ? (hours > 9 ? hours : "0" + hours) : "00") + ":" + (minutes ? (minutes > 9 ? minutes : "0" + minutes) : "00") + ":" + (seconds > 9 ? seconds : "0" + seconds);

    
    	$('.progress-bar').css('width', (seconds*10)+'%').attr('aria-valuenow', (seconds*10));    
    if(seconds%2==0){
    	desc.innerHTML += '<i class="fa fa-check"></i> '+strings[(seconds/2)-1]+'<br>';
    }
    if(seconds ==10 ){
    	window.location.replace("edit_profile.php");
    }

    timer();
}
function timer() {
    t = setTimeout(add, 1000);
}
timer();
</script>