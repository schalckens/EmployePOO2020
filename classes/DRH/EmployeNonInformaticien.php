<?php

namespace ClassesMetier\DRH;

use ClassesMetier\DRH\Employe;
use DateTime;
use Exception;

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
