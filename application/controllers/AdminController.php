<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AdminController extends CI_Controller
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
    public function ajouterAdministrateur()
    {
        $this->load->model('Admin');
        if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
            $user = new Admin;

            $user->setemail($_POST['email']);
            $user->setmdp($_POST['mdp']);

            $user->insererAdmin();
            redirect(base_url('Welcome/index'));

        } else {
            redirect(base_url('Welcome/index?error=ok'));
        }
    }
    public function traitementloginAdministrateur()
    {
        if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
            $this->load->model('Admin');
            $id = $this->Admin->traitementLoginAdmin($_POST['email'], $_POST['mdp']);
            if ($id != null) {
                $_SESSION['id'] = $id;
                redirect(base_url('Welcome/accueil'));
            } else {
                redirect(base_url('Welcome/index?error=ok'));
            }
        } else {
            redirect(base_url('Welcome/index?error=ok'));
        }
    }
}