<?php

namespace App\Entity;

class Qcm
{
    private int $id;
    private string $titre;
    private \DateTime $dateCreation;
    private \DateTime $dateExpiration;
    private string $theme;
    private Utilisateur $idUser;


    // CONSTRUCTOR
    public function __construct(int $id, string $titre, string $theme, Utilisateur $idUser)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->theme = $theme;
        $this->idUser = $idUser;
    }


    // GETTER
    public function getId(): int
    {
        return $this->id;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function getTheme(): string
    {
        return $this->theme;
    }

    public function getIdUser(): Utilisateur
    {
        return $this->idUser;
    }


    // SETTER
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    public function setTheme(string $theme): void
    {
        $this->theme = $theme;
    }

    public function setIdUser(Utilisateur $idUser): void
    {
        $this->idUser = $idUser;
    }
}
