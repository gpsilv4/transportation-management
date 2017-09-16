<?php

error_reporting(E_ALL);

/**
 * modeloSemTitulo - class.localizacao.php
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

/**
 * include veiculo_localizacao
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('lib/functions.php');

/* user defined includes */
// section -64--88-1-71-72ae0f9d:151624aec48:-8000:00000000000008B3-includes begin
// section -64--88-1-71-72ae0f9d:151624aec48:-8000:00000000000008B3-includes end

/* user defined constants */
// section -64--88-1-71-72ae0f9d:151624aec48:-8000:00000000000008B3-constants begin
// section -64--88-1-71-72ae0f9d:151624aec48:-8000:00000000000008B3-constants end

/**
 * Short description of class localizacao
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class localizacao
{
    public $latitude = 0.0;

    public $longitude = 0.0;

    public $id = 0;

    // --- OPERATIONS ---

    public function __construct($latitude,$longitude) {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    public function getLatitude(){
        return $this->latitude;
    }

    public function getLongitude(){
        return $this->longitude;
    }

    public function criar_localizacao()
    {
        $query = "insert into localizacao (latitude,longitude) values (?,?)";

        $result = queryMysqli($query, array($this->getLatitude(),$this->getLongitude()));

        if ($result->rowCount() > 0) {
            return true;
        }
        return false;
    }

    public static function update_localizacao($lat1,$lon1,$id_localizacao1)
    {
        $query = "update localizacao set latitude=".$lat1.",longitude=".$lon1." where id=".$id_localizacao1;

        $result = queryMysqli($query, array());


        return $result;

    }

    public static function query_all_localizacao() {
        $query = "select * from localizacao";
        $queryResult=array();
        $result = queryMysqli($query, array());
        if ($result->rowCount() <= 0) {
            return null;
        } else {
            for ($i = 0; $i < $result->rowCount(); $i++) {
                $object = $result->fetchObject();
                array_push($queryResult, $object->latitude . ' ' . $object->longitude . ' ');
            }
        }
        return $queryResult;
    }

} /* end of class localizacao */

?>
