<?php

$a = "ed>abcde";
$b = preg_replace("/[A-Za-z]>/", "Got word: $0 ", $a);
print $b;

?>