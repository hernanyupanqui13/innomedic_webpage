<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/font-woff2');
echo @file_get_contents('./dentco.woff');

?>