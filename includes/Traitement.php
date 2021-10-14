<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Includes;

class Traitement {
    
    //public static function instanciationUnEmploye() : void{
        //$e = new employe(1, "Dupont", "Jacques", new DateTime("12/07/1980"), 1000.00);
        //$nom = $e->getNom();
        //echo "L'employé instancié s'appelle " . $nom;
        //echo $e;
        //echo "<br>";
    //}
    //public static function instanciationUnEmployeErreur() : void{
        //$e = new employe(1, "Durand", "Sylvie", new DateTime("12/07/1980"), 800.00);
        //$nom = $e->getNom();
        //echo "L'employé instancié s'appelle " . $nom;
        //echo $e;
        //echo "<br>";
    //}
    
    public static function instanciationProjetV1() : void{
        $p = new Projet('PR7', 'Librairie Gelistout', 102);
        echo $p;
        echo "<br>";
        echo "Nom du projet = " . $p->getNomProjet();
        echo "<br>";
    }
    public static function instanciationEmployeInformaticienV1(){
        $p = new Projet('PR7', 'Librairie Gelistout', 102);
        $informaticien = new EmployeInformaticien(2, 'Dimont', 'Patrick', new DateTime("1980/07/12"),1200,$p);
        echo "Nom du Projet de l'employé numéro " . $informaticien->getNumero() . " : " . $informaticien->getProjet()->getNomProjet();
        echo "<br><br>";
        echo $informaticien;
        echo "<br>";
    }
    public static function instanciationEmployeInformaticienV2(){
        $p = new Projet('PR8', 'Association Bolide', 34);
        $informaticien = new EmployeInformaticien(3, 'Juvani', 'Adèle', new DateTime("1990/12/09"),1100,$p);
        echo "<p>";
        echo $informaticien;
        echo "</p>";
        $informaticien->setPrimeM(600);
        echo "Nouvelle prime = " . $informaticien->getPrimeM();
    }
    public static function instanciationEmployeNonInformaticienV1(){
        $nonInformaticien = new EmployeNonInformaticien(4, 'Duvernon', 'Hélène', new DateTime("1987/06/19"), 1150);
        echo "<p>";
        echo $nonInformaticien;
        echo "</p>";
        $nonInformaticien->setPrimeA(400);
        echo "Nouvelle prime = " . $nonInformaticien->getPrimeA();
    }
    public static function instanciationEmployeNonInformaticienV2(){
        $nonInformaticien = new EmployeNonInformaticien(5, 'Roman', 'Denis', new DateTime("1992/06/25"), 13000);
        echo "<p>";
        echo $nonInformaticien;
        echo "</p>";
        $nonInformaticien->setPrimeA(14000);
        echo "Nouvelle prime = " . $nonInformaticien->getPrimeA();
    }
    public static function testGainAnnuel() {
        $p = new Projet('PR7', 'Librairie Gelistout', 102);
        $informaticien = new EmployeInformaticien(2, 'Dimont', 'Patrick', new DateTime("1980/07/12"),1200,$p);
        $informaticien->setPrimeM(200);
        echo "<p>";
        echo $informaticien . " - Gain Annuel : " . $informaticien->gainAnnuel();
        echo "</p>";
        $nonInformaticien1 = new EmployeNonInformaticien(5, 'Roman', 'Denis', new DateTime("1992/06/25"), 1300);
        $nonInformaticien1->setPrimeA(1200);
        echo "<p>";
        echo $nonInformaticien1 . " - Gain Annuel : " . $nonInformaticien1->gainAnnuel();
        echo "</p>";
        $nonInformaticien2 = new EmployeNonInformaticien(5, 'Roman', 'Denis', new DateTime("1992/06/25"), 1300);
        $nonInformaticien2->setPrimeA(1400);
        echo "<p>";
        echo $nonInformaticien2 . " - Gain Annuel : " . $nonInformaticien2->gainAnnuel();
        echo "</p>";
    }
    
}