<?php 

    class InfoDossierEtudiant extends CI_Model
    {
        public function insertinfodossieretudiant($rdv,$depart,$etudiant){
            $sql = "INSERT INTO infodossieretudiant(rdvambassade,depart,etudiant) values ('".$rdv."','".$depart."','".$etudiant."')";
            $this->db->query($sql);
        }
        public function listeinfodossieretudiant(){
            $requete="select infodossieretudiant.*,etudiant.nom,etudiant.prenom from infodossieretudiant join Etudiant on Etudiant.id=infodossieretudiant.etudiant;";
            $query=$this->db->query($requete);
            return $query->result_array();

        }
    }
?>