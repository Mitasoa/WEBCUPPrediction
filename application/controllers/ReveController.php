<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ReveController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}

    public function formulaire(){
        // $this->load->view('ajout_reve');
        echo "iciii";
    }

    public function ajout_reve(){
        $this->load->model('Reve');
        $date = $_GET['date'];
        $type = $_GET['typereve'];
        $idutilisateur = $_SESSION['idutilisateur'];
        $this->Reve->insert($idutilisateur,$date,$type);
        $reve = $this->Reve->dernier();
        $idreve = $reve[0]['id'];
        $_SESSION['idreve'] = $idreve;
        // $this->load->view('');
    }

    public function ajout_description(){
        $this->load->model('ReveDescription');
        $endroit = $_GET['endroit'];
        $action = $_GET['action'];
        $objetimportant = $_GET['objetimportant'];
        $mode = $_GET['endroit'];
        $this->ReveDescription->insert($_SESSION['idreve'], $endroit, $action, $objetimportant, $mode);
        $revedescription = $this->ReveDescription->dernier();
        $idrevedescription = $revedescription[0]['id'];
        $_SESSION['idrevedescription'] = $idrevedescription;
        // $this->load->view('');
    }

    public function ajout_emotion(){
        $this->load->model('ReveEmotion');
        $sentiment = $_GET['sentiment'];
        $this->ReveEmotion->insert($_SESSION['idrevedescription'], $sentiment);
        // $this->load->view('');
    }

    public function ajout_personne(){
        $this->load->model('RevePersonne');
        $sexe = $_GET['sexe'];
        $nombre = $_GET['nombre'];
        $this->RevePersonne->insert($_SESSION['idrevedescription'], $sexe, $nombre);
        // $this->load->view('');
    }
}
