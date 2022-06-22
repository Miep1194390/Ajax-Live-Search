<?php
$a[] = "Mirza";
$a[] = "Hallo";
$a[] = "Pik";
$a[] = "Test";
$a[] = "Hallo";
$a[] = "Qwerty";
$a[] = "Wie";
$a[] = "E pik";
$a[] = "Retweet";
$a[] = "Tafel";
$a[] = "Yislang";
$a[] = "Lol";
$a[] = "Ijs";
$a[] = "Opa";
$a[] = "Pot";
$a[] = "Aap";
$a[] = "Sap";
$a[] = "Daar";
$a[] = "Fuck";
$a[] = "Gaar";
$a[] = "Halloo";
$a[] = "Joo";
$a[] = "Kan";
$a[] = "Loser";
$a[] = "Zelda";
$a[] = "XY";
$a[] = "Cornetto";
$a[] = "Vaak";
$a[] = "Been";
$a[] = "No";
$a[] = "Maken";

// ophalen van q
$q = $_REQUEST["q"];

$hint = "";

// Alle hints checken in $a en kijken of iets overeenkomt
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output geen suggestie als er niks overeenkomt
echo $hint === "" ? "" : $hint;
?>