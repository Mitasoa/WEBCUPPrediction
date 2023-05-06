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

            if(isset($_POST['nom']) && isset($_POST['prenoms']) && isset($_POST['idsexe']) && isset($_POST['datedenaissance']))
            {
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
    public function connexionviagoogle() {	
		require_once 'assets/google-api-php-client--PHP8.0/vendor/autoload.php';

		$client = new Google_Client();
		$client->setClientId('1002772112015-tb8hjgpfl1mbga023tcj7nq2hmlmlsu7.apps.googleusercontent.com');
		$client->setClientSecret('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');
		$client->setRedirectUri(base_url('Welcome/accueil'));
		$client->addScope('email');
		$client->addScope('profile');

		if(isset($_GET['code'])) {
		    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
		    if(!isset($token['error'])) {
		        $client->setAccessToken($token['access_token']);

		        $google_oauth = new Google_Service_Oauth2($client);
		        $google_account_info = $google_oauth->userinfo->get();

		        $data = array(
		            'email' => $google_account_info->email,
		            'picture' => $google_account_info->picture,
		            'name' => $google_account_info->name,
		            'id' => $google_account_info->id
		        );
		        $this->session->set_userdata('google_auth', $data);
                $user = new Utilisateur;
                $idgoogle=$user->verifiergoogleid($data['id']);
                if($idgoogle!=null){
                    $_SESSION['id']=$idgoogle;
                }
                else{
                    $user->setemail($data['email']);
                    $user->setmdp();
                }
		        var_dump($data);
		    }
		}
		$data['client'] = $client;
        redirect(base_url('Welcome/index'));
	}

}