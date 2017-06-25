<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Library\FormBuilder;

/**
 * Description of CommentFormBuilder
 *
 * @author N Jenny Patrick
 */
class CommentFormBuilder extends \Library\FormBuilder {

    public function build() {
        $this->form->add(new \Library\StringField(array(
                    'label' => 'Auteur',
                    'name' => 'auteur',
                    'maxLength' => 50,
                    'validators' => array(
                        new \Library\MaxLengthValidator('L\'auteur spécifié est
trop long (50 caractères maximum)', 50),
                        new \Library\NotNullValidator('Merci de spécifier
l\'auteur du commentaire'),
                    ),
                )))
                ->add(new \Library\TextField(array(
                    'label' => 'Contenu',
                    'name' => 'contenu',
                    'rows' => 7,
                    'cols' => 50,
                    'validators' => array(
                        new \Library\NotNullValidator('Merci de spécifier votre
commentaire'),
                    ),
        )));
    }

}
