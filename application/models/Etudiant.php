<?php 

    class Etudiant extends CI_Model
    {
        public function listeEtudiant(){
            $requete="select * from Etudiant";
            $query=$this->db->query($requete);
            return $query->result_array();

        }
        public function rechercheAvanceetudiant($search){
            $requete="select * from etudiant where lower(nom) like '%".$search."%' or lower(prenom) like '%".$search."%'or lower(adresse) like '%".$search."%' or lower(telephone) like '%".$search."%' or lower(mail) like '%".$search."%'";
            $query=$this->db->query($requete);
            return $query->result_array();

        }
    }
?>