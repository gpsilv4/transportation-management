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
class Percurso
{
    public $descricao = null;

    public $id = 0;

    // --- OPERATIONS ---

    public function __construct($descricao) {
        $this->descricao = $descricao;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function criar_percurso()
    {
        $query = "insert into percurso (descricao) values (?)";

        $result = queryMysqli($query, array($this->getDescricao()));

        if ($result->rowCount() > 0) {
            return true;
        }
        return false;
    }

     public static function query_all_percurso() {
        $query = "select * from percurso";
        $queryResult=array();
        $result = queryMysqli($query, array());
        if ($result->rowCount() <= 0) {
            return null;
        } else {
            for ($i = 0; $i < $result->rowCount(); $i++) {
                $object = $result->fetchObject();
                array_push($queryResult, $object->id . ' ' . $object->descricao . ' ');
            }
        }
        return $queryResult;
    }

} /* end of class Ponto */

?>
