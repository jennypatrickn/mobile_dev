<?php

namespace Applications\Backend;

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
class BackendApplication extends \Library\Application {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->name = 'Backend';
    }

    public function run() {
        if ($this->user->isAuthenticated()) {
            $controller = $this->getController();
        } else {
            $controller = new Modules\Connexion\ConnexionController($this, 'Connexion', 'index');
        }
        $controller->execute();
        $this->httpResponse->setPage($controller->page());
        $this->httpResponse->send();
    }

}
