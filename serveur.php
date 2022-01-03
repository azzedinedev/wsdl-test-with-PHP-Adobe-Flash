<?php 
// Pour supprimer le cache du web-service
// To delete the web-service cache
ini_set('soap.wsdl_cache_enabled', 0);
// Pour définir le temp maximal d'éxecution de notre web-service
// To define the maximum execution time of our web-service
ini_set('default_socket_timeout', 180);

// Nom de notre web-service
// Name of our web-service
class Server {
     // Le service QuelJour que l'on a définit dans notre format WSDL
     // The QuelJour service that we have defined in our WSDL format
    var $jour;
    var $date;
    
    function QuelJour($parm) {
	$aJour[1] = 'Lundi';
	$aJour[2] = 'Mardi';
	$aJour[3] = 'Mercredi';
	$aJour[4] = 'Jeudi';
	$aJour[5] = 'Vendredi';
	$aJour[6] = 'Samedi';
	$aJour[0] = 'Dimanche';
        
        $this->jour = $aJour[date("w",strtotime($parm))];
        $this->date = $parm;
        
        return $aJour[date("w",strtotime($parm))];       
    }
    
}

// On tente d'instancier la classe soapServer
// Si cela s'avère impossible, on affiche une erreur
// We try to instantiate the soapServer class
// If that turns out to be impossible, an error is displayed
try {
    $server = new SoapServer('wsdl-examples/otherWSDL.wsdl',  array('trace' => 1,'encoding'	=> 'UTF-8'));
    // On définit la classe qui va gérer les requêtes SOAP (pour nous c'est la class Server)
    // We define the class to manage the SOAP requests
    $server -> setclass('Server');
    $server->setPersistence(SOAP_PERSISTENCE_REQUEST);
} catch (Exception $e) {
    echo 'erreur'.$e;
}

// Si l'appel provient d'un Web-Service
// If the call comes from a Web-Service
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	try {
		$server -> handle();}
	catch (Exception $e) {
    echo 'erreur'.$e;
	}
}

// Facultatif : seulement pour montrer les fonctions disponibles par le web-service
// Optional: only to show the functions available by the web-service
else {
    echo '<strong>This SOAP server can handle following functions : </strong>';
    echo '<ul>';
    foreach($server -> getFunctions() as $func) {
        echo '<li>' , $func , '</li>';
    }
    echo '</ul>';
}
?>