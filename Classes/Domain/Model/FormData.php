<?php
class Tx_Inventory_Domain_Model_FormData extends Tx_Extbase_DomainObject_AbstractEntity {
    /**
     * @var string
     **/
    protected $title = '';

    /**
     * @var string
     **/
    protected $firstname = '';

    /**
     * @var string
     **/
    protected $surname = '';

    /**
     * @var string
     **/
    protected $company = '';

    /**
     * @var string
     **/
    protected $email = '';

    /**
     * @var string
     **/
    protected $reason = '';

    /**
     * @var string
     **/
    protected $message = '';

    /**
     * @var int
     **/
    protected $telefone = '';

    /**
     * @var string
     **/
    protected $service = '';


    public function __construct($title = '', $firstname = '', $surname = '', $company = '', $email = '', $reason = '', $message = '', $telefone = 0, $service = '') {
        $this->setTitle($title);
        $this->setFirstname($firstname);
        $this->setSurname($surname);
        $this->setCompany($company);
        $this->setEmail($email);
        $this->setReason($reason);
        $this->setMessage($message);
        $this->setTelefone($telefone);
        $this->setService($service);
    }

    public function setTitle($title) {
        $this->title = (string)$title;
    }
    public function getTitle() {
        return $this->title;
    }

    public function setFirstname($firstname) {
        $this->firstname = (string)$firstname;
    }
    public function getFirstname() {
        return $this->firstname;
    }

    public function setSurname($surname) {
        $this->surname = (string)$surname;
    }
    public function getSurname() {
        return $this->surname;
    }

    public function setCompany($company) {
        $this->company = (string)$company;
    }
    public function getCompany() {
        return $this->company;
    }

    public function setEmail($email) {
        $this->email = (string)$email;
    }
    public function getEmail() {
        return $this->email;
    }

    public function setReason($reason) {
        $this->reason = (string)$reason;
    }
    public function getReason() {
        return $this->reason;
    }

    public function setMessage($message) {
        $this->message = (string)$message;
    }
    public function getMessage() {
        return $this->message;
    }

    public function setTelefone($telefone) {
        $this->telefone = (int)$telefone;
    }
    public function getTelefone() {
        return $this->telefone;
    }

    public function setService($service) {
        $this->service = (string)$service;
    }
    public function getService() {
        return $this->service;
    }
}
?>