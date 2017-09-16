<?php

error_reporting(E_ALL);

/**
 * modeloSemTitulo - class.veiculo.php
 *
 * $Id$
 *
 * This file is part of modeloSemTitulo.
 *
 * Automatically generated on 09.12.2015, 09:42:36 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

require_once "lib/functions.php";
/**
 * include veiculo_condutor
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('class.veiculo_condutor.php');

/**
 * include veiculo_condutor_percurso
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('class.veiculo_condutor_percurso.php');

/**
 * include veiculo_localizacao
 *
 * @author firstname and lastname of author, <author@example.org>
 */
//require_once('class.veiculo_localizacao.php');

/* user defined includes */
// section -64--88-1-71-72ae0f9d:151624aec48:-8000:0000000000000870-includes begin
// section -64--88-1-71-72ae0f9d:151624aec48:-8000:0000000000000870-includes end

/* user defined constants */
// section -64--88-1-71-72ae0f9d:151624aec48:-8000:0000000000000870-constants begin
// section -64--88-1-71-72ae0f9d:151624aec48:-8000:0000000000000870-constants end

/**
 * Short description of class veiculo
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class veiculo
{
   
    public $marca = null;

   
    public $modelo = null;

    
    public $matricula = null;

   
    public $capacidade = 0;

   
    public $autonomia = 0.0;

    
    public $estado = null;

    

    // --- OPERATIONS ---

    public function __construct($marca, $modelo, $matricula, $capacidade, $autonomia, $estado) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->matricula = $matricula;
        $this->capacidade = $capacidade;
        $this->autonomia = $autonomia;
        $this->estado = $estado;
    }

    //public function __construct() {
        
    //}
	
	public function getMarca(){
		return $this->marca;
	}
	
	public function getModelo(){
		return $this->modelo;
	}
	
	public function getMatricula(){
		return $this->matricula;
	}
	
	public function getCapacidade(){
		return $this->capacidade;
	}
	public function getAutonomia(){
		return $this->autonomia;
	}
	
	public function getEstado(){
		return $this->estado;
	}
	
	

	/*public function insertActivity() {
        $query = "insert into activity (username,start,end,name) values (?,?,?,?)";
        $result = queryMysqli($query, array($this->getUsername(), $this->getStart(), $this->getEnd(), $this->getActivityName()));
        if ($result->rowCount() > 0) {
            return true;
        }
        return false;
    }*/

    public function criar_veiculo()
    {
    	$query = "insert into veiculo (marca,modelo,matricula,capacidade,autonomia,estado) values (?,?,?,?,?,?)";

    	$result = queryMysqli($query, array($this->getMarca(),$this->getModelo(),$this->getMatricula(),$this->getCapacidade(),$this->getAutonomia(),$this->getEstado()));

    	if ($result->rowCount() > 0) {
            return true;
        }
        return false;
    }

    public static function query_all_veiculo() {
        $query = "select * from veiculo";
        $queryResult=array();
        $result = queryMysqli($query, array());
        if ($result->rowCount() <= 0) {
            return null;
        } else {
            for ($i = 0; $i < $result->rowCount(); $i++) {
                $object = $result->fetchObject();
                array_push($queryResult, $object->marca . ' ' . $object->modelo . ' '. $object->matricula . ' '. $object->capacidade . ' '. $object->autonomia . ' '. $object->estado . ' ');
            }
        }
        return $queryResult;
    }
} /* end of class veiculo */

?>