<?php
require './absUser.php';

class User extends AbsUser{
    protected string $email;
    public function __construct(string $nom , string $prenom)
    {
        parent::__construct($nom, $prenom);
    }
    public function getNom() :string {
        return $this->nom;
    }
    public function setNom(string $nom) :string {
        return $this->nom = $nom;
    }
    public function setEmail(string $email) :string {
        return $this->email = $email;
    }
}