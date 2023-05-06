<?php 

    class ValideEtapeEtudiant extends CI_Model
    {
        public function entreretape($etudiant,$etape){
            $sql = "INSERT INTO valideetapeetudiant(etudiant,etape) values ('".$etudiant."','".$etape."')";
            $this->db->query($sql);
        }
    }
?>