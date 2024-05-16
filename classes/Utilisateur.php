<?php

namespace App\Entity;

class Utilisateur
{
    private int $id;
    private string $nom;
    private string $login;
    private string $password;
    private string $statut;
    private string $email;

    // CONSTRUCTOR
    public function __construct(int $id = 0, string $nom = '', string $login = '', string $password = '', string $statut = '', string $email = '')
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->login = $login;
        $this->password = $password;
        $this->statut = $statut;
        $this->email = $email;
    }


    // GETTER
    public function getId(): int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getStatut(): string
    {
        return $this->statut;
    }

    public function getEmail(): string
    {
        return $this->email;
    }


    // SETTER
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function setStatut(string $statut): void
    {
        $this->statut = $statut;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
}
