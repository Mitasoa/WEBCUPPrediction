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
    
	// public function formulaire(){
	// 	$this->load->model('TypeReve');
    //     $this->load->model('Endroit');
    //     $this->load->model('ImageEndroit');
	// 	$data['type'] = $this->TypeReve->liste();
    //     $data['endroit'] = $this->Endroit->liste();
	// 	// $this->load->view('detail',$data);
	// }

	
}
