<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Library;

/**
 * Description of MaxLengthValidator
 *
 * @author N Jenny Patrick
 */
class MaxLengthValidator extends Validator {

    //put your code here
    protected $maxLength;

    public function __construct($errorMessage, $maxLength) {
        parent::__construct($errorMessage);
        $this->setMaxLength($maxLength);
    }

    public function isValid($value) {
        return strlen($value) <= $this->maxLength;
    }

    public function setMaxLength($maxLength) {
        $maxLength = (int) $maxLength;
        if ($maxLength > 0) {
            $this->maxLength = $maxLength;
        } else {
            throw new \RuntimeException('La longueur maximale doit être un
nombre supérieur à 0');
        }
    }

}
