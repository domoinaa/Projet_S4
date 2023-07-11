<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model
{
    public function login($nom, $mdp){
        $request = "select * from User where Nom= '".$nom."' and mdp='".$mdp."'";
        // echo $request;
        $query=$this->db->query($request);
        return $query->result_array();
    }

    public function inscription($Nom,$Age,$Poids,$sexe,$taille,$mdp){
        $sql = "Insert into User(Nom,Age,Poids,sexe,taille,mdp) values ('".$Nom."',".$Age.",".$Poids.",'".$sexe."',".$taille.",'".$mdp."')";        
        $this->db->query($sql); 
    }

    public function getObjectif(){
        $request = "select * from Objectif";
        $query=$this->db->query($request);
        return $query->result_array();
    }

    public function getLast_Sport(){
        $request = "select max(idSport) as idSport from Sport";
        $query=$this->db->query($request);
        return $query->result_array();
    }

    public function getLast_Regime(){
        $request = "select max(idRegime) as idRegime from Regime";
        $query=$this->db->query($request);
        return $query->result_array();
    }

    public function create_Regime($Nom,$Prix,$valeur){
        $request = "insert into Regime(Nom,Prix,valeur) values ('".$Nom."',".$Prix.",".$valeur.")";
        $query=$this->db->query($request);
    }

    public function create_Sport($Nom,$valeur){
        $request = "insert into Sport(Nom,valeur) values ('".$Nom."',".$valeur.")";
        $query=$this->db->query($request);
    }

    public function delete_Regime($idRegime){
        $request = "DELETE FROM Regime WHERE idRegime= ".$idRegime;
        $query=$this->db->query($request);
    }

    public function delete_Sport($idSport){
        $request = "DELETE FROM Sport WHERE idSport= ".$idSport;
        $query=$this->db->query($request);
    }

    public function update_Regime($Nom, $Prix, $valeur){
        $request = "UPDATE Regime SET Nom = '".$Nom."', Prix = ".$Prix.", valeur = ".$valeur." WHERE idRegime = ".$idRegime;
        $query=$this->db->query($request);
    }

    public function update_Sport($Nom, $valeur){
        $request = "UPDATE Sport SET Nom = '".$Nom."', valeur = ".$valeur." WHERE idSport = ".$idSport;
        $query=$this->db->query($request);
    }

    public function getPorteMonnaie(){
        $request = "select * from PorteMonnaie";
        $query=$this->db->query($request);
        return $query->result_array();
    }

    public function getOneValidation($idUser){
        $request = "select * from validation_monnaie WHERE idPorteMonnaie = ".$idUser;
        $query=$this->db->query($request);
        return $query->result_array();
    }

    public function getOnePorteMonnaie($idUser){
        $request = "select * from PorteMonnaie WHERE idUser = ".$idUser ;
        $query=$this->db->query($request);
        return $query->result_array();
    }

    public function getCode(){
        $request = "select * from Code";
        $query=$this->db->query($request);
        return $query->result_array();
    }

    public function update_Argent($idUser, $montant){
        $request = "UPDATE PorteMonnaie SET  montant = ".$montant." WHERE idUser = ".$idUser;
        $query=$this->db->query($request);
    }
    
    public function update_User($Nom,$Age,$Poids,$sexe,$taille,$mdp){
        $request = "UPDATE User SET Nom = ".$Nom.", Age = ".$Age.", Poids = ".$Poids.", sexe = ".$sexe.", taille = ".$taille.", mdp = ".$mdp." WHERE idUser = ".$idUser;
        $query=$this->db->query($request);
    }

    public function getRegimeObjectif($idObjectif){
        $request = "select * from RegimeParRapportObjectif where idObjectif=".$idObjectif;
        $query=$this->db->query($request);
        return $query->result_array();
    }

    public function getSportObjectif($idObjectif){
        $request = "select * from SportParRapportObjectif where idObjectif=".$idObjectif;
        $query=$this->db->query($request);
        return $query->result_array();
    }

    public function insert_RegimeObjectif($idRegime,$idObjectif,$genre){
        $request = "INSERT INTO RegimeObjectif VALUES (null,".$idRegime.",".$idObjectif.",'".$genre."')";
        $query=$this->db->query($request);
    }

    public function insert_SportObjectif($idSport,$idObjectif,$genre){
        $request = "INSERT INTO SportObjectif VALUES (null,".$idSport.",".$idObjectif.",'".$genre."')";
        $query=$this->db->query($request);
    }

    public function getSuggestion($idUser, $idObjectif, $Poids){
        $liste_regime = array();
        $liste_regime = $this-> getRegimeObjectif($idObjectif);
        $liste_sport = array();
        $liste_sport = $this-> getSportObjectif($idObjectif);

        //durée Sport
        $duree = rand(7,60);

        //pourcentage régime - Sport
        $pourcentageRegime = rand(0,100);
        $pourcentageSport = 100 - $pourcentageRegime;

        $vrai_valeur_Regime = $Poids * ($pourcentageRegime/100);
        $vrai_valeur_Sport = $Poids * ($pourcentageSport/100);

        $taille_liste_regime = count($liste_regime);
        $taille_liste_sport = count($liste_sport);

        $table2D = array();

        $valeur_regime = 0;
        while ($valeur_regime < $vrai_valeur_Regime) 
        {
            $idRegime = rand(0, $taille_liste_regime);
            $quantite = 1;
            $valeur_regime = $valeur_regime + $liste_regime[$idRegime]['valeur'];
            if($valeur_regime >= $vrai_valeur_Regime){
                $table2D[] = array(
                    'Nom' => $liste_regime[$idRegime]['Nom'],
                    'Quantite' => $quantite
                );
                break;
            }
            $table2D[] = array(
                'Nom' => $liste_regime[$idRegime]['Nom'],
                'Quantite' => $quantite
            );

        }

        $valeur_sport = 0;
        while ($valeur_sport < $vrai_valeur_Sport) 
        {
            $idSport = rand(0, $taille_liste_sport);
            $quantite = 1;
            $valeur_sport = $valeur_sport + $liste_sport[$idSport]['valeur'];
            if($valeur_sport >= $vrai_valeur_sport){
                $table2D[] = array(
                    'Nom' => $liste_sport[$idSport]['Nom'],
                    'Quantite' => $quantite
                );
                break;
            }
            $table2D[] = array(
                'Nom' => $liste_sport[$idSport]['Nom'],
                'Quantite' => $quantite
            );

        }

        $totals = array();

        foreach ($table2D as $row) {
            $nom = $row['Nom'];
            $isany = $row['Quantite'];

            if (isset($totals[$nom])) {
                $totals[$nom] += $isany;
            } else {
                $totals[$nom] = $isany;
            }
        }
        return $totals;
    }

}

?>