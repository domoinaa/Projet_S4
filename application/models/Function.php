<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Function extends CI_Model
{
    public function login($nom, $mdp){
        $request = "select * from User where Nom= '".$nom." and mdp='".$mdp."'";
        $query=$this->db->query($request);
        return $query->result_array();
    }

    public function inscription($Nom,$Age,$Poids,$sexe,$taille,$mdp){
        $sql = "Insert into User(Nom,Age,Poids,sexe,taille,mdp) values ('".$Nom."',".$Age.",".$Poids.",".$sexe.",".$taille.",".$mdp.")";        
        $this->db->query($sql); 
    }

    public function getObjectif(){
        $request = "select * from Objectif";
        $query=$this->db->query($request);
        return $query->result_array();
    }

    public function create_Regime($Nom,$Prix,$valeur){
        $request = "insert into Regime(Nom,Prix,valeur) values ('".$Nom.",'".$Prix."','"$valeur"')";
        $query=$this->db->query($request);
    }

    public function create_Sport($Nom,$valeur){
        $request = "insert into Sport(Nom,valeur) values ('".$Nom.",'"$valeur"')";
        $query=$this->db->query($request);
    }

}

?>