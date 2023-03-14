<?php /*
 * Demonstrating while loop
 */
//
//$countDown = 10;
//
//while($countDown >= 0){
//    echo "Count Down : " . $countDown . "<br>";
//    $countDown--;
//}
//
//echo "Welcome to the year 2014";

echo "<br>";
echo "<br>";



/*
 * Demonstrating do...while loop
 */
$total = 0;
$radius = 1;
$count = 1;
$area = 0;
define("PI", 3.14159);
//
//echo "--This program is to compute total area of circles--<br>";
//do{
//    
//    $area = PI * pow($radius,2);
//    $total += $area;
//    echo "[$count] Calculated area of a circle with radius $radius<br>";
//    echo "Total area of circles : " . $total . "<br>";
//    $radius += 1;
//    $count += 1;
//}while($radius <= 5);

echo "<br>";
echo "<br>";

/*
 * Demonstrating the use of for loop
 */

//for($i = 0; $i <= 4; $i++){
//    $area = PI * pow($radius,2);
//    $total += $area;
//    echo "[$count] Calculated area of a circle with radius $radius<br>";
//    echo "Total area of circles : " . $total . "<br>";
//    $radius += 1;
//    $count += 1;
//}

/*
 * Demonstrating escaping from loop using the break statement
 */
//for($i = 0; $i <= 5; $i++){
//    $area = PI * pow($radius,2);
//    $total += $area;
//    echo "[$count] Calculated area of a circle with radius $radius<br>";
//    echo "Total area of circles : " . $total . "<br>";
//    $radius += 1;
//    $count += 1;
//    if($radius == 3) break;
//}

/*
 * Demonstrating continue statement in a loop to end the current item and continue with the next iteration
 */

//for($radius = 1; $radius <= 6; $radius++){
//    if($radius == 4) continue;
//    $area = PI * pow($radius,2);
//    $total += $area;
//      echo "Calculated area of a circle with radius $radius<br>";
//      echo "Total area of circles : " . $total . "<br>";
//}

/*
 * Demonstrating with nested loop
 */
$asteriskArray;
for($i = 1; $i <= 6; $i++){
    echo "<br>";
    for($j = 1; $j <= 10; $j++){
      $asteriskArray[$i][$j] = "*";
      echo $asteriskArray[$i][$j];
    }
}
?>

There is changes...
