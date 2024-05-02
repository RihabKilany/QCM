<?php

namespace App\Classes;

class Response
{
    private int $id;
    private string $indicateur;
    private string $response;
    private Question $idQuestion;


    // CONSTRUCTOR
    public function __construct(int $id, string $indicateur, string $response, Question $idQuestion)
    {
        $this->id = $id;
        $this->indicateur = $indicateur;
        $this->response = $response;
        $this->idQuestion = $idQuestion;
    }


    // GETTER
    public function getId(): int
    {
        return $this->id;
    }

    public function getIndicateur(): string
    {
        return $this->indicateur;
    }

    public function getResponse(): string
    {
        return $this->response;
    }

    public function getIdQuestion(): Question
    {
        return $this->idQuestion;
    }


    // SETTER
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setIndicateur(string $indicateur): void
    {
        $this->indicateur = $indicateur;
    }

    public function setResponse(string $response): void
    {
        $this->response = $response;
    }

    public function setIdQuestion(Question $idQuestion): void
    {
        $this->idQuestion = $idQuestion;
    }
}
