<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cours_model extends CI_Model
{

    public $id_co;
    public $titre;
    public $auteur;
    public $type_co;
    public $description;
    public $lien;

    public function __construct()
    {
        $this->load->database();
    }

    public function tous_les_cours()
    {
        $query = $this->db->get('cours');//selection de toutes les informations de la table
        return $query->result();
    }

    public function inserer_cours($params)
    {
        $this->titre    = $params['titre']; // enregistrement d'un cours
        $this->auteur  = $params['auteur'];
        $this->type_co  = $params['type_co'];
        $this->description  = $params['description'];
        $this->lien  = $params['lien'];

        return $this->db->insert('cours', $this);
    }

    public function update_cours($params)
    {
        $this->titre    = $params['titre']; // mise a jour
        $this->auteur  = $params['auteur'];
        $this->type_co  = $params['type_co'];
        $this->description  = $params['description'];
        $this->lien  = $params['lien'];

        return $this->db->update('cours', $this, array('id_co' => $params['id_co']));
    }
    public function supprimer_cours($params)
    {
        $this->titre    = $params['titre']; //supprimer des donnees precises
        $this->auteur  = $params['auteur'];
        $this->type_co  = $params['type_co'];
        $this->description  = $params['description'];
        $this->lien  = $params['lien'];

        return $this->db->delete('cours', $this, array('id_co' => $params['id_co']));
    }
}
