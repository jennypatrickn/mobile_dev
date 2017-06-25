<?php

namespace Applications\Frontend;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FrontendApplication
 *
 * @author N Jenny Patrick
 */
class FrontendApplication extends \Library\Application {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->name = 'Frontend';
    }

    public function run() {
        $controller = $this->getController();
        $controller->execute();
        $this->httpResponse->setPage($controller->page());
        $this->httpResponse->send();
    }

}
