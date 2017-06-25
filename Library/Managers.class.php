<?php

namespace Library;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Managers
 *
 * @author N Jenny Patrick
 */
class Managers {

    //put your code here
    protected $api = null;
    protected $dao = null;
    protected $managers = array();

    public function __construct($api, $dao) {
        $this->api = $api;
        $this->dao = $dao;
    }

    public function getManagerOf($module) {
        if (!is_string($module) || empty($module)) {
            throw new \InvalidArgumentException('Le module spécifié est invalide');
        }
        if (!isset($this->managers[$module])) {
            
            $manager =  '\\Library\\Models\\'.$module .'\\'.$module . 'Manager_' . $this->api;
            $this->managers[$module] =  new $manager($this->dao);
            
        }
        
        return $this->managers[$module];
    }

}
