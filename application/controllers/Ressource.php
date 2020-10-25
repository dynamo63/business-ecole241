<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ressource extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
    }
    
    public function liste()
	{
		$this->load->view('ressource_liste');
    }
    
    public function supprimer()
	{
		$this->load->view('ressource_supprimer');
	}
}
