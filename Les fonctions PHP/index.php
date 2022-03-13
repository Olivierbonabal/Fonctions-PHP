<?php

$firstSet = " L'ours ";
$secondSet = " miel ";

//echo $firstSet;
//echo $secondSet;

function writeSecretSentence(string $firstSet, string $secondSet) {
    return $firstSet . " s'incline face au " . $secondSet . " !!! ";
};

echo writeSecretSentence($firstSet, $secondSet);
