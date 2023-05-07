<?php 

    class Reve extends CI_Model
    {
        public function insert($idutilisateur,$date,$idtype){
            $requete = "insert into reve(idutilisateur,date,idtype) values (%s,'%s',%s)";
            $requete = sprintf($requete, $idutilisateur, $date, $idtype);
            $this->db->query($requete);
        }

        public function dernier(){
            $requete = "select * from reve order by id desc limit 1";
            $liste = $this->db->query($requete);
            return $liste->result_array();
        }
    }
?>