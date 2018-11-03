<?php
function boot($word, $vok){
  $a = substr_count($word, $vok);
  echo 'Kata : '.$word.'<br>Huruf : '.$vok.'<br>Result : '.$a;
}
function ark($word, $vok){
  $b = substr_count($word, $vok);
  echo 'Kata : '.$word.'<br>Huruf : '.$vok.'<br>Result : '.$b;
}
boot("bootcamp", "o");
echo "<br>";
ark("arkademy", "k");