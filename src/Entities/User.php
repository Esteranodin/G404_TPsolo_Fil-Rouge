<?php

class User
{
    // Propriétés
    private ?int $id;
    private string $mail;
    private string $mdp;
    private string $lastname;
    private string $firstname;
    private ?UserPro $userPro;

    // private string $role;

    // Méthode magique

    public function __construct(string $mail, string $mdp, string $lastname, string $firstname, ?int $id = null, ?UserPro $userPro = null)
    {
        $this->id = $id;
        $this->mail = $mail;
        $this->mdp = $mdp;
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->userPro = $userPro;
    }

    // Geter & Seter

    public function getId()
    {
        return $this->id;
    }

    public function getMail(): string
    {
        return $this->mail;
    }

    public function setMail($mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->mdp;
    }

    public function setPassword($mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function setLastname($lastname) : self 
    {
        $this->lastname = $lastname;
        return $this;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function setFirstname($firstname) : self 
    {
        $this->firstname = $firstname;
        return $this;
    }


    // public function getRole()
    // {
    //     return $this->role;
    // }


    public function getUserPro(): ?UserPro
    {
        return $this->userPro;
    }

    /**
     * @return  self
     */
    public function setUserPro(UserPro $userPro): self
    {
        $this->userPro = $userPro;

        return $this;
    }

    // Méthodes 
}

/**
 * Permet de décrire la méthode ou une future instance/classe
 */
