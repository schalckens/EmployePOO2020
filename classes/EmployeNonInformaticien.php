<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use App\ClassesMetier;

namespace App\ClassesMetier\DRH;

class EmployeNonInformaticien extends Employe {
    
    private float $primeA;
    
    public function __construct(int $num, string $nom, string $prenom, DateTime $ddn, float $salaireM) {
        parent :: __construct($num, $nom, $prenom, $ddn, $salaireM);
        $this->primeA = 0;
    }
    
    public function getPrimeA(): int {
        return $this->primeA;
    }

    public function setPrimeA(float $primeA): void {
        if($primeA <= $this->getSalaireM()){
            $this->primeA = $primeA;
        }
        else{
            $this->primeA = $this->getSalaireM();
        }
    }
    
    public function gainAnnuel(): float {
        return $this->getSalaireM()*12 + $this->getPrimeA();
    }
    
    public function __toString() : string {
        return "Non Informaticien : " . parent::__toString() . " - Prime Annuelle : " . $this->primeA;
    }
}
