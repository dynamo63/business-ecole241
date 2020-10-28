<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Commercial_model extends CI_Model
{

    public $nom_prenom;
    public $num_tel;
    public $num_what;
    public $email;
    public $sexe;
    public $date_n;
    public $nom_user;
    public $mot_passe;

    public function __construct()
    {
        $this->load->database('local');
    }

    public function tous_les_commerciaux()
    {
        $query = $this->db->get('commercial');
        return $query->result();
    }

    public function inserer_commercial($params)
    {
        $this->nom_prenom = $params['nom_prenom'];
        $this->num_tel    = $params['num_tel'];
        $this->num_what   = $params['num_what'];
        $this->email      = $params['email'];
        $this->sexe       = $params['sexe'];
        $this->date_n     = $params['date_n'];
        $this->nom_user   = $params['nom_user'];
        $this->mot_passe  = $params['mot_passe'];

        return $this->db->insert('commercial', $this);
    }

    public function modifier_commercial($params)
    {
        $this->nom_prenom = $params['nom_prenom']; // please read the below note
        $this->num_tel    = $params['num_tel'];
        $this->num_what   = $params['num_what'];
        $this->email      = $params['email'];
        $this->sexe       = $params['sexe'];
        $this->date_n     = $params['date_n'];
        $this->nom_user   = $params['nom_user'];
        $this->mot_passe  = $params['mot_passe'];

        $this->db->update('entries', $this, array('id' => $params['id']));
    }

    public function supprimer_commercial($params)
    {
        $this->nom_prenom = $params['nom_prenom']; // please read the below note
        $this->num_tel    = $params['num_tel'];
        $this->num_what   = $params['num_what'];
        $this->email      = $params['email'];
        $this->sexe       = $params['sexe'];
        $this->date_n     = $params['date_n'];
        $this->nom_user   = $params['nom_user'];
        $this->mot_passe  = $params['mot_passe'];

        $this->db ->delete('commercial',array('id' =>$params['id']));
    }

}