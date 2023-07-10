<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Function extends CI_Model
{
    public function login($nom, $mdp){
        $request = "select * from User where Nom= '".$nom." and mdp='".$mdp."'";
        $query=$this->db->query($request);
        return $query->result_array();
    }

}

?>