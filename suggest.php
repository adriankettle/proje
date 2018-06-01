<?php

//People array
$people[] = "George";
$people[] = "Mary";
$people[] = "Kimone";
$people[] = "Monica";
$people[] = "Monique";
$people[] = "Simone";
$people[] = "Samantha";
$people[] = "Charlene";
$people[] = "Hilory";
$people[] = "Nadine";
$people[] = "Natalee";
$people[] = "Natasha";
$people[] = "Natoya";
$people[] = "Mellisha";
$people[] = "Nadica";
$people[] = "Nellisa";
$people[] = "Nicola";
$people[] = "Olivia";
$people[] = "Phiona";
$people[] = "Wendy";


//get query string
$q = $_REQUEST['q'];

$suggestion = '';

//Get suggestion
if ($q !== "") {
  $q = strtolower($q);
  $len = strlen($q);
  foreach ($people as $person) {
    if (stristr($q, substr($person, 0, $len))) {
      if ($suggestion == "") {
        $suggestion = $person;
      }else {
        $suggestion .= ", $person";
      }
    }
  }
}
echo $suggestion == "" ? "No Suggestion" : $suggestion;

?>
