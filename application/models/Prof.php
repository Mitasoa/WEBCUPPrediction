<?php 
    class Prof extends CI_Model
    {
        private $id;
        private $nom; 
        private $prenom;
        private $adresse;
        private $telephone;
        private $mail;
        private $facebook;
        private $numUrgence;
        private $photo;
        private $sexe;
        private $infoComplementaire;
        private $status;
        private $etat;
        private $mdp;

        public function setid($idlogin){
            $this->id = $idlogin;
        }
        public function getid(){
            return $this->id;
        }
        public function setadresse($idlogin){
            $this->adresse = $idlogin;
        }
        public function getadresse(){
            return $this->adresse;
        }
        public function setnom($idlogin){
            $this->nom = $idlogin;
        }
        public function getnom(){
            return $this->nom;
        }
        public function setprenom($idlogin){
            $this->prenom = $idlogin;
        }
        public function getprenom(){
            return $this->prenom;
        }
        public function settelephone($idlogin){
            $this->telephone = $idlogin;
        }
        public function gettelephone(){
            return $this->telephone;
        }
        public function setmail($idlogin){
            $this->mail = $idlogin;
        }
        public function getmail(){
            return $this->mail;
        }
        public function setfacebook($idlogin){
            $this->facebook = $idlogin;
        }
        public function getfacebook(){
            return $this->facebook;
        }
        public function setnumUrgence($idlogin){
            $this->numUrgence = $idlogin;
        }
        public function getnumUrgence(){
            return $this->numUrgence;
        }
        public function setphoto($idlogin){
            $this->photo = $idlogin;
        }
        public function getphoto(){
            return $this->photo;
        }
        public function setsexe($idlogin){
            $this->sexe = $idlogin;
        }
        public function getsexe(){
            return $this->sexe;
        }
        public function setinfoComplementaire($idlogin){
            $this->infoComplementaire = $idlogin;
        }
        public function getinfoComplementaire(){
            return $this->infoComplementaire;
        }
        public function setstatus($idlogin){
            $this->status = $idlogin;
        }
        public function getstatus(){
            return $this->status;
        }
        public function setetat($idlogin){
            $this->etat = $idlogin;
        }
        public function getetat(){
            return $this->etat;
        }
        public function setmdp($idlogin){
            $this->mdp = $idlogin;
        }
        public function getmdp(){
            return $this->mdp;
        }
        public function listeprof(){
            $requete="select * from Prof";
            $query=$this->db->query($requete);
            return $query->result_array();

        }
        public function rechercheAvanceprof($search){
            $requete="select * from prof where lower(nom) like '%".$search."%' or lower(prenom) like '%".$search."%'or lower(adresse) like '%".$search."%' or lower(telephone) like '%".$search."%' or lower(mail) like '%".$search."%'";
            $query=$this->db->query($requete);
            return $query->result_array();

        }
        public function verifyloginprof($nom,$prenom){
            $requete="select * from prof where nom='".$nom."' and prenom='".$prenom."'";
            $query=$this->db->query($requete);
            return $query->result_array();

        }
        public function verifymdpprof($mdpactu,$mdp){
            $requete="select crypt('".$mdp."','".$mdpactu."')";
            $query=$this->db->query($requete);
            $query=$query->result_array();
            $crypt="";
            foreach($query as $query){
                $crypt=$query['crypt'];
            }
            return $crypt;

        }
        public function inscriptionprof($nom,$prenom,$adresse,$telephone,$mail,$facebook,$numUrgence,$photo,$sexe,$infoComplementaire,$status,$etat,$mdp){
            $sql = "INSERT INTO Admin(nom,prenom,adresse,telephone,mail,facebook,numUrgence,photo,sexe,infoComplementaire,mdp) values ('".$nom."','".$prenom."','".$adresse."','".$telephone."','".$mail."','".$facebook."','".$numUrgence."','".$photo."','".$sexe."','".$infoComplementaire."','".$status."','".$etat."',crypt('".$mdp."',gen_salt('bf')))";
            $this->db->query($sql);
        }
        public function rechercheAvance($numclasse,$matricule,$numeleve,$nomeleve,$prenomeleve){
            $request=array();
            $requete="";
            $i=0;
            if($numclasse!=""){
                $numclasse="classenumero like '%".$numclasse."%'";
                $request[$i]=$numclasse;
                $i=$i+1;
            }
            if($matricule!=""){
                $matricule="matricule like '%".$matricule."%'";
                $request[$i]=$matricule;
                $i=$i+1;
            }
            if($numeleve!=""){
                $numeleve="cast(numero as varchar) like '%".$numeleve."%'";
                $request[$i]=$numeleve;
                $i=$i+1;
            }
            if($nomeleve!=""){
                $nomeleve="lower(nom) like '%".strtolower($nomeleve)."%'";
                $request[$i]=$nomeleve;
                $i=$i+1;
            }
            if($prenomeleve!=""){
                $prenomeleve="lower(prenom) like '%".strtolower($prenomeleve)."%'";
                $request[$i]=$prenomeleve;
                $i=$i+1;
            }
            for($j=0;$j<$i;$j++){
                $requete.=$request[$j]." and ";
            }
            if(count($request)==0){
                $requete="select  * from EtudiantClasse";
            }
            else{
            $requete=substr($requete,0,strlen($requete)-4);
            $requete="select  * from EtudiantClasse where ".$requete;
            }
            $query=$this->db->query($requete);
            return $query->result_array();

        }
    }
    //EXTRACT(MONTH from to_date(datejournal,'dd/mm/yy'))
?>