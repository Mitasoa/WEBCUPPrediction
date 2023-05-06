<?php 

    class ValideEtapeProf extends CI_Model
    {
        public function entreretape($prof,$etape){
            $sql = "INSERT INTO valideetapeprof(prof,etape) values ('".$prof."','".$etape."')";
            $this->db->query($sql);
        }
    }
?>