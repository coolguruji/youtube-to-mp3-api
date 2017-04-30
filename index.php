<?php

 // YOUTUBE VIDEO ID
 $id = 'lF-jPBnZ098';

 // FETCHING DATA FROM SERVER
 $jsonData = file_get_contents("http://api.youtube6download.top/api/?id=$id");
 $links = json_decode($jsonData,TRUE);

 // FOR DIRECT HTML LINK
 if(isset($links['data']['html'])) {
  echo $links['data']['html'];
 }

 // FOR A HREF LINK
 if(isset($links['data']['link'])) {
  echo $links['data']['link'];
 }

 // FOR JAVASCRIPT EMBED CODE
 if(isset($links['data']['js'])) {
  echo $links['data']['js'];
 }

 // FOR IFRAME LINK EMBED CODE
 if(isset($links['data']['iframe'])) {
  echo $links['data']['iframe'];
 }

?>
