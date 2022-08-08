<?php

$xmldata = file_get_contents("QUALIFICATION.xml");
$xml_parse = simplexml_load_string($xmldata);


$qualifications = [];
foreach ($xml_parse as $k => $v) {
    $qualifications[] = array(
        'QUALIFICATION_ID' => $v->QUALIFICATION_ID, 'QUALIFICATION_TITLE' => $v->QUALIFICATION_TITLE, 'QUALIFICATION_NOTES' => substr(strip_tags($v->QUALIFICATION_NOTES), 4, 30), 'NQF_LEVEL_ID' => $v->NQF_LEVEL_ID, 'QUAL_REGISTRATION_START_DATE' => $v->QUAL_REGISTRATION_START_DATE, 'QUAL_REGISTRATION_END_DATE' => $v->QUAL_REGISTRATION_END_DATE
    );

    if ($v->US_QUALIFICATION_LINK && !empty($v->US_QUALIFICATION_LINK)) {
        foreach ($v->US_QUALIFICATION_LINK as $UNIT_STANDARD_ID) {
            $qualifications['QUALIFICATION_ID'][$UNIT_STANDARD_ID['QUALIFICATION_ID']][] = array('UNIT_STANDARD_ID' => $UNIT_STANDARD_ID, 'UNIT_STD_TITLE' => $UNIT_STANDARD_ID, 'US_QUAL_TYPE_DESCRIPTION' => $UNIT_STANDARD_ID, 'UNIT_STD_NUMBER_OF_CREDITS' => $UNIT_STANDARD_ID);
        }
    }
}

print_r($qualifications);
