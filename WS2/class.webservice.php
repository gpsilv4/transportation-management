<?php

/**
 * SE-Project - WS1\class.webservice.php
 *
 * $Id$
 *
 * This file is part of SE-Project.
 *
 * Automatically generated on 13.12.2014, 13:01:03 with ArgoUML PHP module
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 * @package WS1
 */
if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}


/**
 * include WS1_activity
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('class.veiculo.php');
//require_once('class.condutor.php');
//require_once('class.ponto.php');
//require_once('class.localizacao.php');
//require_once('class.condutor_veiculo.php');

/**
 * include WS1_user
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('class.user.php');

/* user defined includes */
/**
 * include nusoap library
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once "lib/nusoap.php";

/**
 * include our library with some DB functions
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once "lib/functions.php";
// section -64--88-56-1--10f7481:14a38f381b0:-8000:0000000000000A73-includes end

/**
 * Short description of class WS1_webservice
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package WS1
 */
class WS2_webservice {

    public $server = NULL;

    public function __construct() {
        // Create the server instance
        $this->server = new nusoap_server();
        // Define the method as a PHP function
    }

    /**
     * create an WS1_user object and make register itself. will return either a token or a message of error
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
	 * @param  String firstname
	 * @param  String lastname
     * @param  String username
     * @param  String birthdate
     * @param  char gender
     * @return WS1_xml
     */
    //public function createUser($firstname, $lastname, $username, $birthdate, $gender) {
	//	$user=new WS1_user($firstname,$lastname,$username,$birthdate,$gender);
      //  $token = $user->registerUser();
       // return $token;
    //}

    /**
     * create an WS1_activity after check if the user exists, and the given token is valid
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String username
     * @param  String start
     * @param  String end
     * @param  String activityName
	 * @param  String token
     * @return mixed
     */
    

public function direcoes($origem,$destino) {

        //https://maps.googleapis.com/maps/api/directions/json?origin=aliados&destination=isep&key=AIzaSyBPd0R2ykFU4rjNeoCccxmeLNcBEF3Pv8g
        $key = "AIzaSyBPd0R2ykFU4rjNeoCccxmeLNcBEF3Pv8g";
        $url="https://maps.googleapis.com/maps/api/directions/xml?origin=".$origem."&destination=".$destino."&key=".$key;


        //$var = simplexml_load_file($url);
        $content = file_get_contents($url);
        $var = simplexml_load_string($content);

        $direcoes = array($var->route->summary);
        

        if ($direcoes) {
    
            //return $content;
            return implode(',',$direcoes);
        }
        return "resposta vazia";
    }



    function tempo($w1) {
        
$key = "cb46fc7636ba02a0";
//$url = "http://api.wolframalpha.com/v2/query?input=".$w1."&appid=".$key;
$url= "http://api.wunderground.com/api/".$key."/conditions/q/PT/".$w1.".xml";


//$var = simplexml_load_file($url);
$content = file_get_contents($url);
$var = simplexml_load_string($content);

        $tempo = array($var->current_observation->temperature_string);
        
        return implode(',',$tempo);
}   


    // Register the method to expose
    public function registerMethod($nameMethod) {
        $this->server->register($nameMethod);
    }

    // Use the request to (try to) invoke the service
    public function processRequest() {
        $this->server->service($GLOBALS['HTTP_RAW_POST_DATA']);
    }
}





/* end of class WS1_webservice */


$ws = new WS2_webservice();
$ws->registerMethod('WS1_webservice.direcoes');



$namespace = "http://127.0.0.1:3306/WS2/class.webservice.php";

$ws->server->configureWSDL('projectWS2', 'urn:projectWS2wsdl');
$ws->server->wsdl->schemaTargetNamespace = $namespace;

$ws->server->wsdl->addComplexType('query', 'complexType', 'array', 'sequence', '', array('result' => array('name' => 'result', 'type' => 'xsd:string')));

//register webservice documentation


    



          // documentation


$ws->server->register('WS2_webservice.direcoes', // method name
        array('origem' => 'xsd:string','destino' => 'xsd:string'),
        array('return' => 'xsd:string'),      // output parameters
        'urn:criar_condutor_veiculowsdl',                      // namespace
        'urn:condutor_veiculowsdl#condutor_veiculo',                // soapaction
        'rpc',                                // style
        'encoded',                            // use
        'Criar Condutor_Veiculo'            // documentation
        );

$ws->processRequest();

?>
