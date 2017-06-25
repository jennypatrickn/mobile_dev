<?php

namespace Library;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Route
 *
 * @author N Jenny Patrick
 */
class Route {

    //put your code here
    protected $action;
    protected $module;
    protected $url;
    protected $varsNames;
    protected $vars = array();

    public function __construct($url, $module, $action, array
    $varsNames) {
        $this->setUrl($url);
        $this->setModule($module);
        $this->setAction($action);
        $this->setVarsNames($varsNames);
    }

    public function hasVars() {
        return !empty($this->varsNames);
    }

    public function match($url) {
        if (preg_match('`^' . $this->url . '$`', $url, $matches)) {
            return $matches;
        } else {
            return false;
        }
    }

    public function setAction($action) {
        if (is_string($action)) {
            $this->action = $action;
        }
    }

    public function setModule($module) {
        if (is_string($module)) {
            $this->module = $module;
        }
    }

    public function setUrl($url) {
        if (is_string($url)) {
            $this->url = $url;
        }
    }

    public function setVarsNames(array $varsNames) {
        $this->varsNames = $varsNames;
    }

    public function setVars(array $vars) {
        $this->vars = $vars;
    }

    public function action() {
        return $this->action;
    }

    public function module() {
        return $this->module;
    }

    public function vars() {
        return $this->vars;
    }

    public function varsNames() {
        return $this->varsNames;
    }

}
