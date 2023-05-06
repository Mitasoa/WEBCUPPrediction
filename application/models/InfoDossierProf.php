<?php 

    class InfoDossierProf extends CI_Model
    {
        public function insertinfodossierprof($rdv,$depart,$prof){
            $sql = "INSERT INTO infodossierprof(rdvambassade,depart,prof) values ('".$rdv."','".$depart."','".$prof."')";
            $this->db->query($sql);
        }
        public function listeinfodossierprof(){
            $requete="select infodossierprof.*,prof.nom,prof.prenom from infodossierprof join Prof on Prof.id=infodossierprof.prof;";
            $query=$this->db->query($requete);
            return $query->result_array();

        }
    }
?>