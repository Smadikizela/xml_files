

<?php
  $xmldata = file_get_contents("QUALIFICATION.xml");
  $xml_parse = simplexml_load_string($xmldata);
//echo "<pre>";print_r($xml_parse);echo "</pre>";


foreach ($xml_parse as $k=> $v) {
  // code...
  //echo "<pre>";print_r($v);echo "</pre>";
  //echo $v->QUALIFICATION_TITLE." ".$v->QUALIFICATION_ID.'</br>';
}
?>
<table border="1">
  <thead>
    <tr>
      <th>
      DOWNLOAD_DATE
</th>
<th>
LAST_UPDATE_DATE
</th>
<th>
QUALIFICATION_ID
</th>
<th>
QUALIFICATION_TITLE
</th>
<th>
SGB_ID
</th>
<th>
FIELD_ID
</th>
<th>
FIELD
</th>
<th>
PROVIDER_ID
</th>
<th>
PROVIDER_CODE
</th>
<th>
PROVIDER_NAME
</th>
<th>
PROVIDER_ETQA_ID
</th>
<th>
ETQA_ID
</th>
<th>
ETQA_ACRONYM
</th>
<th>
ETQA_NAME
</th>
<th>
QUALIFICATION_TYPE_ID
</th>
<th>
QUALIFICATION_TYPE_DESC
</th>
<th>
NQF_SUBFRAMEWORK_ID
</th>
<th>
NQF_SUBFRAMEWORK_ACRONYM
</th>
<th>
NQF_SUBFRAMEWORK_DESC
</th>
<th>
FIELD_DESCRIPTION
</th>
<th>
SUBFIELD_ID
</th>
<th>
SUBFIELD_DESCRIPTION
</th>
<th>
ABET_BAND_ID
</th>
<th>
ABET_BAND_DESCRIPTION
</th>
<th>
QUALIFICATION_MINIMUM_CREDITS
</th>
<th>
NQF_LEVEL_ID
</th>
<th>
NQF_LEVEL_DESCRIPTION
</th>
<th>
NQF_LEVEL_G2_ID
</th>
<th>
NQF_LEVEL_G2_DESCRIPTION
</th>
<th>
QUALIFICATION_CLASS_ID
</th>
</th>
<th>
QUALIFICATION_CLASS_DESC
</th>
<th>
QUALIFICATION_PURPOSE
</th>
<th>
QUALIFICATION_NOTES
</th>
<th>
REGISTRATION_STATUS_CODE
</th>
<th>
REGISTRATION_STATUS_DESC
</th>
<th>
SAQA_DECISION_NUMBER
</th>
<th>
QUAL_REGISTRATION_START_DATE
</th>
<th>
QUAL_REGISTRATION_END_DATE
</th>
<th>
TRANSITION_PERIOD
</th>
<th>
LAST_DATE_FOR_ENROLMENT
</th>
<th>
TRAIN_OUT_PERIOD
</th>
<th>
LAST_DATE_FOR_ACHIEVEMENT
</th>
<th>
IS_LEARNING_PROGRAMME
</th>
<th>
QUALIFICATION_ID
</th>
<th>
US_QUAL_TYPE_CODE
</th>
<th>
US_QUAL_TYPE_DESCRIPTION
</th>
<th>
UNIT_STANDARD_ID
</th>
<th>
UNIT_STD_TITLE
</th>
<th>
NQF_LEVEL_ID
</th>
<th>
NQF_LEVEL_DESCRIPTION
</th>
<th>
NQF_LEVEL_G2_ID
</th>
<th>
NQF_LEVEL_G2_DESCRIPTION
</th>
<th>
UNIT_STD_NUMBER_OF_CREDITS
</th>
</tr>
</thead>
<tbody>
  <?php foreach($xml_parse as $k=> $v) :?>
    <tr>
      <td><?php echo $v->DOWNLOAD_DATE; ?></td>
      <td><?php echo $v->LAST_UPDATE_DATE; ?></td>
      <td><?php echo $v->QUALIFICATION_ID; ?></td>
      <td><?php echo $v->QUALIFICATION_TITLE; ?></td>
      <td><?php echo $v->SGB_ID; ?></td>
      <td><?php echo $v->FIELD_ID; ?></td>
      <td><?php echo $v->FIELD; ?></td>
      <td><?php echo $v->PROVIDER_ID; ?></td>
      <td><?php echo $v->PROVIDER_CODE; ?></td>
      <td><?php echo $v->PROVIDER_NAME; ?></td>
      <td><?php echo $v->PROVIDER_ETQA_ID; ?></td>
      <td><?php echo $v->ETQA_ID; ?></td>
      <td><?php echo $v->ETQA_ACRONYM; ?></td>
      <td><?php echo $v->ETQA_NAME; ?></td>
      <td><?php echo $v->QUALIFICATION_TYPE_ID; ?></td>
      <td><?php echo $v->QUALIFICATION_TYPE_DESC; ?></td>
      <td><?php echo $v->NQF_SUBFRAMEWORK_ID; ?></td>
      <td><?php echo $v->NQF_SUBFRAMEWORK_ACRONYM; ?></td>
      <td><?php echo $v->NQF_SUBFRAMEWORK_DESC; ?></td>
      <td><?php echo $v->FIELD_DESCRIPTION; ?></td>
      <td><?php echo $v->SUBFIELD_ID; ?></td>
      <td><?php echo $v->SUBFIELD_DESCRIPTION; ?></td>
      <td><?php echo $v->ABET_BAND_ID; ?></td>
      <td><?php echo $v->ABET_BAND_DESCRIPTION; ?></td>
      <td><?php echo $v->QUALIFICATION_MINIMUM_CREDITS; ?></td>
      <td><?php echo $v->NQF_LEVEL_ID; ?></td>
      <td><?php echo $v->NQF_LEVEL_DESCRIPTION; ?></td>
      <td><?php echo $v->NQF_LEVEL_G2_ID; ?></td>
      <td><?php echo $v->NQF_LEVEL_G2_DESCRIPTION; ?></td>
      <td><?php echo $v->QUALIFICATION_CLASS_ID; ?></td>
      <td><?php echo $v->QUALIFICATION_CLASS_DESC; ?></td>
      <td><?php  echo $v->QUALIFICATION_PURPOSE; ?></td>
      <td><?php echo $v->QUALIFICATION_NOTES; ?></td>
      <td><?php echo $v->REGISTRATION_STATUS_CODE; ?></td>
      <td><?php echo $v->REGISTRATION_STATUS_DESC; ?></td>
      <td><?php echo $v->SAQA_DECISION_NUMBER; ?></td>
      <td><?php echo $v->QUAL_REGISTRATION_START_DATE; ?></td>
      <td><?php echo $v->QUAL_REGISTRATION_END_DATE; ?></td>
      <td><?php echo $v->TRANSITION_PERIOD; ?></td>
      <td><?php echo $v->LAST_DATE_FOR_ENROLMENT; ?></td>
      <td><?php echo $v->TRAIN_OUT_PERIOD; ?></td>
      <td><?php echo $v->LAST_DATE_FOR_ACHIEVEMENT; ?></td>
      <td><?php echo $v->IS_LEARNING_PROGRAMME; ?></td>
      <td><?php echo $v->US_QUALIFICATION_LINK->QUALIFICATION_ID; ?></td>
      <td><?php echo $v->US_QUALIFICATION_LINK->US_QUAL_TYPE_CODE; ?></td>
      <td><?php echo $v->US_QUALIFICATION_LINK->US_QUAL_TYPE_DESCRIPTION; ?></td>
      <td><?php echo $v->US_QUALIFICATION_LINK->UNIT_STANDARD_ID; ?></td>
      <td><?php echo $v->US_QUALIFICATION_LINK->UNIT_STD_TITLE; ?></td>
      <td><?php echo $v->US_QUALIFICATION_LINK->NQF_LEVEL_ID; ?></td>
      <td><?php echo $v->US_QUALIFICATION_LINK->NQF_LEVEL_DESCRIPTION; ?></td>
      <td><?php echo $v->US_QUALIFICATION_LINK->NQF_LEVEL_G2_ID; ?></td>
      <td><?php echo $v->US_QUALIFICATION_LINK->NQF_LEVEL_G2_DESCRIPTION; ?></td>
      <td><?php echo $v->US_QUALIFICATION_LINK->UNIT_STD_NUMBER_OF_CREDITS; ?></td>
  </tr>
  <?php endforeach;?> 
</tbody>
</table>