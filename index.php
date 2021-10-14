<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use App\Includes\Traitement;

include __DIR__ . "/vendor/autoload.php";

try{
    //Traitement::instanciationUnEmploye();
    //Traitement::instanciationUnEmployeErreur();
    //Traitement::instanciationUnEmploye();
    Traitement::instanciationProjetV1();
    Traitement::instanciationEmployeInformaticienV1();
    //Traitement::instanciationEmployeInformaticienV2();
    Traitement::instanciationEmployeNonInformaticienV1();
    Traitement::instanciationEmployeNonInformaticienV2();
    Traitement::testGainAnnuel();
} catch (Exception $ex) {
    echo $ex->getMessage();
}