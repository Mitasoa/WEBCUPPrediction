<?php 
    class ArticleModel extends CI_Model {
        public function getCategorie(){
            $requete="select * from Categorie";
            $query=$this->db->query($requete);
            return $query->result_array();
        }

        public function addArticle($titre, $resume, $categorieId, $contenu){
            $requete="INSERT INTO Article VALUES (DEFAULT,'%s','%s','%s','%s','%s')";
            $slug = url_title($resume, 'dash', true);
            $requete = sprintf($requete, $this->db->escape_str($titre),$this->db->escape_str($resume),$this->db->escape_str($categorieId),$this->db->escape_str($contenu),$this->db->escape_str($slug));
            $this->db->query($requete);
        }

        public function getArticle(){
            $requete="select * from V_Article";
            $query=$this->db->query($requete);
            return $query->result_array();
        }

        public function getArticleById($slug){
            $split = explode("-", $slug);
            $split = explode(".", $split[count($split)-1]);
            $id = $split[0];
            $requete="select * from V_Article WHERE id = %s";
            $requete = sprintf($requete,$id);
            $query=$this->db->query($requete);
            return $query->result_array();
        }
    }
?>