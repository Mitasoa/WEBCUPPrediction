<?php 

    class Reve extends CI_Model
    {
        public function insert($idutilisateur,$date,$idtype){
            $requete = "insert into reve(id,idutilisateur,date,idtype) values (default,%s,'%s',%s)";
            $requete = sprintf($requete, $idutilisateur, $date, $idtype);
            $this->db->query($requete);
        }

        public function dernier(){
            $requete = "select * from reve order by id desc limit 1";
            $liste = $this->db->query($requete);
            return $liste;
        }
    }
?>