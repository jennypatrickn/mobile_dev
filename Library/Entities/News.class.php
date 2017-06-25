<?php

namespace Library\Entities;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of News
 *
 * @author N Jenny Patrick
 */
class News extends \Library\Entity {

    //put your code here
    protected $auteur,
            $titre,
            $contenu,
            $dateAjout,
            $dateModif;

    const AUTEUR_INVALIDE = 1;
    const TITRE_INVALIDE = 2;
    const CONTENU_INVALIDE = 3;

    public function isValid() {
        return !(empty($this->auteur) || empty($this->titre) ||
                empty($this->contenu));
    }

// SETTERS //
    public function setAuteur($auteur) {
        if (!is_string($auteur) || empty($auteur)) {
            $this->erreurs[] = self::AUTEUR_INVALIDE;
        } else {
            $this->auteur = $auteur;
        }
    }

    public function setTitre($titre) {
        if (!is_string($titre) || empty($titre)) {
            $this->erreurs[] = self::TITRE_INVALIDE;
        } else {
            $this->titre = $titre;
        }
    }

    public function setContenu($contenu) {
        if (!is_string($contenu) || empty($contenu)) {
            $this->erreurs[] = self::CONTENU_INVALIDE;
        } else {
            $this->contenu = $contenu;
        }
    }

    public function setDateAjout(\DateTime $dateAjout) {
        $this->dateAjout = $dateAjout;
    }

    public function setDateModif(\DateTime $dateModif) {
        $this->dateModif = $dateModif;
    }

// GETTERS //
    public function auteur() {
        return $this->auteur;
    }

    public function titre() {
        return $this->titre;
    }

    public function contenu() {
        return $this->contenu;
    }

    public function dateAjout() {
        return $this->dateAjout;
    }

    public function dateModif() {
        return $this->dateModif;
    }

}
