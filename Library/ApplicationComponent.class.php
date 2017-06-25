<?php

namespace Library;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ApplicationComponent
 *
 * @author N Jenny Patrick
 */
abstract class ApplicationComponent {

    //put your code here
    protected $app;

    public function __construct(Application $app) {
        $this->app = $app;
    }

    public function app() {
        return $this->app;
    }

}
