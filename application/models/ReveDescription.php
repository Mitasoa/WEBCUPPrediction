<?php 

    class ReveDescription extends CI_Model
    {
        public function insert($idreve, $idendroit, $actions, $objetimportant, $mode){
            $requete = "insert into revedescription(idreve,idendroit,actions,objetimportant,mode) values (%s,%s,'%s','%s',%s)";
            $requete = sprintf($requete, $idreve, $idendroit, $actions, $objetimportant, $mode);
            $this->db->query($requete);
        }

        public function dernier(){
            $requete = "select * from revedescription order by id desc limit 1";
            $liste = $this->db->query($requete);
            return $liste->result_array();
        }
    }
?>