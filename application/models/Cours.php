<?php 

    class Cours extends CI_Model
    {
        private $id;
        private $daty;
        private $intitule;
        private $prof;
        private $groupe;
        private $seance;
    
        public function setid($idlogin){
            $this->id = $idlogin;
        }
        public function getid(){
            return $this->id;
        }
        public function setdaty($daty){
            $this->daty = $daty;
        }
        public function getdaty(){
            return $this->daty;
        }
        public function setintitule($intitule){
            $this->intitule = $intitule;
        }
        public function getintitule(){
            return $this->intitule;
        }
        public function setprof($prof){
            $this->prof = $prof;
        }
        public function getprof(){
            return $this->prof;
        }
        public function setgroupe($groupe){
            $this->groupe = $groupe;
        }
        public function getgroupe(){
            return $this->groupe;
        }
        public function setseance($seance){
            $this->seance = $seance;
        }
        public function getseance(){
            return $this->seance;
        }
        public function insertcours($intitule,$prof,$groupe,$seance){
            $sql = "INSERT INTO Cours(daty,intitule,prof,groupe,seance) values (now(),'".$intitule."','".$prof."','".$groupe."','".$seance."')";
            $this->db->query($sql);
        }
        public function listeCours(){
            $requete="select cours.id,cours.daty,cours.intitule,prof.id as idprof,prof.nom as profnom,prof.prenom as profprenom,groupe.id as idgroupe,groupe.nom as groupe,seance.id as idseance,seance.nom as seance from cours join Prof on prof.id=cours.prof join groupe on groupe.id=cours.groupe join seance on seance.id=cours.seance group by cours.daty,seance.id,groupe.id,cours.id,prof.id";
            $query=$this->db->query($requete);
            return $query->result_array();

        }
        public function rechercheAvancecours($search){
            $requete="select cours.id,cours.daty,cours.intitule,prof.id as idprof,prof.nom as profnom,prof.prenom as profprenom,groupe.id as idgroupe,groupe.nom as groupe,seance.id as idseance,seance.nom as seance from cours join Prof on prof.id=cours.prof join groupe on groupe.id=cours.groupe join seance on seance.id=cours.seance where lower(prof.nom) like '%".$search."%' or lower(prof.prenom) like '%".$search."%' or lower(groupe.nom) like '%".$search."%' or lower(seance.nom) like '%".$search."%' group by cours.daty,seance.id,groupe.id,cours.id,prof.id ";
            $query=$this->db->query($requete);
            return $query->result_array();

        }
    }
?>