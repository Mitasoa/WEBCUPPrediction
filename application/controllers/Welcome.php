<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}
	public function index() {	
		$this->load->view('pages/login');
	}
	public function accueil() {	
		$this->load->view('test');
	}

	public function details($slug){
		$this->load->model('Index');
		$data['Detail'] = $this->Index->getContenuById($slug);
		$this->load->view('detail',$data);
	}

	public function office(){
		$this->load->helper('html');
		$this->load->model('Index');
		if(!empty($_POST['type']) && !empty($_POST['introduction']) && !empty($_POST['titre']) && !empty($_POST['mot']) && !empty($_POST['explication']) && !empty($_POST['conclusion']) && !empty($_POST['article'])){
			$config['upload_path'] = './assets/img/contenu/';
			$config['allowed_types'] = 'jpeg|jpg|png|JPG|PNG';
			$config['max_size'] = 20000;
			$config['max_width'] = 7000;
			$config['max_height'] = 7000;
			$namephoto = $this->Index->getsequencephoto();
			$id = $this->Index->getId();
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('image')) {
				$error = array('error' => $this->upload->display_errors());
				redirect('Welcome/office?error=image');
			} else {
				//get extension
				$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
				$namephoto . '.' . $ext;
				$this->Index->addContenu($_POST['type'],$_POST['introduction'],$_POST['titre'],$_POST['mot'],$_POST['explication'],$_POST['conclusion'],$namephoto,$_POST['article'],$id);	
			}
		}
		$data['Type'] = $this->Index->getType();
        $this->load->view('back_office',$data);
    }

}
