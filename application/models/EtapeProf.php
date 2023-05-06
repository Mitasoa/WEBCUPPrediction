<?php 

    class EtapeProf extends CI_Model
    {
        public function listeEtapeProf($id){
            $requete="select * from EtapeProf where id=".$id;
            $query=$this->db->query($requete);
            return $query->result_array();

        }
        public function pourcentagedossierprof($id){
            $requete="select sum(etatvalide)*100/11::float as pourcentage from Etapeprof where id=".$id;
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