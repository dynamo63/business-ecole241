<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inscription_model extends CI_Model
{

    public $id_i;
    public $nom_prenom;
    public $num_tel;
    public $num_what;
    public $email;
    public $sexe;
    public $date_n;
    public $domaine_act;
    public $type_service;
    public $attente;
    public $paye;
    public $horaire;
    public $id_com;
    public $id_res;

    public function __construct()
    {
        $this->load->database('local');
    }

    public function selectionner_tout()
    {
        $query = $this->db->get('inscription');
        return $query->result();
    }

    public function inserer_inscription($params)
    {
        $this->nom_prenom    = $params['nom_prenom'];
        $this->num_tel       = $params['num_tel'];
        $this->num_what      = $params['num_what'];
        $this->email         = $params['email'];
        $this->sexe          = $params['sexe'];
        $this->date_n        = $params['date_n'];
        $this->domaine_act   = $params['domaine_act'];
        $this->type_service  = $params['type_service'];
        $this->attente       = $params['attente'];
        $this->paye          = $params['paye'];
        $this->horaire       = $params['horaire'];

        return $this->db->insert('inscription', $this);
    }

    public function modifier($params)
    {
        $this->nom_prenom    = $params['nom_prenom'];
        $this->num_tel       = $params['num_tel'];
        $this->num_what      = $params['num_what'];
        $this->email         = $params['email'];
        $this->sexe          = $params['sexe'];
        $this->date_n        = $params['date_n'];
        $this->domaine_act   = $params['domaine_act'];
        $this->type_service  = $params['type_service'];
        $this->attente       = $params['attente'];
        $this->paye          = $params['paye'];
        $this->horaire       = $params['horaire'];

        $this->db->update('inscription', $this, array('id_i' => $params['id_i']));

    }

    
    public function supprimer_un_element_dans_inscription($params)
    {
        $this->nom_prenom    = $params['nom_prenom'];
        $this->num_tel       = $params['num_tel'];
        $this->num_what      = $params['num_what'];
        $this->email         = $params['email'];
        $this->sexe          = $params['sexe'];
        $this->date_n        = $params['date_n'];
        $this->domaine_act   = $params['domaine_act'];
        $this->type_service  = $params['type_service'];
        $this->attente       = $params['attente'];
        $this->paye          = $params['paye'];
        $this->horaire       = $params['horaire'];

        $this->db->delete('inscription', $this, array('id_i' => ['id_i']));
    }
}
