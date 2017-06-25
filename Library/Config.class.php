<?php

namespace Library;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Config
 *
 * @author N Jenny Patrick
 */
class Config extends ApplicationComponent {

    //put your code here
    protected $vars = array();

    public function get($var) {
        if (!$this->vars) {
            $xml = new \DOMDocument;
            $xml->load(__DIR__ . '/../Applications/' . $this->app->name() . '/Config/app.xml');
            $elements = $xml->getElementsByTagName('define');
            foreach ($elements as $element) {
                $this->vars[$element->getAttribute('var')] = $element->getAttribute('value');
            }
        }
        if (isset($this->vars[$var])) {
            return $this->vars[$var];
        }
        return null;
    }

}
