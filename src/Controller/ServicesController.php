<?php
// src/Controller/HomeController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;
use Cake\Mailer\TransportFactory;

class ServicesController extends AppController
{

    public function index()
    {
        $this->viewBuilder()->setLayout('main'); 
    }
   
    public function initialize(): void
    {
        parent::initialize();
    }
}

?>