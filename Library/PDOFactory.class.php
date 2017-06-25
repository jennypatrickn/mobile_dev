<?php

namespace Library;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PDOFactory
 *
 * @author N Jenny Patrick
 */
class PDOFactory {

    //put your code here
    public static function getMysqlConnexion() {
        $db = new \PDO('mysql:host=localhost;dbname=systemenews', 'root', '');
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $db;
    }

}
