<?php

$post = [
    'username' => "taifu",
    'password' => "zui19950522",
    'networkId' => 0,
    'rememberMe' => false
];

$post = json_encode($post, true); 

$ch = curl_init('http://avacms10.scala.com/ContentManager/api/rest/auth/login');
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, $post );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen( $post )
                )
);
$res        = curl_exec( $ch );
$httpStatus = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
curl_close( $ch );


print_r($res);

?>