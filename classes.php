<?php include('config.php');

// @todo configuration for manual site 
// @todo configuration for manual type, eg. single html file, many html file

$rows = get_declared_classes();

sort($rows);
$site = PHPINFO_MANUAL_URL;

foreach ($rows as $name => $item) {
    $functionName = $item;
    $functionName = str_replace('_','-',$functionName);
    $functionName = strtolower($functionName);
    echo '<div id="class.'.$functionName.'">'
        .'<a href="'
			.PHPINFO_MANUAL_URL
			.'class.'.$functionName
			.'.'.PHPINFO_MANUAL_TYPE
			.'">'.$item.'</a>'
        .'</div>';
}

