<?php

error_reporting(E_ALL);

/**
 * modeloSemTitulo - class.Ponto.php
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
 * include percurso_ponto
 *
 * @author firstname and lastname of author, <author@example.org>
 */

/* user defined includes */
// section -64--88-1-71-72ae0f9d:151624aec48:-8000:00000000000008ED-includes begin
// section -64--88-1-71-72ae0f9d:151624aec48:-8000:00000000000008ED-includes end

/* user defined constants */
// section -64--88-1-71-72ae0f9d:151624aec48:-8000:00000000000008ED-constants begin
// section -64--88-1-71-72ae0f9d:151624aec48:-8000:00000000000008ED-constants end

/**
 * Short description of class Ponto
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class condutor_veiculo
{
    public $id = null;

    public $id_condutor = 0;
    public $id_veiculo = 0;

    // --- OPERATIONS ---

    public function __construct($id_condutor,$id_veiculo) {
        $this->id_condutor = $id_condutor;
        $this->id_veiculo = $id_veiculo;
    }

    public function getIdCondutor(){
        return $this->id_condutor;
    }

    public function getIdVeiculo(){
        return $this->id_veiculo;
    }

    public function criar_condutor_veiculo()
    {
        $query = "insert into condutor_veiculo (id_condutor,id_veiculo) values (?,?)";

        $result = queryMysqli($query, array($this->getIdCondutor(),$this->getIdVeiculo()));

        if ($result->rowCount() > 0) {
            return true;
        }
        return false;
    }

     public static function query_all_condutor_veiculo() {
        $query = "select condutor_veiculo.id,c.nome,v.marca,v.matricula from condutor_veiculo INNER JOIN condutor as c INNER JOIN veiculo as v ON c.id=condutor_veiculo.id and v.id=v.id=condutor_veiculo.id";
        $queryResult=array();
        $result = queryMysqli($query, array());
        if ($result->rowCount() <= 0) {
            return null;
        } else {
            for ($i = 0; $i < $result->rowCount(); $i++) {
                $object = $result->fetchObject();
                array_push($queryResult, $object->id . ' ' . $object->nome . ' '.$object->marca.  ' ' . $object->matricula . ' ');
            }
        }
        return $queryResult;
    }

} /* end of class Ponto */

?>
