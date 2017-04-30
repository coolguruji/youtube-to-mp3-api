<?php

 // MULTIPLE YOUTUBE VIDEO ID's SEPARATED BY COMMNA (,)
 $ids = 'lF-jPBnZ098,OmAlu5T44t8,GTJHrHHAElU';

 // FETCHING DATA FROM SERVER
 $jsonData = file_get_contents("http://api.youtube6download.top/api/?id=$ids");
 $response = json_decode($jsonData,TRUE);

 foreach($response as $div) {

 // FOR DIRECT HTML LINK
 if(isset($div['html'])) {
  echo $div['html'] . "<br/>";
 }

 echo "<br><hr><br>";

 // FOR A HREF LINK
 if(isset($div['link'])) {
  echo $div['link'] . "<br/>";
 }

 echo "<br><hr><br>";

 // FOR JAVASCRIPT EMBED CODE
 if(isset($div['js'])) {
  echo $div['js'] . "<br/>";
 }

 echo "<br><hr><br>";

 // FOR IFRAME LINK EMBED CODE
 if(isset($div['iframe'])) {
  echo $div['iframe'] . "<br/>";
 }

}

?>
