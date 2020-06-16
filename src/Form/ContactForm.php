<?php
//src/Form/ContactForm.php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;
use Cake\Event\Event;
use Cake\Mailer\TransportFactory;
use Cake\Mailer\Mailer;
use Cake\Core\Configure;


class ContactForm extends Form
{
    protected function _buildSchema(Schema $schema): Schema
    {
        return $schema->addField('fullname', 'string')
            ->addField('email', ['type' => 'string'])
            ->addField('message', ['type' => 'text']);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator->minLength('fullname', 1)
            ->minLength('message', 1)
            ->email('email');
        return $validator;
    }

    private function _checkRecaptchaResponse($response): bool
    {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array('secret' => Configure::read('google_recatpcha_settings.secret_key'),
                        'response' => $response);
    
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ),
        );
    
        $context  = stream_context_create($options);
        $json_result = file_get_contents($url, false, $context);
        $result = json_decode($json_result);
        return $result->success;
    }

    protected function _execute(array $data): bool
    {
        // Send an email.
        //print_r($data);
        if($this->_checkRecaptchaResponse($data["g-recaptcha-response"])){
            $contact_name = $data["fullname"];
            $contact_email = $data["email"];
            $contact_message =$data["message"];
            $mailer = new Mailer('sccontact');
            $mailer ->setEmailFormat('html')
                    ->setViewVars(['contact_name' => $contact_name,'contact_email' => $contact_email,
                                    'contact_message' => $contact_message])
                    ->setFrom(['contact.form@scarlet-us.com' => 'Contact Form'])
                    ->setTo('info@scarlet-us.com')
                    ->setSubject('Contact Form Submission')
                    ->viewBuilder()
                        ->setTemplate('contact');
            $mailer->deliver();
            if ($mailer->deliver()) {
                    return true;
            }
            else {
                return false;
            }
        }
        else{
            return false;
        }
        return true;
    }
}
?>