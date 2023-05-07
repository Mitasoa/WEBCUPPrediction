<?php 
    class Index extends CI_Model {
        public function getContenu(){
            $requete="select * from Contenu";
            $query=$this->db->query($requete);
            return $query->result_array();
        }

        public function getContenuById($slug){
            $split = explode("-", $slug);
            $split = explode(".", $split[count($split)-1]);
            $id = $split[0];
            $requete="select * from V_Contenu WHERE id = %s";
            $requete = sprintf($requete,$id);
            $query=$this->db->query($requete);
            return $query->result_array();
        }

        public function getType(){
            $requete="select * from Type";
            $query=$this->db->query($requete);
            return $query->result_array();
        }

        public function addContenu($type,$introduction,$titre,$mot,$explication,$conclusion,$image,$article,$id){
            $split = explode(",", $mot);
            $requete = "INSERT INTO contenu VALUES (%s,'%s','%s','%s','%s','%s','%s','%s','%s',DEFAULT)";
            $slug = url_title($titre, 'dash', true);
            $query = sprintf($requete,$this->db->escape_str($id),$this->db->escape_str($introduction),$this->db->escape_str($titre),$this->db->escape_str($explication),$this->db->escape_str($conclusion),$this->db->escape_str($image),$this->db->escape_str($slug),$this->db->escape_str($type),$this->db->escape_str($article));
            $query=$this->db->query($query);
            for ($i=0; $i < count($split); $i++) { 
                if($split[$i] != ""){
                    $requete = "INSERT INTO motCle VALUES (DEFAULT,'%s','%s')";
                    $requete = sprintf($requete,$id,$split[$i]);
                    $this->db->query($requete);
                }
            }
        }   

        public function getsequencephoto(){
            $requete="select nextval('photo')";
            $query=$this->db->query($requete);
            $query=$query->result_array();
            $crypt="contenu";
            foreach($query as $query){
                $crypt.=$query['nextval'];
            }
            return $crypt;
        }

        public function getId(){
            $requete="select nextval('id')";
            $query=$this->db->query($requete);
            $query=$query->result_array();
            foreach($query as $query){
                $crypt=$query['nextval'];
            }
            return $crypt;
        }
    }
?>