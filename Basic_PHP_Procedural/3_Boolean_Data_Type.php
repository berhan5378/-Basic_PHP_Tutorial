<?php

/* Booleans */

$complete = [];
$is_complete = (string) true;
$iscomplete = true;
var_dump(is_bool($is_complete));// bool(false)
var_dump(is_bool($iscomplete));// bool(true)
// integers 0 - 0 = false
// floats 0.0 - 0.0 = false
// '' = false
// '0' = false
// []  = false
// null = false
echo  $complete; // ''    b/c empty[] = false
?>