<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Library;

/**
 * Description of FormHandler
 *
 * @author N Jenny Patrick
 */
class FormHandler {

    protected $form;
    protected $manager;
    protected $request;

    public function __construct(\Library\Form $form, \Library\Manager
    $manager, \Library\HTTPRequest $request) {
        $this->setForm($form);
        $this->setManager($manager);
        $this->setRequest($request);
    }

    public function process() {
        if ($this->request->method() == 'POST' && $this->form->isValid()) {
            $this->manager->save($this->form->entity());
            return true;
        }

        return false;
    }

    public function setForm(\Library\Form $form) {
        $this->form = $form;
    }

    public function setManager(\Library\Manager $manager) {
        $this->manager = $manager;
    }

    public function setRequest(\Library\HTTPRequest $request) {
        $this->request = $request;
    }

}
