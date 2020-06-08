<?php
//src/Form/ContactForm.php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;
use Cake\Event\Event;
use Cake\Mailer\Email;
use Cake\Mailer\TransportFactory;
use Cake\Mailer\Mailer;

class ContactForm extends Form
{
    protected function _buildSchema(Schema $schema): Schema
    {
        return $schema->addField('fullname', 'string')
            ->addField('email', ['type' => 'string'])
            ->addField('subject', ['type' => 'string'])
            ->addField('message', ['type' => 'text']);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator->minLength('fullname', 1)
            ->minLength('message', 1)
            ->email('email');
        return $validator;
    }

    protected function _execute(array $data): bool
    {
        // Send an email.
        /*Not working
        $email = new Mailer();
        $email->setFrom(['contact.form@scarlet-us.com' => 'Contact Form'])
                ->setTo('orevadavidomu@gmail.com')
                ->setSubject('Contact Form Submission')
                ->deliver();
        if ($email->deliver()) {
                return true;
        }
        else {
            return false;
        }*/
        return true;
    }
}
?>