<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inscription extends CI_Controller
{

    public function index()
    {
        // Chargement du modele
        //$this->load->model('inscription_model');

        // Récupération d'informations
        //$ressources = $this->inscription_model->selectionner_tout();

        //var_dump($ressources);

        $this->load->view('inscription');
    }

    public function ajouter()
    {
        $nom_complet = $this->input->post('nom') . ' ' . $this->input->post('prenom');

        // Infos à insérer
        $params = [
            'nom_prenom'   => $nom_complet,
            'num_tel'      => $_POST['telephone'],
            'num_what'     => $this->input->post('telephoneWhatsapp'),
            'email'        => $this->input->post('email'),
            'sexe'         => $this->input->post('genre'),
            'date_n'       => $this->input->post('date_n'),
            'domaine_act'  => $this->input->post('domaine_act'),
            'type_service' => $this->input->post('type_service'),
            'attente'      => $this->input->post('attentes'),
            'paye'         => 0,
            'horaire'      => $this->input->post('periode'),
            'id_com'       => $this->input->post('id_com'),
            'id_res'       => $this->input->post('id_res')
        ];

        // Chargement du modele
        $this->load->model('inscription_model');

        // Insertion d'informations
        $success = $this->inscription_model->inserer_inscription($params);

        if ($success) {
            // Redirection vers la page d'accueil
            redirect('/');
        } else {
            // Redirection vers le formulaire
            redirect('/inscription');
        }
    }
}
