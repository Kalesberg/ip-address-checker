<?php

header( 'x-hello-world: Alex Gill' );
header( 'content-type: application/json');

$ip_address = $_SERVER['REMOTE_ADDR'];
$response = [
  'ip' => $ip_address
];
if ( !empty( $_GET['name'] ) ) {
  $response['greeting'] = $_GET['name'];
}
echo json_encode( $response );
exit;
?>