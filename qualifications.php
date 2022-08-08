<?php

$xmldata = file_get_contents("QUALIFICATION.xml");
$xml_parse = simplexml_load_string($xmldata);


$qualifications=[];
   foreach ($xml_parse as $k => $v) { 
$qualifications[]=array('QUALIFICATION_ID'=>$v->QUALIFICATION_ID,'QUALIFICATION_TITLE'=>$v->QUALIFICATION_TITLE,'QUALIFICATION_NOTES'=>substr(strip_tags($v->QUALIFICATION_NOTES), 4, 30),'level'=>$v->level
,'QUAL_REGISTRATION_START_DATE'=>$v->QUAL_REGISTRATION_START_DATE,'QUAL_REGISTRATION_END_DATE'=>$v->QUAL_REGISTRATION_END_DATE);

if($v->US_QUALIFICATION_LINK && !empty($v->US_QUALIFICATION_LINK)){
    foreach($v->US_QUALIFICATION_LINK as $UNIT_STANDARD_ID){ 
    $myArray['QUALIFICATION_ID'][$UNIT_STANDARD_ID['QUALIFICATION_ID']]['unit_standards'][]=array('UNIT_STANDARD_ID'=>$UNIT_STANDARD_ID['UNIT_STANDARD_ID']);
    }
   }
   if($v->US_QUALIFICATION_LINK && !empty($v->US_QUALIFICATION_LINK)){
    foreach($v->US_QUALIFICATION_LINK as $UNIT_STD_TITLE){ 
    $myArray['QUALIFICATION_ID'][$UNIT_STD_TITLE['QUALIFICATION_ID']]['unit_standards'][]=array('UNIT_STD_TITLE'=>$UNIT_STD_TITLE['UNIT_STD_TITLE']);
    }
   }
   if($v->US_QUALIFICATION_LINK && !empty($v->US_QUALIFICATION_LINK)){
    foreach($v->US_QUALIFICATION_LINK as $US_QUAL_TYPE_DESCRIPTION){ 
    $myArray['QUALIFICATION_ID'][$US_QUAL_TYPE_DESCRIPTION['QUALIFICATION_ID']]['unit_standards'][]=array('US_QUAL_TYPE_DESCRIPTION'=>$US_QUAL_TYPE_DESCRIPTION['US_QUAL_TYPE_DESCRIPTION']);
    }
   }
   if($v->US_QUALIFICATION_LINK && !empty($v->US_QUALIFICATION_LINK)){
    foreach($v->US_QUALIFICATION_LINK as $UNIT_STD_NUMBER_OF_CREDITS){
    $myArray['QUALIFICATION_ID'][$UNIT_STD_NUMBER_OF_CREDITS['QUALIFICATION_ID']]['unit_standards'][]=array('UNIT_STD_NUMBER_OF_CREDITS'=>$UNIT_STD_NUMBER_OF_CREDITS['UNIT_STD_NUMBER_OF_CREDITS']);
    }
   }
}

   print_r($qualifications);