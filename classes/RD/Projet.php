<?php

namespace ClassesMetier\RD;

class Projet {
    private string $codeProjet;
    private string $nomProjet;
    private int $dureePrevue;
    
    public function __construct(string $codeProjet, string $nomProjet, int $dureePrevue) {
        $this->codeProjet = $codeProjet;
        $this->nomProjet = $nomProjet;
        $this->dureePrevue = $dureePrevue;
    }
    
    public function getCodeProjet(): string {
        return $this->codeProjet;
    }

    public function getNomProjet(): string {
        return $this->nomProjet;
    }

    public function getDureePrevue(): int {
        return $this->dureePrevue;
    }

    public function setDureePrevue(int $dureePrevue): void {
        $this->dureePrevue = $dureePrevue;
    }
    
    public function __toString() : string {
        return "Projet : " . $this->codeProjet . " - " . $this->nomProjet . " - " . $this->dureePrevue;
    }
    
}