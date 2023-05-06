<?php 

    class Admin extends CI_Model
    {
        private $id;
        private $login;
        private $mdp; 
    
        public function setid($idlogin){
            $this->id = $idlogin;
        }
        public function getid(){
            return $this->id;
        }
        public function setlogin($idlogin){
            $this->login = $idlogin;
        }
        public function getlogin(){
            return $this->login;
        }
        public function setmdp($idlogin){
            $this->mdp = $idlogin;
        }
        public function getmdp(){
            return $this->mdp;
        }
        public function verifylogin($login){
            $requete="select * from Admin where login='".$login."'";
            $query=$this->db->query($requete);
            return $query->result_array();

        }
        public function verifymdp($mdpactu,$mdp){
            $requete="select crypt('".$mdp."','".$mdpactu."')";
            $query=$this->db->query($requete);
            $query=$query->result_array();
            $crypt="";
            foreach($query as $query){
                $crypt=$query['crypt'];
            }
            return $crypt;

        }
        public function inscriptionadmin($name,$code){
            $sql = "INSERT INTO Admin(login,mdp) values ('".$name."',crypt('".$code."',gen_salt('bf')))";
            $this->db->query($sql);
        }
    }
?>