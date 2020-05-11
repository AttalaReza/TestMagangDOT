<?php

$numbers = [5, 5 , 1, 6, 6, 4, 3, 3, 10, 100, 100, 200];
$n = max(array_diff($numbers, [max($numbers)]));
print($n);

?>