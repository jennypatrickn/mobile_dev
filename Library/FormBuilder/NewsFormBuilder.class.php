<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Library\FormBuilder;

/**
 * Description of NewsFormBuilder
 *
 * @author N Jenny Patrick
 */
class NewsFormBuilder extends \Library\FormBuilder {

    public function build() {
        $this->form->add(new \Library\StringField(array(
                    'label' => 'Auteur',
                    'name' => 'auteur',
                    'maxLength' => 20,
                    'validators' => array(
                        new \Library\MaxLengthValidator('L\'auteur spécifié est
trop long (20 caractères maximum)', 20),
                        new \Library\NotNullValidator('Merci de spécifier
l\'auteur de la news'),
                    ),
                )))
                ->add(new \Library\StringField(array(
                    'label' => 'Titre',
                    'name' => 'titre',
                    'maxLength' => 100,
                    'validators' => array(
                        new \Library\MaxLengthValidator('Le titre spécifié est
trop long (100 caractères maximum)', 100),
                        new \Library\NotNullValidator('Merci de spécifier le titre
de la news'),
                    ),
                )))
                ->add(new \Library\TextField(array(
                    'label' => 'Contenu',
                    'name' => 'contenu',
                    'rows' => 8,
                    'cols' => 60,
                    'validators' => array(
                        new \Library\NotNullValidator('Merci de spécifier le
contenu de la news'),
                    ),
        )));
    }

}
