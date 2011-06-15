<?php

// @todo configuration for manual site 
// @todo configuration for manual type, eg. single html file, many html file

$rows = get_defined_functions();
$rows = $rows['internal'];
sort($rows);
$site = 'http://127.0.1.1/php/manual/php/';

include('header.php');

// search box

if (empty($_GET['q'])) {
    $filterName = '';
} else {
    $filterName = $_GET['q'];
}

echo '<form action="" method="GET">'
    .'<input type="text"'
    .' name="q" value="'.htmlentities($filterName).'"'
    .' />'
    .'</form>';
    
foreach ($rows as $name => $item) {
    $functionName = $item;
    $functionName = str_replace('_','-',$functionName);
    if (    empty($filterName)
        ||  strpos($functionName, $filterName) !== false
        ) { 
        echo '<div class="function" id="function.'.$functionName.'">'
            .'<a href="'.$site.'function.'.$functionName.'.html">'
                .$item.'</a>'
            .'</div>';
    }
}

include('footer.php');
