<?php
defined('BASEPATH') or exit('No direct script access allowed');
class UtilisateurController extends CI_Controller
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
    public function ajouterUtilisateur()
    {
        $this->load->model('Utilisateur');
        if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
            $user = new Utilisateur;

            $user->setemail($_POST['email']);
            $user->setmdp($_POST['mdp']);

            if (isset($_POST['nom']) && isset($_POST['prenoms']) && isset($_POST['idsexe']) && isset($_POST['datedenaissance'])) {
                $user->setnom($_POST['nom']);
                $user->setprenoms($_POST['prenoms']);
                $user->setidsexe($_POST['idsexe']);
                $user->setdatedenaissance($_POST['datedenaissance']);
            }

            $user->insererUtilisateur();
            redirect(base_url('Welcome/index'));

        } else {
            redirect(base_url('Welcome/index?error=1'));
        }
    }
    public function traitementlogin()
    {
        if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
            $this->load->model('Utilisateur');
            $id = $this->Utilisateur->traitementLogin($_POST['email'], $_POST['mdp']);
            if ($id != null) {
                $_SESSION['id'] = $id;
                redirect(base_url('Welcome/accueil'));
            } else {
                redirect(base_url('Welcome/index?error=1'));
            }
        } else {
            redirect(base_url('Welcome/index?error=ok'));
        }
    }
    public function modifierphoto()
    {
        if (isset($_SESSION['id'])) {
            date_default_timezone_set('America/New_York');
            $namephoto = "photo-" . date("d-m-Y-H-i-s");
            //config updload
            $config['upload_path'] = './assets/img/upload/';
            echo $config['upload_path'];
            $config['allowed_types'] = 'jpeg|jpg|png|JPG|PNG';
            $config['max_size'] = 20000;
            $config['max_width'] = 7000;
            $config['max_height'] = 7000;
            $config['file_name'] = $namephoto;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('photo')) {
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
            } else {
                //get extension
                $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
                $photoillustration = $namephoto . '.' . $ext;
                $this->load->model('Utilisateur');
                $this->Utilisateur->modifierprofil($photoillustration,$_SESSION['id']);
                redirect(base_url('IA-News'));
            }
        } else {
            redirect(base_url('IA-Connexion'));
        }
    }
}