<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller {

	public function index()
	{
        // Chargement du modele
        $this->load->model('ressource_model');

        // Récupération d'informations
        $ressources = $this->ressource_model->toutes_les_ressources();

        //var_dump($ressources);

		$this->load->view('inscription');
	}
}
