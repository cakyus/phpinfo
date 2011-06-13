<?php

// @todo configuration for manual site 
// @todo configuration for manual type, eg. single html file, many html file

$rows = get_defined_functions();
$rows = $rows['internal'];
sort($rows);
$site = 'http://127.0.1.1/php/manual/php/';

foreach ($rows as $name => $item) {
    $functionName = $item;
    $functionName = str_replace('_','-',$functionName);
    echo '<div id="function.'.$functionName.'">'
        .'<a href="'.$site.'function.'.$functionName.'.html">'
            .$item.'</a>'
        .'</div>';
}

