<?php
defined('BASEPATH') or exit('No direct script access allowed');
// session_start();
class UsersController extends CI_Controller
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
	
    public function trouver_endroit(){
        $this->load->model('ImageEndroit');
        $mot = $_GET['mot'];
        $liste = $this->ImageEndroit->liste($mot);
        // echo $liste;
		echo json_encode($liste);
		// print_r($liste);
    }
	
	
    public function ordonner(){
      
		$this->load->model('ReveDescription');
		$this->ReveDescription->update($_GET['id']);
		redirect('UsersController/step?idreve='.$_GET['idreve']);
	}
	
    public function trouver_image(){
        $this->load->model('ImageEndroit');
        $mot = $_GET['mot'];
        $liste = $this->ImageEndroit->liste_image($mot);
        // echo $liste;
		echo json_encode($liste);
		// print_r($liste);
    }
	
	public function home() {	
		// $this->load->helper('html');
		// $this->load->model('Index');
		$this->load->view('users/index');
	}
	public function historique() {	
		// $this->load->helper('html');
		// $this->load->model('Index');
		$this->load->view('users/historique');
	}
	public function insertreve() {	
		$idreve=$_POST['idreve'];
		$me=$this->load->model('Reve');
		$this->Reve->insert(1,$_POST['date'],$_POST['idreve']);
		$reve = $this->Reve->dernier();
        $idreve = $reve[0]['id'];
        $_SESSION['idreve'] = $idreve;
		redirect('UsersController/step?idreve='.$idreve);
		
	}
	public function step() {	
		$this->load->model('Endroit');
		$this->load->model('ReveDescription');
        $this->load->model('Sentiment');
        $this->load->model('Sexe');
        $data = array();
        $data['sentiment'] = $this->Sentiment->liste();
		$data['revedescription']=$this->ReveDescription->liste();
        $data['ste'] = $this->Sentiment->liste();
         $data['sexe'] = $this->Sexe->liste();
         $data['idreve'] =$_GET['idreve'];
         $data['endroit'] = $this->Endroit->liste();
		$this->load->view('users/step',$data);
	}
	public function insert_description(Type $var = null)
	{
		$this->load->model('ReveDescription');
		$this->load->model('ReveDescriptionImage');
		$this->load->model('ReveEmotion');
		$this->load->model('RevePersonne');
        $endroit = $_GET['endroit2'];
        $action = $_GET['action'];
        $objet = $_GET['objet'];
        $femme = $_GET['femme'];
        $homme = $_GET['homme'];
        $autre = $_GET['autre'];
        $mode = $_GET['mode'];
        $image = $_GET['endroit'];
        $emotion = $_GET['emotion'];
        $this->ReveDescription->insert($_GET['idreve'], $endroit, $action, $objet,$mode);
		$revedescription = $this->ReveDescription->dernier();
        $idrevedescription = $revedescription[0]['id'];

		foreach($emotion as $key){
			$this->ReveEmotion->insert($idrevedescription,$key);
		}
		$this->RevePersonne->insert($idrevedescription,1,$homme);
		$this->RevePersonne->insert($idrevedescription,2,$femme);
		$this->RevePersonne->insert($idrevedescription,3,$autre);
		foreach($image as $key){
			$this->ReveDescriptionImage->insert($idrevedescription,$key);
		}
		

		redirect('UsersController/step?idreve='.$_GET['idreve']);
		
		 

        // $_SESSION['idrevedescription'] = $idrevedescription;
		// print_r();

	}
	
	public function api() {	
		// $this->load->helper('html');
		// $this->load->model('Index');
		$this->load->view('users/api');
	}
	public function choixreve() {	
		// $this->load->helper('html');
		// $this->load->model('Index');
		$this->load->model('TypeReve');
        $data = array();
        $data['type'] = $this->TypeReve->liste();
		// var_dump($data);
		$this->load->view('users/choixreve',$data);
	}
	public function insertdate() {	
		// $this->load->helper('html');
		// $this->load->model('Index');
		$this->load->model('TypeReve');
        $data = array();
        $data['type'] = $this->TypeReve->liste();
		// var_dump($data);
		return $this->load->view('users/insertdate',[
			'idreve'=>$_GET['idreve']
		]);
		// redirect('UsersController/step?idreve='.$_GET['idreve']);
	}
	public function profil() {	
		// $this->load->helper('html');
		// $this->load->model('Index');
		$this->load->view('users/profil');
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
	public function ajout_description(){
        $this->load->model('ReveDescription');
        $endroit = $_GET['endroit2'];
        $action = $_GET['action'];
        $femme = $_GET['femme'];
        $homme = $_GET['homme'];
        $autre = $_GET['autre'];
        $image = $_GET['endroit[]'];
        $emotion = $_GET['emotion[]'];
		print_r($image);
        // $action = $_GET['action'];
        // $objetimportant = $_GET['objet'];
        // $mode = $_GET['endroit'];
        // $this->ReveDescription->insert($_SESSION['idreve'], $endroit, $action, $objetimportant, $mode);
        // $revedescription = $this->ReveDescription->dernier();
        // $idrevedescription = $revedescription[0]['id'];
        // $_SESSION['idrevedescription'] = $idrevedescription;
        // $this->load->view('');
    }
}
