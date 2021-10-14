<?php
namespace ClassesMetier\DRH;


use ClassesMetier\DRH\Employe;
use ClassesMetier\RD\Projet;
use DateTime;
use Exception;


class EmployeInformaticien extends Employe {
    
    private float $primeM;
    private Projet $projet;
    
    public function __construct(int $num, string $nom, string $prenom, DateTime $ddn, float $salaireM, Projet $projet) {
        parent :: __construct($num, $nom, $prenom, $ddn, $salaireM);
        $this->primeM = 0;
        $this->projet = $projet;
    }

    public function getPrimeM(): int {
        return $this->primeM;
    }
    
    public function getProjet(): Projet {
        return $this->projet;
    }

    public function setPrimeM(float $primeM): void {
        if($primeM <= ($this->salaireM*0.3)){
            $this->primeM = $primeM;
        }
        else{
            throw new Exception("La prime mensuel ne peut pas excèder 30% du salaire mensuel.");
        }
    }
    
    public function gainAnnuel(): float {
        return ($this->getSalaireM()+$this->getPrimeM())*12;
    }


    public function __toString() : string {
        return "Informaticien : " . parent::__toString() . " - " . $this->projet;
    }
}