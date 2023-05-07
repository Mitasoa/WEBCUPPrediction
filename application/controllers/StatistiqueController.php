<?php
defined('BASEPATH') or exit('No direct script access allowed');
class StatistiqueController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}

    public function allstatistique(){
        $this->load->model('Statistique');
        $data = array();
        $data['sexe_typereve'] = $this->Statistique->sexe_typereve();
        $data['evaluation_typereve'] = $this->Statistique->evaluation_typereve();
        $this->load->view('statistique', $data);
    }

}
