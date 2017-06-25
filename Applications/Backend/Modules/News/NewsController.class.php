<?php

namespace Applications\Backend\Modules\News;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewsController
 *
 * @author N Jenny Patrick
 */
class NewsController extends \Library\BackController {

    public function executeDeleteComment(\Library\HTTPRequest
    $request) {
        $this->managers->getManagerOf('Comments')->delete($request->getData('id'));
        $this->app->user()->setFlash('Le commentaire a bien été supprimé
!');
        $this->app->httpResponse()->redirect('.');
    }

    public function executeDelete(\Library\HTTPRequest $request) {
        $this->managers->getManagerOf('News')->delete($request->getData('id'));
        $this->app->user()->setFlash('La news a bien été supprimée !');
        $this->app->httpResponse()->redirect('.');
    }

    public function executeIndex(\Library\HTTPRequest $request) {
        $this->page->addVar('title', 'Gestion des news');
        $manager = $this->managers->getManagerOf('News');
        $this->page->addVar('listeNews', $manager->getList());
        $this->page->addVar('nombreNews', $manager->count());
    }

    public function executeInsert(\Library\HTTPRequest $request) {
        $this->processForm($request);
        $this->page->addVar('title', 'Ajout d\'une news');
    }

    public function executeUpdate(\Library\HTTPRequest $request) {
        $this->processForm($request);
        $this->page->addVar('title', 'Modification d\'une news');
    }

    public function executeUpdateComment(\Library\HTTPRequest
    $request) {
        $this->page->addVar('title', 'Modification d\'un commentaire');
        if ($request->method() == 'POST') {
            $comment = new \Library\Entities\Comment(array(
                'id' => $request->getData('id'),
                'auteur' => $request->postData('auteur'),
                'contenu' => $request->postData('contenu')
            ));
        } else {
            $comment = $this->managers->getManagerOf('Comments')->get($request->getData('id'));
        }
        $formBuilder = new
                \Library\FormBuilder\CommentFormBuilder($comment);
        $formBuilder->build();
        $form = $formBuilder->form();
        // On récupère le gestionnaire de formulaire (le paramètre de getManagerOf() est bien entendu à remplacer).
        $formHandler = new \Library\FormHandler($form, $this->managers->getManagerOf('Comments'), $request);
        if ($formHandler->process()) {
// Ici ne résident plus que les opérations à effectuer une foisl'entité du formulaire enregistrée
// (affichage d'un message informatif, redirection, etc.).
            $this->app->user()->setFlash('Le commentaire a bien été
modifié');
            $this->app->httpResponse()->redirect('/admin/');
        }


        $this->page->addVar('form', $form->createView());
    }

    public function processForm(\Library\HTTPRequest $request) {
        if ($request->method() == 'POST') {
            $news = new \Library\Entities\News(
                    array(
                'auteur' => $request->postData('auteur'),
                'titre' => $request->postData('titre'),
                'contenu' => $request->postData('contenu')
                    )
            );
            if ($request->getExists('id')) {
                $news->setId($request->getData('id'));
            }
        } else {
// L'identifiant de la news est transmis si on veut la modifier.
            if ($request->getExists('id')) {
                $news = $this->managers->getManagerOf('News')->getUnique($request->getData('id'));
            } else {
                $news = new \Library\Entities\News;
            }
        }
        $formBuilder = new \Library\FormBuilder\NewsFormBuilder($news);
        $formBuilder->build();
        $form = $formBuilder->form();
        if ($request->method() == 'POST' && $form->isValid()) {
            $this->managers->getManagerOf('News')->save($news);
            $this->app->user()->setFlash($news->isNew() ? 'La news a bien
été ajoutée !' : 'La news a bien été modifiée !');
            $this->app->httpResponse()->redirect('/admin/');
        }
        $this->page->addVar('form', $form->createView());
    }

}
