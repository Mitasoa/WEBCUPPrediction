<?php
defined('BASEPATH') or exit('No direct script access allowed');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
class Enregistrement extends CI_Controller
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
        $this->load->library('curl');
    }
    public function transcrire_audio()
    {
        if (isset($_FILES['enregistrement_vocal']) && $_FILES['enregistrement_vocal']['error'] == 0) {
           // $tmp_name = $_FILES['enregistrement_vocal']['tmp_name'];
            // Récupérer le contenu du fichier audio
            $enregistrement_vocal = file_get_contents($_FILES['enregistrement_vocal']['tmp_name']);

            // Configurer l'API Google Speech-to-Text
            $config = [
                'languageCode' => 'fr-FR',
                'audio' => [
                    'content' => base64_encode($enregistrement_vocal)
                ]
            ];
            $headers = [
                'Content-Type: application/json'
            ];
            $api_key = 'AIzaSyCdDycio8lPCUAgeiWie3-kBvrorZOGXv4'; // Remplacer avec votre clé API Google Speech-to-Text

            // Envoyer la requête à l'API Google Speech-to-Text
            $url = 'https://speech.googleapis.com/v1/speech:recognize?key=' . $api_key;
            $response = $this->curl->simple_post($url, json_encode($config), $headers);

            // Récupérer le texte transcrit de la réponse de l'API
            $data = json_decode($response, TRUE);
            $transcription = '';
            if (isset($data['results'])) {
                foreach ($data['results'] as $result) {
                    $transcription .= $result['alternatives'][0]['transcript'] . ' ';
                }
            }
            echo $transcription;


        } else {
            echo 'Erreur lors de la récupération du fichier audio';
        }
    }
// public function index_post() {
//     // Vérifier si le fichier audio a été envoyé
//     if (!isset($_FILES['enregistrement_vocal'])) {
//         $this->response([
//             'status' => FALSE,
//             'message' => 'Aucun fichier audio envoyé'
//         ], REST_Controller::HTTP_BAD_REQUEST);
//     }

//     // Récupérer le contenu du fichier audio
//     $enregistrement_vocal = file_get_contents($_FILES['enregistrement_vocal']['tmp_name']);

//     // Configurer l'API Google Speech-to-Text
//     $config = [
//         'languageCode' => 'fr-FR',
//         'audio' => [
//             'content' => base64_encode($enregistrement_vocal)
//         ]
//     ];
//     $headers = [
//         'Content-Type: application/json'
//     ];
//     $api_key = 'AIzaSyCdDycio8lPCUAgeiWie3-kBvrorZOGXv4'; // Remplacer avec votre clé API Google Speech-to-Text

//     // Envoyer la requête à l'API Google Speech-to-Text
//     $url = 'https://speech.googleapis.com/v1/speech:recognize?key=' . $api_key;
//     $response = $this->curl->simple_post($url, json_encode($config), $headers);

//     // Récupérer le texte transcrit de la réponse de l'API
//     $data = json_decode($response, TRUE);
//     $transcription = '';
//     if (isset($data['results'])) {
//         foreach ($data['results'] as $result) {
//             $transcription .= $result['alternatives'][0]['transcript'] . ' ';
//         }
//     }

//     // Envoyer la réponse au client
//     $this->response([
//         'status' => TRUE,
//         'message' => 'Fichier audio transcrit avec succès',
//         'transcription' => $transcription
//     ], REST_Controller::HTTP_OK);
// }


}