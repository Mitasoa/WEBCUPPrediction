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
    private $googleid;

    public function setid($idlogin)
    {
        $this->id = $idlogin;
    }
    public function getid()
    {
        return $this->id;
    }
    public function setemail($email)
    {
        $this->email = $email;
    }
    public function getemail()
    {
        return $this->email;
    }
    public function setmdp($idlogin)
    {
        $this->mdp = $idlogin;
    }
    public function getmdp()
    {
        return $this->mdp;
    }
    public function setnom($nom)
    {
        $this->nom = $nom;
    }
    public function getnom()
    {
        return $this->nom;
    }
    public function setprenoms($prenoms)
    {
        $this->prenoms = $prenoms;
    }
    public function getprenoms()
    {
        return $this->prenoms;
    }
    public function setidsexe($idsexe)
    {
        $this->idsexe = $idsexe;
    }
    public function getidsexe()
    {
        return $this->idsexe;
    }
    public function setdatedenaissance($datedenaissance)
    {
        $this->datedenaissance = $datedenaissance;
    }
    public function getdatedenaissance()
    {
        return $this->datedenaissance;
    }
    public function setgoogleid($googleid)
    {
        $this->googleid = $googleid;
    }
    public function getgoogleid()
    {
        return $this->googleid;
    }
    public function traitementLogin($log, $mdp)
    {
        $requete = "SELECT * FROM utilisateur WHERE email = '%s' AND mdp = sha1('%s')";
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
    public function verifiergoogleid($id)
    {
        $requete = "SELECT * FROM utilisateur WHERE googleid='%s'";
        $requete = sprintf($requete, $id);
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
    public function insererUtilisateur()
    {
        if ($this->getnom() == '') {
            if ($this->getgoogleid() == '') {
                $sql = "INSERT INTO utilisateur values (default," . $this->db->escape($this->getemail()) . ",sha1(" . $this->db->escape($this->getmdp()) . "),default,default,default,default,default)";

            } else {
                $sql = "INSERT INTO utilisateur values (default," . $this->db->escape($this->getemail()) . ",default,default,default,default,".$this->db->escape($this->getgoogleid()).",default)";
            }
        }
        else if($this->getnom() != '' && $this->getgoogleid() != '' ){
            $sql = "INSERT INTO utilisateur values (default," . $this->db->escape($this->getemail()) . ",default," . $this->db->escape($this->getnom()) . ",default,default,".$this->db->escape($this->getgoogleid()).",default)";            
        }
         else {
            $sql = "INSERT INTO utilisateur values (default," . $this->db->escape($this->getemail()) . ",sha1(" . $this->db->escape($this->getmdp()) . ")," . $this->db->escape($this->getnom()) . "  " . $this->db->escape($this->getprenoms()) . "," . $this->db->escape($this->getidsexe()) . "," . $this->db->escape($this->getdatedenaissance()) . ",default,default)";
        }
        $this->db->query($sql);
    }
    public function modifierprofil($image,$id)
    {
        $sql = "UPDATE utilisateur set photoprofil=".$this->db->escape($image)." where id=".$id;
        $this->db->query($sql);
    }
}
?>