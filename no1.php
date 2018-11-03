<?php
header("Content-Type: application/json; charset=UTF-8");
$ahh['data'] = array();
$ahh['data'] = array(
  'itemId' => '12341822',
  'itemName' => 'Desk',
  'price' => '700000',
  'ratings' => array(
    'rater' => 'akmal',
    'score' => '4',
  ),
  'freeShipping' => true,
  'color' => array(
    'brown',
    'black'
  )
);
$jss = json_encode($ahh);
print_r($jss);