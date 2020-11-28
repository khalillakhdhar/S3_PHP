<?php
$valeur = $_POST["v"];
if ($valeur % 2 == 0)
    echo $valeur . " est paire";
else
    echo $valeur . " est impaire";
