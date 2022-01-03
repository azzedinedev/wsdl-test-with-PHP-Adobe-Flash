<?php 
// Pour supprimer le cache du web-service
// To delete the web-service cache
ini_set('soap.wsdl_cache_enabled', 0);

//Définir l'URL du dossier
// Define the URL of the folder
$urlWsdl = 'http://localhost/wsdl';
try {
    // Nouvelle instance de la classe soapClient
    // New instance of the soapClient class
   $client = new SoapClient($urlWsdl.'/wsdl-examples/complexeWSDL.wsdl', array('trace' => 1));
   $parm = date('Y-m-d');
    // Appel de la méthode QuelJour du service web
    // Call the WhatDay method of the web service
   try{
    $oReturn =  $client -> __soapCall('QuelJour', array('string' =>'username','password' =>'pass','ticker' => 'ticker'));
	} catch (SoapFault $fault) {
    	trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
	}

    // affiche le résultat
    // display the result
	var_dump($oReturn);
       echo "<hr>".print_r($oReturn,true)."<hr>";
       echo $oReturn->string[0];
} catch (SoapFault $fault) {
    echo 'erreur : '.$fault;
}
?>