<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    private $loggedUser;

    public function __construct()
    {
        
    }

    public function index() {
        $this->render('home', ['nome' => 'JSNSYSTEMAS']);
    }
}