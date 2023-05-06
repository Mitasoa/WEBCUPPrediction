<?php 

    class Presence extends CI_Model
    {
        private $id;
        private $idPresence;
        private $groupe;
        private $etudiant;
        private $status; 
        private $daty; 
        private $seance; 
    
        public function setid($idlogin){
            $this->id = $idlogin;
        }
        public function getid(){
            return $this->id;
        }
        public function setidPresence($idlogin){
            $this->idPresence = $idlogin;
        }
        public function getidPresence(){
            return $this->idPresence;
        }
        public function setgroupe($idlogin){
            $this->groupe = $idlogin;
        }
        public function getgroupe(){
            return $this->groupe;
        }
        public function setetudiant($idlogin){
            $this->etudiant = $idlogin;
        }
        public function getetudiant(){
            return $this->etudiant;
        }
        public function setstatus($idlogin){
            $this->status = $idlogin;
        }
        public function getstatus(){
            return $this->status;
        }
        public function setdaty($idlogin){
            $this->daty = $idlogin;
        }
        public function getdaty(){
            return $this->daty;
        }
        public function setseance($idlogin){
            $this->seance = $idlogin;
        }
        public function getseance(){
            return $this->seance;
        }
        public function entrerpresence($groupe,$etudiant,$status,$seance){
            $sql = "INSERT INTO Presence(idPresence,groupe,etudiant,status,daty,seance) values (concat('PresenceG".$groupe."Etu".$etudiant."',nextval('idPresence')),'".$groupe."','".$etudiant."','".$status."',now(),'".$seance."')";
            $this->db->query($sql);
        }
        public function listePresence(){
            $requete="select daty,seance.nom as seance,groupe.nom as groupe,seance as idseance,groupe as idgroupe from presence join Groupe on groupe.id=presence.groupe join seance on seance.id=presence.seance group by daty,seance.nom,groupe.nom,seance,groupe";
            $query=$this->db->query($requete);
            return $query->result_array();

        }
        public function fichepresence($daty,$groupe,$seance){
            $requete=" select etudiant.nom,etudiant.prenom,presence.status from presence join Etudiant on Etudiant.id=presence.etudiant where daty='".$daty."' and groupe=".$groupe." and seance=".$seance;
            $query=$this->db->query($requete);
            return $query->result_array();

        }
        public function rechercheAvancepresence($search){
            $requete="select daty,seance.nom as seance,groupe.nom as groupe,seance as idseance,groupe as idgroupe from presence join Groupe on groupe.id=presence.groupe join seance on seance.id=presence.seance where lower(groupe.nom) like '%".$search."%' or lower(seance.nom) like '%".$search."%' group by daty,seance.nom,groupe.nom,seance,groupe";
            $query=$this->db->query($requete);
            return $query->result_array();

        }
    }
?>