<?php
require_once('service_functions.php');

$options=array('uri'=>'http://localhost/');
$server = new SoapServer(NULL,$options);
$server->AddFunction("DoAlert");
$server->AddFunction("PushNotification");
$server->handle();
?>
