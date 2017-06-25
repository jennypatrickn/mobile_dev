<?php

namespace Applications\Backend\Modules\Connexion;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConnexionController
 *
 * @author N Jenny Patrick
 */
class ConnexionController extends \Library\BackController {

    public function executeIndex(\Library\HTTPRequest $request) {
        $this->page->addVar('title', 'Connexion');
        if ($request->postExists('login')) {
            $login = $request->postData('login');
            $password = $request->postData('password');
            if ($login == $this->app->config()->get('login') && $password == $this->app->config()->get('pass')) {
                $this->app->user()->setAuthenticated(true);
                $this->app->httpResponse()->redirect('.');
            } else {
                $this->app->user()->setFlash('Le pseudo ou le mot de passe est incorrect.');
            }
        }
    }

    public function executeLogout() {
        $this->app->user()->setAuthenticated(false);
        $this->app->httpResponse()->redirect('.');
    }

}
