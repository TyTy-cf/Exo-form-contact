<?php


namespace App\Model;

class FormDataClassContact
{
    private $nom;
    private $prenom;
    private $email;
    private $objet;
    private $message;
    private $numeroTelephone;

    /**
     * Contructeur d'un FormDataClassContact
     *
     * @param $nom
     * @param $prenom
     * @param $email
     * @param $objet
     * @param $message
     * @param $numeroTelephone
     */
    public function __construct($nom, $prenom, $email, $objet, $message, $numeroTelephone) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->objet = $objet;
        $this->message = $message;
        $this->numeroTelephone = $numeroTelephone;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string|null $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string|null $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * @param string|null $objet
     */
    public function setObjet($objet): void
    {
        $this->objet = $objet;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }

    /**
     * @return ?string
     */
    public function getNumeroTelephone()
    {
        return $this->numeroTelephone;
    }

    /**
     * @param string|null $numeroTelephone
     */
    public function setNumeroTelephone($numeroTelephone): void
    {
        $this->numeroTelephone = $numeroTelephone;
    }

}