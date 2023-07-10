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

    public function getObjectif($Nom,$descri){
        $request = "select * from Objectif where Nom= '".$nom." and descri='".$descri."'";
        $query=$this->db->query($request);
        return $query->result_array();
    }


}

?>