<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AppreciationController extends CI_Controller
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
    public function ajouterAppreciation()
    {
        if (!isset($_SESSION['id'])) {
            redirect(base_url('Welcome/index'));
        } else {
            $this->load->model('Appreciation');
            if (!empty($_POST['etoile']) && !empty($_POST['commentaire'])) {
                $appreciation = new Appreciation;

                $appreciation->setetoile($_POST['etoile']);
                $appreciation->setcommentaire($_POST['commentaire']);

                $appreciation->insererAppreciation();
                redirect(base_url('Welcome/index'));

            } else {
                redirect(base_url('Welcome/index?error=ok'));
            }
        }

    }
    public function listerappreciation()
    {
        $this->load->model('Appreciation');
        $data['appreciation'] = $this->Appreciation->listerappreciation();
        $this->load->view('pages/accueil');
    }
}