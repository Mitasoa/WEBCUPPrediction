<?php
defined('BASEPATH') or exit('No direct script access allowed');
class EvaluationPredictionController extends CI_Controller
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
    public function ajouterEvaluationPrediction()
    {
        $this->load->model('EvaluationPrediction');
        if (!empty($_POST['idreve']) && !empty($_POST['etoile'])) {
            $appreciation = new EvaluationPrediction;

            $appreciation->setetoile($_POST['etoile']);
            $appreciation->setcommentaire($_POST['commentaire']);
            if(isset($_POST['idreve'])){
                $appreciation->setidreve($_POST['idreve']);

            }
            $appreciation->insererEvaluationPrediction();
            redirect(base_url('Welcome/index'));

        } else {
            redirect(base_url('Welcome/index?error=ok'));
        }
    }
}