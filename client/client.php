<?php
$options = array('location' => 'http://localhost/notification/server/server.php', 
                  'uri' => 'http://localhost/');
$client = new SoapClient(NULL,$options);
                    

// Call the SOAP method
try {
	if ($_REQUEST['action'] == 'DoAlert') {
		$result = $client->DoAlert();
        echo json_encode($result);
	}
	else if ($_REQUEST['action'] == 'PushNotification') {
		$result = $client->PushNotification();
        echo json_encode($result);
	}	
}
catch (SoapFault $soapFault) {
	echo $soapFault;
}
?>
