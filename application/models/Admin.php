<?php 

    class Admin extends CI_Model
    {
        private $id;
        private $email;
        private $mdp; 
    
        public function setid($idlogin){
            $this->id = $idlogin;
        }
        public function getid(){
            return $this->id;
        }
        public function setemail($idemail){
            $this->email = $idemail;
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
        public function traitementLoginAdmin($log, $mdp)
    {
        $requete = "SELECT * FROM admin WHERE email = '%s' AND mdp = sha1('%s')";
        $requete = sprintf($requete, $log, $mdp);
        $requete = $this->db->query($requete);
        $requete = $requete->result_array();
        $verif = 0;
        foreach ($requete as $key) {
            $verif = $key['id'];
        }
        if ($verif == 0) {
            return null;
        }
        return $verif;
    }
    public function insererAdmin()
    {
        $sql = "INSERT INTO admin values (default," . $this->db->escape($this->getemail()) . ",sha1(" . $this->db->escape($this->getmdp()) . "))";
        $this->db->query($sql);
    }
    }
?>