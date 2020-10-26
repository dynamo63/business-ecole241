<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Commercial extends CI_Controller
{

    public function index()
    {
        // Chargement du modele
        //$this->load->model('commercial_model');

        // Récupération d'informations
        //$ressources = $this->commercial_model->tous_les_commerciaux();

        //var_dump($ressources);

        $data['titre'] = "Inscrivez-vous";

        $this->load->view('commercial_form_add', $data);
    }

    public function listing()
    {
        // Chargement du modele
        $this->load->model('commercial_model');

        // Récupération d'informations
        $commerciaux = $this->commercial_model->tous_les_commerciaux();

        print_r($commerciaux);

        //$this->load->view('commercial_form_add');
    }

    public function ajouter()
    {

        $nom_complet = $this->input->post('nom') . ' ' . $this->input->post('prenom');

        // Infos à insérer
        $params = [
            'nom_prenom' => $nom_complet,
            'num_tel'    => $this->input->post('telephone'),
            'num_what'   => $this->input->post('telephoneWhatsapp'),
            'email'      => $this->input->post('email'),
            'sexe'       => $this->input->post('genre'),
            'date_n'     => $this->input->post('date_n'),
            'nom_user'   => $this->input->post('utilisateur'),
            'mot_passe'  => $this->input->post('motDePasse')
        ];

        // Chargement du modele
        $this->load->model('commercial_model');

        // Insertion dans la base de données
        $success = $this->commercial_model->inserer_commercial($params);

        if ($success) {
            redirect('/commercial/listing');
        } else {
            redirect('/commercial/index');
        }
    }
}
