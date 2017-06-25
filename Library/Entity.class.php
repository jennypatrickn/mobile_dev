<?php

namespace Library;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Entity
 *
 * @author N Jenny Patrick
 */
abstract class Entity implements \ArrayAccess {

    //put your code here
    protected $erreurs = array(),
            $id;

    public function __construct(array $donnees = array()) {
        if (!empty($donnees)) {
            $this->hydrate($donnees);
        }
    }

    public function isNew() {
        return empty($this->id);
    }

    public function erreurs() {
        return $this->erreurs;
    }

    public function id() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = (int) $id;
    }

    public function hydrate(array $donnees) {
        foreach ($donnees as $attribut => $valeur) {
            $methode = 'set' . ucfirst($attribut);
            if (is_callable(array($this, $methode))) {
                $this->$methode($valeur);
            }
        }
    }

    public function offsetGet($var) {
        if (isset($this->$var) && is_callable(array($this, $var))) {
            return $this->$var();
        }
    }

    public function offsetSet($var, $value) {
        $method = 'set' . ucfirst($var);
        if (isset($this->$var) && is_callable(array($this, $method))) {
            $this->$method($value);
        }
    }

    public function offsetExists($var) {
        return isset($this->$var) && is_callable(array($this, $var));
    }

    public function offsetUnset($var) {
        throw new \Exception('Impossible de supprimer une quelconque
valeur');
    }

}
