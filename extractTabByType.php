<?php
$tab= ['abc', 2, 3.5, 2.45, 7, 'bonjour', 'rt2', true];
function extractTabByType($tableau, $type) {
    $testFonction = "is_$type";
    $result = [];
    foreach($tableau as $element) {
        if ($testFonction($element)) {
            $result[] = $element;
        }
    }
    return $result;
}
var_dump(extractTabByType($tab, 'string'));