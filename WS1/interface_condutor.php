<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once "lib/nusoap.php";
require_once "lib/functions.php";


$action= get('action');

$client = new nusoap_client("http://127.0.0.1:80/WS1/class.webservice.php");

if($action=='novo')
{
$nome = get('nome');
$bi = get('bi');
$carta_conducao = get('carta_conducao');

$err = $client->getError();
if ($err) {
    // Display the error
    echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
}

if($nome=='' || $bi=='' || $carta_conducao==''){
  echo 'campos vazios';
}else{
//calls the WS using a
$result = $client->call('WS1_webservice.criar_condutor', array('nome' => $nome, 'bi' => $bi, 'carta_conducao' => $carta_conducao));
//$result = $client->call('WS1_webservice.query_all_condutor', array('nome' => $nome, 'bi' => $bi, 'carta_conducao' => $carta_conducao));
// Check for a fault
}
}else{$result = $client->call('WS1_webservice.query_all_condutor', array(null, null,null));}


if ($client->fault) {
    echo '<h2>Fault</h2><pre>';
    print_r($result);
    echo '</pre>';
} else {
    // Check for errors
    $err = $client->getError();
    if ($err) {
        // Display the error
        echo '<h2>Error</h2><pre>' . $err . '</pre>';
    } else {
        // Display the result
        echo '<h2>Result</h2><pre>';
        print_r($result);
    echo '</pre>';
    }
}

// Display the request and response
echo '<h2>Request</h2>';
echo '<pre>' . htmlspecialchars($client->request, ENT_QUOTES) . '</pre>';
echo '<h2>Response</h2>';
echo '<pre>' . htmlspecialchars($client->response, ENT_QUOTES) . '</pre>';
// Display the debug messages
echo '<h2>Debug</h2>';
echo '<pre>' . htmlspecialchars($client->debug_str, ENT_QUOTES) . '</pre>';


?>
