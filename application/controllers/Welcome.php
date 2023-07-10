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
        $this->load->model("Model");
		$nom = $this->input->post('nom');
		$mdp = $this->input->post('mdp');
        $liste = array();
        $liste['liste'] = $this->Model->login($nom, $mdp);
		if ($liste['liste']==null) {
			// $this->load->view('acceuil');
			echo 'diso ehh';
		}
		else {
			$this->load->view('acceuil');
			// echo 'diso ehh';
		}
    }

	public function redirect()
	{
		$this->load->view($this->input->get('redirect'));
	}

	public function get_inscription()
	{
		$this->load->model("Model");
		$nom = $this->input->post('nom');
		$mdp = $this->input->post('mdp');
		$Age = $this->input->post('age');
		$Poids = $this->input->post('poids');
		$sexe = $this->input->post('sexe');
		$taille = $this->input->post('taille');
        $this->Model->inscription($nom, $Age, $Poids, $sexe, $taille, $mdp);

		$this->load->view('acceuil');
	}

	public function get_objectif()
	{
		$this->load->model("Model");
        $liste = array();
        $liste['liste_objectif'] = $this->Model->getObjectif();

		$this->load->view('acceuil', $liste);
	}

	public function create_regime()
	{
		$this->load->model("Model");
		$nom = $this->input->post('nom');
		$Prix = $this->input->post('Prix');
		$valeur = $this->input->post('valeur');
    	$this->Model->create_Regime($Nom,$Prix,$valeur);

		$this->load->view('acceuil_back', $liste);
	}

	public function create_Sport()
	{
		$this->load->model("Model");
		$nom = $this->input->post('nom');
		$valeur = $this->input->post('valeur');
        $this->Model->create_Sport($nom, $valeur);

		$this->load->view('acceuil');
	}

	public function delete_regime()
	{
		$this->load->model("Model");
		$idRegime = $this->input->get('idRegime');
    	$this->Model->delete_Regime($idRegime);

		$this->load->view('acceuil_back');
	}

	public function delete_sport()
	{
		$this->load->model("Model");
		$idSport = $this->input->get('idSport');
    	$this->Model->delete_Sport($idSport);

		$this->load->view('acceuil_back');
	}

	public function update_regime()
	{
		$this->load->model("Model");
		$Nom = $this->input->get('Nom');
		$Prix = $this->input->get('Prix');
		$valeur = $this->input->get('valeur');

    	$this->Model->update_Regime($Nom, $Prix, $valeur);

		$this->load->view('acceuil_back');
	}

	public function update_sport()
	{
		$this->load->model("Model");
		$Nom = $this->input->get('Nom');
		$valeur = $this->input->get('valeur');

    	$this->Model->update_Sport($Nom, $valeur);

		$this->load->view('acceuil_back');
	}

	public function get_PorteMonnaie()
	{
		$this->load->model("Model");
        $liste = array();
        $liste['PorteMonnaie'] = $this->Model->getPorteMonnaie();

		$this->load->view('acceuil_back', $liste);
	}

	public function get_Code()
	{
		$this->load->model("Model");
        $liste = array();
        $liste['Code'] = $this->Model->getCode();

		$this->load->view('acceuil_back', $liste);
	}

	public function update_Argent()
	{
		$this->load->model("Model");
		$idValidation = $this->input->get('idValidation');
		$montantFarany = $this->Model->getOneValidation($idValidation)['montant'];
		$montant = $this->input->get('montant') + $montantFarany;

    	$this->Model->update_Argent($idUser, $montant);

		$this->load->view('acceuil_back');
	}

	public function update_User()
	{
		$this->load->model("Model");
		$nom = $this->input->post('nom');
		$mdp = $this->input->post('mdp');
		$Age = $this->input->post('age');
		$Poids = $this->input->post('poids');
		$sexe = $this->input->post('sexe');
		$taille = $this->input->post('taille');

    	$this->Model->update_User($nom, $Age, $Poids, $sexe, $taille, $mdp);

		$this->load->view('acceuil_back');
	}
}
