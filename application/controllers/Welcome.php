<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
		
	}
	
	public function makaLogin(){
        $this->load->model("Function");
		$nom = $this->input->post('nom');
		$mdp = $this->input->post('mdp');
        $liste = array();
        $liste['liste'] = $this->Function->login($nom, $mdp);
		if (count($liste)==1) {
			$this->load->view('acceuil');
		}
		else {
			echo 'diso ehh';
		}
    }

	public function get_inscription()
	{
		$this->load->model("Function");
		$nom = $this->input->post('nom');
		$mdp = $this->input->post('mdp');
		$Age = $this->input->post('$Age');
		$Poids = $this->input->post('$Poids');
		$sexe = $this->input->post('sexe');
		$taille = $this->input->post('taille');
        $this->Function->inscription($nom, $mdp, $Age, $Poids, $sexe, $taille);

		$this->load->view('acceuil');

	}

	public function get_objectif()
	{
		$this->load->model("Function");
        $liste = array();
        $liste['liste_objectif'] = $this->Function->getObjectif();

		$this->load->view('acceuil', $liste);

	}

	public function create_regime()
	{
		$this->load->model("Function");
		$nom = $this->input->post('nom');
		$Prix = $this->input->post('Prix');
		$valeur = $this->input->post('valeur');
    	$this->Function->create_Regime($Nom,$Prix,$valeur);

		$this->load->view('acceuil_back', $liste);

	}

	public function get_Sport()
	{
		$this->load->model("Function");
		$nom = $this->input->post('nom');
		$valeur = $this->input->post('valeur');
        $this->Function->create_Sport($nom, $valeur);

		$this->load->view('acceuil');

	}

}
