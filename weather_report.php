<?php
$temperature = 25;

if ($temperature < 0) {
    echo "It's freezing!";
} elseif ($temperature >= 0 && $temperature < 20) {
    echo "It's cool.";
} else {
    echo "It's warm.";
}
?>