<?php 

    class EtapeEtudiant extends CI_Model
    {
        public function listeEtapeEtudiant($id){
            $requete="select * from EtapeEtudiant where id=".$id;
            $query=$this->db->query($requete);
            return $query->result_array();

        }
        public function pourcentagedossieretudiant($id){
            $requete="select sum(etatvalide)*100/11::float as pourcentage from EtapeEtudiant where id=".$id;
            $query=$this->db->query($requete);
            $query=$query->result_array();
            $pourcentage=0;
            foreach($query as $query){
                $pourcentage=$query['pourcentage'];
            }
            return $pourcentage;
        }
    }
?>