<?php 

    class ReveDescription extends CI_Model
    {
        public function insert($idreve, $idendroit, $actions, $objetimportant, $mode){
            $requete = "insert into revedescription(idreve,idendroit,actions,objetimportant,mode) values (%s,%s,'%s','%s',%s)";
            $requete = sprintf($requete, $idreve, $idendroit, $actions, $objetimportant, $mode);
            $this->db->query($requete);
        }
        public function update($idreve){
            if($idreve<0){
                $requete2 = "update revedescription set ordre=".$idreve." where ordre=".((-1*$idreve)-1);
                $this->db->query($requete2);
                $requete = "update revedescription set ordre=ordre-1 where ordre=".(-1*$idreve);
            $this->db->query($requete);
            }else{
                $requete3 = "update revedescription set ordre=".($idreve+1)." where ordre=".(($idreve));
                $this->db->query($requete3);
                $requete1 = "update revedescription set ordre=".$idreve." where ordre=".($idreve-1);
            $this->db->query($requete1);
            }
            // $requete = sprintf($requete, $idreve, $idendroit, $actions, $objetimportant, $mode);
        }
        
        public function dernier(){
            $requete = "select * from revedescription order by id desc limit 1";
            $liste = $this->db->query($requete);
            return $liste->result_array();
        }
        public function liste(){
            $requete = "select * from listerevedescription ls join revedescription  rev on rev.id=ls.id order by rev.ordre desc";
            $liste = $this->db->query($requete);
            return $liste->result_array();
        }
    }
?>