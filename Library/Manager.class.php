<?php

namespace Library;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Manager
 *
 * @author N Jenny Patrick
 */
abstract class Manager {

    //put your code here
    protected $dao;

    public function __construct($dao) {
        $this->dao = $dao;
    }

}
