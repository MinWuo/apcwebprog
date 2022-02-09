<?php
# The following function is called whenever your program needs to input data.
# You can change it to use other sources rather than fgets().

$sum = 0;
$counter = 0;
echo "Computing for sum" . PHP_EOL;
$n = $_POST["positive_number"];
while ($counter < $n) {
$counter = $counter + 1;
echo "<br>Adding " . $counter . " to " . $sum . PHP_EOL;
$sum = $sum + $counter;
if ($sum % 2 == 0) {
echo "<br>Even number of variable sum " . $sum . PHP_EOL;
}
}
echo "<br>End of Program" . PHP_EOL;
?>