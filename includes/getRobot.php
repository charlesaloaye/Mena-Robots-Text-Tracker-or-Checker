<?php 

$url = $_POST['url'];

if(isset($_POST['track'])) 

if (substr($url, 0, 7) =='http://' || substr($url, 0, 8) =='https://') {

$robotsUrl = $url.'/robots.txt';

$finalTrack = file_get_contents($robotsUrl);

if(($finalTrack))

$status = "<div class=' alert alert-success'>
<textarea rows='15' cols='45' style='resize: none;'>$finalTrack</textarea></div>";

else 

$status = "<div class='alert alert-danger'>No Robot Text Found</div>";

} else 

$status = "<div class='alert alert-danger'>Domain must start with http:// or https://</div>";

