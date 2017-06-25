<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Library;

/**
 * Description of FormBuilder
 *
 * @author N Jenny Patrick
 */
abstract class FormBuilder {

    protected $form;

    public function __construct(Entity $entity) {
        $this->setForm(new Form($entity));
    }

    abstract public function build();

    public function setForm(Form $form) {
        $this->form = $form;
    }

    public function form() {
        return $this->form;
    }

}
