<?php

// @todo configuration for manual site 
// @todo configuration for manual type, eg. single html file, many html file

$rows = get_declared_classes();

sort($rows);
$site = 'http://127.0.1.1/php/manual/php/';

foreach ($rows as $name => $item) {
    $functionName = $item;
    $functionName = str_replace('_','-',$functionName);
    $functionName = strtolower($functionName);
    echo '<div id="class.'.$functionName.'">'
        .'<a href="'.$site.'class.'.$functionName.'.html">'
            .$item.'</a>'
        .'</div>';
}

