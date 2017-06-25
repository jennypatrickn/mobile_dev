<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Library;

/**
 * Description of Validator
 *
 * @author N Jenny Patrick
 */
abstract class Validator {

    //put your code here
    protected $errorMessage;

    public function __construct($errorMessage) {
        $this->setErrorMessage($errorMessage);
    }

    abstract public function isValid($value);

    public function setErrorMessage($errorMessage) {
        if (is_string($errorMessage)) {
            $this->errorMessage = $errorMessage;
        }
    }

    public function errorMessage() {
        return $this->errorMessage;
    }

}
