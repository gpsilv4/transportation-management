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
require_once('class.veiculo.php');
require_once('class.condutor.php');
require_once('class.ponto.php');
require_once('class.localizacao.php');
require_once('class.condutor_veiculo.php');
require_once('class.percurso.php');
require_once('class.percurso_ponto.php');

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
class WS1_webservice {

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
    public function criar_veiculo($marca, $modelo, $matricula, $capacidade, $autonomia, $estado) {

        $veiculo = new veiculo($marca, $modelo, $matricula, $capacidade, $autonomia, $estado);
        $result = $veiculo->criar_veiculo();
        if ($result) {
            return "veiculo successfully inserted";
        }
        return "veiculo could not be inserted";
    }

    public function criar_condutor($nome, $bi, $carta_conducao) {

        $condutor = new condutor($nome, $bi, $carta_conducao);
        $result = $condutor->criar_condutor();
        if ($result) {
            return "condutor successfully inserted";
        }
        return "condutor could not be inserted";
    }

    public function query_all_condutor() {

        $condutor = new condutor(null,null,null);
        $result = $condutor->query_all_condutor();
        if ($result) {
            return $result;
        }
        return "erro select condutor";
    }


    public function criar_ponto($descricao) {

        $ponto = new ponto($descricao);
        $result = $ponto->criar_ponto();
        if ($result) {
            return "ponto successfully inserted";
        }
        return "ponto could not be inserted";
    }

    public function criar_percurso($descricao) {

        $percurso = new percurso($descricao);
        $result = $percurso->criar_percurso();
        if ($result) {
            return "percurso successfully inserted";
        }
        return "percurso could not be inserted";
    }


    public function criar_condutor_veiculo($id_condutor,$id_veiculo) {

        $condutor_veiculo = new condutor_veiculo($id_condutor,$id_veiculo);
        $result = $condutor_veiculo->criar_condutor_veiculo();
        if ($result) {
            return "criar_condutor_veiculo successfully inserted";
        }
        return "criar_condutor_veiculo could not be inserted";
    }

    public function criar_percurso_ponto($id_percurso,$id_ponto) {

        $percurso_ponto = new percurso_ponto($id_percurso,$id_ponto);
        $result = $percurso_ponto->criar_percurso_ponto();
        if ($result) {
            return "criar percurso_ponto successfully inserted";
        }
        return "criar percurso_ponto could not be inserted";
    }


    public function update_localizacao ($id,$lat,$lon) {

      //  $percurso_ponto  = new percurso_ponto(null,null);

      //  $result = $percurso_ponto ->query_all_percurso_ponto();
        $result=localizacao::update_localizacao($lat,$lon,$id);

        if ($result) {
            return $result;
        }
        return "erro update localizacao ";
    }


	
	
    public function query_all_percurso_ponto () {

        $percurso_ponto  = new percurso_ponto(null,null);
        $result = $percurso_ponto ->query_all_percurso_ponto();
        if ($result) {
            return $result;
        }
        return "erro select query_all_percurso_ponto ";
    }

    public function query_all_condutor_veiculo() {

        $condutor_veiculo = new condutor_veiculo(null,null);
        $result = $condutor_veiculo->query_all_condutor_veiculo();
        if ($result) {
            return $result;
        }
        return "erro select query_all_condutor_veiculo";
    }

    public function query_all_ponto() {

        $ponto = new ponto(null);
        $result = $ponto->query_all_ponto();
        if ($result) {
            return $result;
        }
        return "erro select ponto";
    }

    public function query_all_percurso() {

        $percurso = new percurso(null);
        $result = $percurso->query_all_percurso();
        if ($result) {
            return $result;
        }
        return "erro select percurso";
    }

    public function query_all_veiculo() {

        $veiculo = new veiculo(null,null,null,null,null,null);
        $result = $veiculo->query_all_veiculo();
        if ($result) {
            return $result;
        }
        return "erro select veiculo";
    }

    public function query_all_localizacao() {

        $localizacao = new localizacao(null,null);
        $result = $localizacao->query_all_localizacao();
        if ($result) {
            return $result;
        }
        return "erro select localizacao";
    }
    public function criar_localizacao($latitude,$longitude) {

        $localizacao = new localizacao($latitude,$longitude);
        $result = $localizacao->criar_localizacao();
        if ($result) {
            return "localizacao successfully inserted";
        }
        return "localizacao could not be inserted";
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


$ws = new WS1_webservice();
$ws->registerMethod('WS1_webservice.criar_veiculo');
$ws->registerMethod('WS1_webservice.criar_condutor');
$ws->registerMethod('WS1_webservice.criar_ponto');
$ws->registerMethod('WS1_webservice.criar_percurso');
$ws->registerMethod('WS1_webservice.criar_localizacao');
$ws->registerMethod('WS1_webservice.criar_condutor_veiculo');
$ws->registerMethod('WS1_webservice.criar_percurso_ponto');
$ws->registerMethod('WS1_webservice.query_all_ponto');
$ws->registerMethod('WS1_webservice.query_all_percurso');
$ws->registerMethod('WS1_webservice.query_all_veiculo');
$ws->registerMethod('WS1_webservice.query_all_localizacao');
$ws->registerMethod('WS1_webservice.query_all_condutor');
$ws->registerMethod('WS1_webservice.query_all_condutor_veiculo');
$ws->registerMethod('WS1_webservice.query_all_percurso_ponto');
$ws->registerMethod('WS1_webservice.update_localizacao');
$ws->registerMethod('WS1_webservice.login_utilizador');



$namespace = "http://127.0.0.1:3306/WS1/class.webservice.php";

$ws->server->configureWSDL('projectWS1', 'urn:projectWS1wsdl');
$ws->server->wsdl->schemaTargetNamespace = $namespace;

$ws->server->wsdl->addComplexType('query', 'complexType', 'array', 'sequence', '', array('result' => array('name' => 'result', 'type' => 'xsd:string')));

//register webservice documentation
$ws->server->register('WS1_webservice.criar_veiculo', // method name
    array('marca' => 'xsd:string','modelo' => 'xsd:string','matricula' => 'xsd:string','capacidade' => 'xsd:int','autonomia' => 'xsd:int','estado' => 'xsd:string'),
    array('return' => 'xsd:string'),      // output parameters
    'urn:criar_veiculowsdl',                      // namespace
    'urn:criar_veiculowsdl#criar_veiculo',                // soapaction
    'rpc',                                // style
    'encoded',                            // use
    'Criar Veiculo'            // documentation
    );

    $ws->server->register('WS1_webservice.criar_condutor_veiculo', // method name
        array('id_condutor' => 'xsd:int','id_veiculo' => 'xsd:int'),
        array('return' => 'xsd:string'),      // output parameters
        'urn:criar_condutor_veiculowsdl',                      // namespace
        'urn:condutor_veiculowsdl#condutor_veiculo',                // soapaction
        'rpc',                                // style
        'encoded',                            // use
        'Criar Condutor_Veiculo'            // documentation
        );

        $ws->server->register('WS1_webservice.criar_percurso_ponto', // method name
            array('id_percurso' => 'xsd:int','id_ponto' => 'xsd:int'),
            array('return' => 'xsd:string'),      // output parameters
            'urn:criar_condutor_veiculowsdl',                      // namespace
            'urn:condutor_veiculowsdl#condutor_veiculo',                // soapaction
            'rpc',                                // style
            'encoded',                            // use
            'Criar Percurso Ponto'            // documentation
            );

$ws->server->register('WS1_webservice.criar_condutor',                // method name
    array('nome' => 'xsd:string','bi' => 'xsd:int','carta_conducao' => 'xsd:int'),
    array('return' => 'xsd:string'),      // output parameters
    'urn:criar_condutorwsdl',                      // namespace
    'urn:criar_condutorwsdl#criar_condutor',                // soapaction
    'rpc',                                // style
    'encoded',                            // use
    'Criar Condutor'            // documentation
    );
	
	
    $ws->server->register('WS1_webservice.update_localizacao',                // method name
        array('id' => 'xsd:int','lat' => 'xsd:float','lon' => 'xsd:float'),
        array('return' => 'tns:query'),      // output parameters
        'urn:criar_condutorwsdl',                      // namespace
        'urn:criar_condutorwsdl#criar_condutor',                // soapaction
        'rpc',                                // style
        'encoded',                            // use
        'Update Localizacao'            // documentation
        );

$ws->server->register('WS1_webservice.criar_ponto',                // method name
    array('descricao' => 'xsd:string'),
    array('return' => 'xsd:string'),      // output parameters
    'urn:criar_pontowsdl',                      // namespace
    'urn:criar_ponto#criar_ponto',                // soapaction
    'rpc',                                // style
    'encoded',                            // use
    'Criar Ponto'            // documentation
    );

    $ws->server->register('WS1_webservice.criar_percurso',                // method name
        array('descricao' => 'xsd:string'),
        array('return' => 'xsd:string'),      // output parameters
        'urn:criar_pontowsdl',                      // namespace
        'urn:criar_ponto#criar_ponto',                // soapaction
        'rpc',                                // style
        'encoded',                            // use
        'Criar Percurso'            // documentation
        );

$ws->server->register('WS1_webservice.criar_localizacao',                // method name
    array('latitude' => 'xsd:float','longitude' => 'xsd:float'),
    array('return' => 'xsd:string'),      // output parameters
    'urn:criar_localizacaowsdl',                      // namespace
    'urn:criar_localizacao#criar_localizacao',                // soapaction
    'rpc',                                // style
    'encoded',                            // use
    'Criar Localizacao'            // documentation
    );

$ws->server->register('WS1_webservice.query_all_ponto',               // method name
    array(null),
    array('return' => 'tns:query'),      // output parameters
    'urn:criar_pontowsdl',                      // namespace
    'urn:criar_ponto#criar_ponto',                // soapaction
    'rpc',                                // style
    'encoded',                            // use
    'Criar Ponto'            // documentation
    );

    $ws->server->register('WS1_webservice.query_all_percurso',               // method name
        array(null),
        array('return' => 'tns:query'),      // output parameters
        'urn:criar_pontowsdl',                      // namespace
        'urn:criar_ponto#criar_ponto',                // soapaction
        'rpc',                                // style
        'encoded',                            // use
        'Get All Percurso'            // documentation
        );

$ws->server->register('WS1_webservice.query_all_veiculo',               // method name
    array(null),
    array('return' => 'tns:query'),      // output parameters
    'urn:criar_veiculowsdl',                      // namespace
    'urn:criar_veiculo#criar_veiculo',                // soapaction
    'rpc',                                // style
    'encoded',                            // use
    'Criar Veiculo'            // documentation
    );

    $ws->server->register('WS1_webservice.query_all_condutor_veiculo',               // method name
        array(null),
        array('return' => 'tns:query'),      // output parameters
        'urn:criar_veiculowsdl',                      // namespace
        'urn:criar_veiculo#criar_veiculo',                // soapaction
        'rpc',                                // style
        'encoded',                            // use
        'Criar Veiculo'            // documentation
        );

        $ws->server->register('WS1_webservice.query_all_percurso_ponto',               // method name
            array(null),
            array('return' => 'tns:query'),      // output parameters
            'urn:criar_veiculowsdl',                      // namespace
            'urn:criar_veiculo#criar_veiculo',                // soapaction
            'rpc',                                // style
            'encoded',                            // use
            'Criar Veiculo'            // documentation
            );

$ws->server->register('WS1_webservice.query_all_localizacao',               // method name
    array(null),
    array('return' => 'tns:query'),      // output parameters
    'urn:criar_localizacaowsdl',                      // namespace
    'urn:criar_localizacao#criar_localizacao',                // soapaction
    'rpc',                                // style
    'encoded',                            // use
    'Criar Localizacao'            // documentation
    );

$ws->server->register('WS1_webservice.query_all_condutor',               // method name
    array(null),
    array('return' => 'tns:query'),      // output parameters
    'urn:criar_condutorwsdl',                      // namespace
    'urn:criar_condutor#criar_condutor',                // soapaction
    'rpc',                                // style
    'encoded',                            // use
    'Criar Condutor'            // documentation
    );
          // documentation

$ws->processRequest();

?>
