<?php 

    class Utilisateur extends CI_Model
    {
        private $id;
        private $email;
        private $mdp; 
        private $nom; 
        private $prenoms; 
        private $idsexe; 
        private $datedenaissance; 
    
        public function setid($idlogin){
            $this->id = $idlogin;
        }
        public function getid(){
            return $this->id;
        }
        public function setemail($email){
            $this->email = $email;
        }
        public function getemail(){
            return $this->email;
        }
        public function setmdp($idlogin){
            $this->mdp = $idlogin;
        }
        public function getmdp(){
            return $this->mdp;
        }
        public function setnom($nom){
            $this->nom = $nom;
        }
        public function getnom(){
            return $this->nom;
        }
        public function setprenoms($prenoms){
            $this->prenoms = $prenoms;
        }
        public function getprenoms(){
            return $this->prenoms;
        }
        public function setidsexe($idsexe){
            $this->idsexe = $idsexe;
        }
        public function getidsexe(){
            return $this->idsexe;
        }
        public function setdatedenaissance($datedenaissance){
            $this->datedenaissance = $datedenaissance;
        }
        public function getdatedenaissance(){
            return $this->datedenaissance;
        }
        public function traitementLogin($log,$mdp) {
            $requete = "SELECT * FROM utilisateur WHERE email = '%s' AND motdepasse = sha1('%s')";
            $requete = sprintf($requete,$log,$mdp);
            $requete = $this->db->query($requete);
            $requete = $requete->result_array();
            $verif = 0;
            foreach ($requete as $key) {
                $verif = $key['id'];
            }
            if($verif==0){
                return null;
            }
            return $verif;
        }
        public function insererUtilisateur()
        {
            if($this->getnom()==''){
                $sql = "INSERT INTO utilisateur values (default,".$this->db->escape($this->getemail()).",sha1(".$this->db->escape($this->getmdp())."),default,default,default,default";
            }
            else{
            $sql = "INSERT INTO utilisateur values (default,".$this->db->escape($this->getemail()).",sha1(".$this->db->escape($this->getmdp())."),".$this->db->escape($this->getnom()).",".$this->db->escape($this->getprenoms()).",".$this->db->escape($this->getidsexe()).",".$this->db->escape($this->getdatedenaissance())."";
            }
            $this->db->query($sql);
        }
    }
?>