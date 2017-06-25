<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Library;

/**
 * Description of NotNullValidator
 *
 * @author N Jenny Patrick
 */
class NotNullValidator extends Validator {

    public function isValid($value) {
        return $value != '';
    }

}
