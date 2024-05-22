<?php

namespace App\Entity;

class Question
{
    private int $id;
    private string $libelle;
    private string $auteur;
    private int $point;
    private Utilisateur $idUser;
    private Qcm $idQcm;

    // public function __construct(int $id, string $libelle, string $auteur, int $point, Utilisateur $idUser, Qcm $idQcm)
    // {
    //     $this->id = $id;
    //     $this->libelle = $libelle;
    //     $this->auteur = $auteur;
    //     $this->point = $point;
    //     $this->idUser = $idUser;
    //     $this->idQcm = $idQcm;
    // }


    // GETTER
    public function getId(): int
    {
        return $this->id;
    }

    public function getLibelle(): string
    {
        return $this->libelle;
    }

    public function getAuteur(): string
    {
        return $this->auteur;
    }

    public function getPoint(): int
    {
        return $this->point;
    }

    public function getIdUser(): Utilisateur
    {
        return $this->idUser;
    }

    public function getIdQcm(): Qcm
    {
        return $this->idQcm;
    }


    // SETTER
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setLibelle(string $libelle): void
    {
        $this->libelle = $libelle;
    }

    public function setAuteur(string $auteur): void
    {
        $this->auteur = $auteur;
    }

    public function setPoint(int $point): void
    {
        $this->point = $point;
    }

    public function setIdUser(Utilisateur $idUser): void
    {
        $this->idUser = $idUser;
    }

    public function setIdQcm(Qcm $idQcm): void
    {
        $this->idQcm = $idQcm;
    }
}
