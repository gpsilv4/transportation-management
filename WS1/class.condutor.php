<?php

error_reporting(E_ALL);

/**
 * modeloSemTitulo - class.condutor.php
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

/* user defined includes */
// section -64--88-1-71-72ae0f9d:151624aec48:-8000:0000000000000882-includes begin
// section -64--88-1-71-72ae0f9d:151624aec48:-8000:0000000000000882-includes end

/* user defined constants */
// section -64--88-1-71-72ae0f9d:151624aec48:-8000:0000000000000882-constants begin
// section -64--88-1-71-72ae0f9d:151624aec48:-8000:0000000000000882-constants end

/**
 * Short description of class condutor
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class condutor
{
    
    public $nome = null;

    public $bi = 0;

    public $carta_conducao = 0;

    // --- OPERATIONS ---

public function __construct($nome, $bi, $carta_conducao) {
        $this->nome = $nome;
        $this->bi = $bi;
        $this->carta_conducao = $carta_conducao;
    }

    
    public function getNome(){
        return $this->nome;
    }
    
    public function getBI(){
        return $this->bi;
    }
    
    public function getCarta_Conducao(){
        return $this->carta_conducao;
    }

    public function criar_condutor()
    {
        $query = "insert into condutor (nome,bi,carta_conducao) values (?,?,?)";

        $result = queryMysqli($query, array($this->getNome(),$this->getBI(),$this->getCarta_Conducao()));

        if ($result->rowCount() > 0) {
            return true;
        }
        return false;
    }

    public static function query_all_condutor() {
        $query = "select * from condutor";
        $queryResult=array();
        $result = queryMysqli($query, array());
        if ($result->rowCount() <= 0) {
            return null;
        } else {
            for ($i = 0; $i < $result->rowCount(); $i++) {
                $object = $result->fetchObject();
                array_push($queryResult, $object->nome . ' ' . $object->bi . ' '. $object->carta_conducao . ' ');
            }
        }
        return $queryResult;
    }
    
    
} /* end of class condutor */

?>