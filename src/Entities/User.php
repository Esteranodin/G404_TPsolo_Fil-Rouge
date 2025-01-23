<?php
// si lancer de dés alors résultat donne une attaque différente qui eneleve plus ou moins de pv

class User
{
    // Propriétés

    private string $mail;
    private string $mdp;
    private string $lastname;
    private string $firstname;

    // Méthode magique

    public function __construct(string $mail, string $mdp, string $lastname, string $firstname)
    {
        $this->mail = $mail;
        $this->mdp = $mdp;
        $this->lastname = $lastname;
        $this->firstname = $firstname;
    }

    // Geter & Seter

    public function getMail(): string
    {
        return $this->mail;
    }

    public function getPassword(): string
    {
        return $this->mdp;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function setPassword($mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    // Méthodes 

    /**
     * Fonction de base pour attaquer pour tous les personnages
     */
}
