<?php
// src/Controller/CareerController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;
use Cake\Mailer\TransportFactory;
use App\Form\CareerForm;

class CareerController extends AppController
{

    public function index()
    {
        $usecaptcha = 1;
        $this->set('usecaptcha',$usecaptcha);
        $this->viewBuilder()->setLayout('main'); 
        $career = new CareerForm();
        $career->setErrors(["email" => ["_required" => "*Required"],
                            "fullname" => ["_required" => "*Required"],
                            "phone" => ["_required" => "*Required"],
                            "address" => ["_required" => "*Required"],
                            "additional_information" => ["_required" => "*Required"]
                            ]);
        if ($this->request->is('post')) {
            try{
                if ($career->execute($this->request->getData())) {
                    $this->Flash->success('We will get back to you soon.');
                }
                else {
                    $this->Flash->error('There was a problem submitting your form.');
                }       
            }
            catch(\Exception $e){
                $this->Flash->error('There was a problem submitting your form.');
            }
        }
        $this->set('career', $career);
    }
   
    public function initialize(): void
    {
        parent::initialize();
    }
}

?>