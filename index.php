

<?php
  $xmldata = file_get_contents("QUALIFICATION.xml");
  $xml_parse = simplexml_load_string($xmldata);
//echo "<pre>";print_r($xml_parse);echo "</pre>";

foreach ($xml_parse as $k=> $v) {
  // code...
  //echo "<pre>";print_r($v);echo "</pre>";
  echo $v->QUALIFICATION_TITLE." ".$v->QUALIFICATION_ID.'</br>';
}
?>
