<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ReveInfoController extends CI_Controller
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
    public function listedemesreves()
    {
        if (!isset($_SESSION['id'])) {
            redirect(base_url('Welcome/index'));
        } else {
            $this->load->model('Reveinfo');
            $reve ['reve']= $this->Reveinfo->listereve($_SESSION['id']);
            $this->load->view('pages/reve',$reve);

        }
    }
    public function predictionreve()
    {
        if (!isset($_SESSION['id'])) {
            redirect(base_url('Welcome/index'));
        } else {
            $this->load->model('Reveinfo');
            $reve ['prediction']= $this->Reveinfo->listepredictionreve($_GET['id']);
            $this->load->view('pages/reve',$reve);

        }
    }
    public function detailreve(){
        if (!isset($_SESSION['id'])) {
            redirect(base_url('Welcome/index'));
        } else {
            $this->load->model('Reveinfo');
            $reve ['description']= $this->Reveinfo->listerevedescription($_GET['id']);
            $this->load->view('pages/reve',$reve);

        }
    }
}