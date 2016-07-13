<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);
$totalprice = 'nothing';


if (isset($_POST['total'])) {
	$totalprice = $_POST['total'];

    sendNotification($totalprice);
}

function sendNotification($inputAmount) {
	error_reporting(E_ALL);
	// Change 1 : No braces and no spaces
	$deviceToken= 'b99890ae60232bd650bd7456e73fbed142e6d2342d1583d2fd58b2bdfc8e986a'; 
	// Change 2 : If any
	$passphrase = '123456'; 
	$message = 'Amazon Transaction';
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
	    'sound' => 'default',
	    'amount' => $inputAmount,
	    'category' => 'PAYMENT_CATEGORY',
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

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

?>