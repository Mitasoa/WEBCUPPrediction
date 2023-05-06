<?php 

    class EtudiantGroupe extends CI_Model
    {
        private $id;
        private $etudiant; 
        private $groupe; 
    
        public function setid($idlogin){
            $this->id = $idlogin;
        }
        public function getid(){
            return $this->id;
        }
        public function setetudiant($idlogin){
            $this->etudiant = $idlogin;
        }
        public function getetudiant(){
            return $this->etudiant;
        }
        public function setgroupe($idlogin){
            $this->groupe = $idlogin;
        }
        public function getgroupe(){
            return $this->groupe;
        }
        public function listeEtudiantGroupe($id){
            $requete="Select Etudiant.*,Groupe.nom as groupe,Niveau.nom as niveau from etudiantgroupe join Etudiant on Etudiant.id=etudiantgroupe.etudiant join groupe on groupe.id=etudiantgroupe.groupe join Niveau on Niveau.id=Groupe.niveau where etudiantgroupe.groupe=".$id;
            $query=$this->db->query($requete);
            return $query->result_array();

        }
    }
?>