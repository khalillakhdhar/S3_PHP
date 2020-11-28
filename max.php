<?php
$valeur1 = $_POST['v1'];
$valeur2 = $_POST['v2'];
if ($valeur1 > $valeur2) {
    echo "la valeur de " . $valeur1 . " est supérieur à " . $valeur2;
} else {
    echo "la valeur de " . $valeur2 . " est supérieur à " . $valeur1;
}
