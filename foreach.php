<?php
$colors = array("red", "green", "blue", "orange");
echo "<h2>All colors</h2>";
foreach ($colors as $color) {
    echo $color . "<br>";
}

echo "<h2>Random color</h2>";
echo $colors[rand(0, count($colors) - 1)];
?>