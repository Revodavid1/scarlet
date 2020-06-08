<?php
// src/Controller/HomeController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;
use Cake\Mailer\TransportFactory;
use App\Form\ContactForm;

class ContactController extends AppController
{

    public function index()
    {
        $this->viewBuilder()->setLayout('main'); 
        $contact = new ContactForm();
        $contact->setErrors(["email" => ["_required" => "*Required"],
                            "fullname" => ["_required" => "*Required"],
                            "message" => ["_required" => "*Required"]
                            ]);
        /*if ($this->request->is('post')) {
            if ($contact->execute($this->request->getData())) {
                $this->Flash->success('We will get back to you soon.');
            } else {
                $this->Flash->error('There was a problem submitting your form.');
            }
        }*/
        $this->set('contact', $contact);
    }
   
    public function initialize(): void
    {
        parent::initialize();
    }
}

?>