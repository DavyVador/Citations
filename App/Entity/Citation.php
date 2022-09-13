<?php

namespace App\Entity;

class Citation{
    private int $id;
    private ?string $citation;
    private ?string $auteur;

    public function __construct(string $citation, string $auteur) {
        $this->citation = $citation;
        $this->auteur = $auteur;
    }

    public function getId(): int{   
        return $this->id;
    }
    public function setId(int $id): void {  
        $this->id = $id;
    }

    public function getCitation(): ?string{
        return $this->citation;
    }
    public function setCitation(?string $citation): void { 
        $this->citation = $citation;
    }

    public function getAuteur(): ?string{
        return $this->auteur;
    }
    public function setAuteur(?string $auteur): void {  
        $this->auteur = $auteur;
    }
}