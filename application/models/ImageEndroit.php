<?php 

    class ImageEndroit extends CI_Model
    {
        private $id;
        private $idendroit;
        private $image;
        private $description;
    
        public function setid($id){
            $this->id = $id;
        }
        public function getid(){
            return $this->id;
        }
        public function setidendroit($idendroit){
            $this->idendroit = $idendroit;
        }
        public function setimage($image){
            $this->image = $image;
        }
        public function setdescription($description){
            $this->description = $description;
        }

        public function liste($endroit){
            $requete = "select * from endroit where upper(endroit) like upper('".$endroit."%')";
            $query=$this->db->query($requete);
            return $query->result_array();
        }
        public function liste_image($endroit){
            $requete = "select img.*,e.endroit from imageendroit img join endroit e on img.idendroit = e.id where e.id=".$endroit."";
            $query=$this->db->query($requete);
            return $query->result_array();
        }
    }
?>