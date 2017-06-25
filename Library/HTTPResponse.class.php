<?php

namespace Library;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HTTPResponse
 *
 * @author N Jenny Patrick
 */
class HTTPResponse {

    //put your code here
    protected $page;
    protected $app ;
 	public function __construct($app) {
        $this->app = $app;
    }
    public function addHeader($header) {
        header($header);
    }

    public function redirect($location) {
        header('Location: ' . $location);
        exit;
    }

    public function redirect404() {
        $this->page = new Page($this->app);
        $this->page->setContentFile(__DIR__ . '/../Errors/404.html');
        $this->addHeader('HTTP/1.0 404 Not Found');
        $this->send();
    }

    public function send() {
// Actuellement, cette ligne a peu de sens dans votre esprit.
// Promis, vous saurez vraiment ce qu'elle fait d'ici la fin du chapitre
// (bien que je suis sûr que les noms choisis sont assezexplicites !).
        exit($this->page->getGeneratedPage());
    }

    public function setPage(Page $page) {
        $this->page = $page;
    }

// Changement par rapport à la fonction setcookie() : le dernierargument est par défaut à true.
    public function setCookie($name, $value = '', $expire = 0, $path = null, $domain = null, $secure = false, $httpOnly = true) {
        setcookie($name, $value, $expire, $path, $domain, $secure, $httpOnly);
    }

}
