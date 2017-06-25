<?php

namespace Applications\Frontend\Modules\Visiteur;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VisiteurController
 *
 * @author N Jenny Patrick
 */
class VisiteurController extends \Library\BackController {
    
    public function executeIndex(\Library\HTTPRequest $request) {
        $title ='Accueil';
        $this->page->addVar('title', $title);
    }

    public function executeContact(\Library\HTTPRequest $request) {
        $title ='Contact';
        $this->page->addVar('title', $title);
    }

    public function executeCV(\Library\HTTPRequest $request) {
        $title ='CV';
        $this->page->addVar('title', $title);
    }
    public function executePorfolio(\Library\HTTPRequest $request) {
        $title ='Porfolio';
        $this->page->addVar('title', $title);
    }
}
