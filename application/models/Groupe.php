<?php 

    class Groupe extends CI_Model
    {
        private $id;
        private $nom; 
        private $niveau; 
    
        public function setid($idlogin){
            $this->id = $idlogin;
        }
        public function getid(){
            return $this->id;
        }
        public function setnom($idlogin){
            $this->nom = $idlogin;
        }
        public function getnom(){
            return $this->nom;
        }
        public function setniveau($idlogin){
            $this->niveau = $idlogin;
        }
        public function getniveau(){
            return $this->niveau;
        }
        public function listeGroupe(){
            $requete="select Groupe.id,Groupe.nom,Niveau.nom as niveau from Groupe join Niveau on niveau.id=Groupe.niveau";
            $query=$this->db->query($requete);
            return $query->result_array();

        }
        public function listegroupebyid($id){
            $requete="select Groupe.id,Groupe.nom,Niveau.nom as niveau from Groupe join Niveau on niveau.id=Groupe.niveau where Groupe.id=".$id;
            $query=$this->db->query($requete);
            return $query->result_array();

        }
    }
?>