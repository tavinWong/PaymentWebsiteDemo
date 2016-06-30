<?php

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'buyNow':
        	sendNotification();
        	break;
    }
}

function sendNotification() {
    echo "The select function is called.";
    ini_set('display_errors','On'); 
	error_reporting(E_ALL);
	// Change 1 : No braces and no spaces
	$deviceToken= '4906eb3e579094c0e1d57f0f167dcc544b93e5a777a30093f035727fd5204793'; 
	// Change 2 : If any
	$passphrase = '123456'; 
	$message = 'You just spent 2200 pounds!';
	$ctx = stream_context_create();
	// Change 3 : APNS Cert File name and location.
	stream_context_set_option($ctx, 'ssl', 'local_cert', '/Applications/XAMPP/htdocs/paymentPush/apns_cert.pem'); 
	stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);
	// Open a connection to the APNS server
	$fp = stream_socket_client(
	    'ssl://gateway.sandbox.push.apple.com:2195', $err,
	    $errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);
	if (!$fp)
	    exit("Failed to connect: $err $errstr" . PHP_EOL);
	echo 'Connected to APNS' . PHP_EOL;
	// Create the payload body
	$body['aps'] = array(
	    'alert' => $message,
	    'sound' => 'default'
	    );

	// Encode the payload as JSON
	$payload = json_encode($body);
	// Build the binary notification
	$msg = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;
	// Send it to the server
	$result = fwrite($fp, $msg, strlen($msg));
	if (!$result)
	    echo 'Message not delivered' . PHP_EOL;
	else
	    echo 'Message successfully delivered' . PHP_EOL;
	// Close the connection to the server
	fclose($fp);
    exit;
}

?>