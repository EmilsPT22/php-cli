<?php

echo "this is my first cli script in php";

for ($x = 0; $x <= 10; $x++) {
    echo "Number: $x <br>";
  }

  $cilveki = array(
   ["Vladislavs", 43],
   [ "Edgars", 16],
    ["Bruno", 11],
  ); 
  foreach ($cilveki as $dzivi => $veldzivaki)
  echo "$dzivi : $veldzivaki <br>";
  