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


class CareerForm extends Form
{
    protected function _buildSchema(Schema $schema): Schema
    {
        return $schema->addField('fullname', 'string')
            ->addField('email', ['type' => 'string'])
            ->addField('phone', ['type' => 'string'])
            ->addField('address', ['type' => 'string'])
            ->addField('attach_resume', ['type' => 'string'])
            ->addField('additional_information', ['type' => 'text']);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator->minLength('fullname', 1)
            ->minLength('additional_information', 1)
            ->minLength('address', 1)
            ->email('email')
            ->minLength('phone', 10)
            ->maxLength('phone',10);
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
        //print($_FILES["attach_resume"]["tmp_name"]);
        if ($_FILES["attach_resume"]["size"] > 1000000) {
            return false;
        }
        if($this->_checkRecaptchaResponse($data["g-recaptcha-response"])){
            $contact_name = $data["fullname"];
            $contact_email = $data["email"];
            $contact_phone = $data["phone"];
            $contact_address = $data["address"];
            $contact_additional = $data["additional_information"];
            $contact_resume_url = $_FILES["attach_resume"]["tmp_name"];
            $mailer = new Mailer('sccontact');
            $mailer ->setEmailFormat('html')
                    ->setAttachments(['resume.pdf' => $contact_resume_url])
                    ->setViewVars(['contact_name' => $contact_name,'contact_email' => $contact_email,
                                    'contact_phone' => $contact_phone,'contact_address' => $contact_address,
                                    'contact_additional' => $contact_additional])
                    ->setFrom(['contact.form@scarlet-us.com' => 'Career Form'])
                    ->setTo('careers@scarlet-us.com')
                    ->setSubject('Career Form Submission')
                    ->viewBuilder()
                        ->setTemplate('career');
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