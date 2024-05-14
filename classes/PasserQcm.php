<?php

namespace App\Classes;

class PasserQcm
{
    private Utilisateur $idUtilisateur;
    private Qcm $idQcm;
    private int $note;


    // CONSTRUCTOR
    public function __construct(Utilisateur $idUtilisateur, Qcm $idQcm, int $note)
    {
        $this->idUtilisateur = $idUtilisateur;
        $this->idQcm = $idQcm;
        $this->note = $note;
    }


    // GETTER
    public function getIdUtilisateur(): Utilisateur
    {
        return $this->idUtilisateur;
    }

    public function getIdQcm(): Qcm
    {
        return $this->idQcm;
    }

    public function getNote(): int
    {
        return $this->note;
    }


    // SETTER
    public function setIdUtilisateur(Utilisateur $idUtilisateur): void
    {
        $this->idUtilisateur = $idUtilisateur;
    }

    public function setIdQcm(Qcm $idQcm): void
    {
        $this->idQcm = $idQcm;
    }

    public function setNote(int $note): void
    {
        $this->note = $note;
    }
}
