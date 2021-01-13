<?php
$server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Document root' => $_SERVER['DOCUMENT_ROOT'],
    'Current Page' => $_SERVER['PHP_SELF'],
    'Script Name' => $_SERVER['SCRIPT_NAME'],
    'Absolute Path' => $_server['SCRIPT_FILENAME']
];

echo $server['Absolute Path'];

$client = [
    'Client System info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP' => $_SERVER['REMOTE_ADDR'],
    'Remote port' => $_SERVER['REMOTE_PORT']
];
echo print_r($client);