<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Enregistrement extends REST_Controller {

    public function __construct() {
        parent::__construct();
        // Charger la librairie pour envoyer des requêtes HTTP
        $this->load->library('curl');
        // Charger la librairie pour manipuler les fichiers
        $this->load->helper('file');
    }

    public function index_post() {
        // Vérifier si le fichier audio a été envoyé
        if (!isset($_FILES['enregistrement_vocal'])) {
            $this->response([
                'status' => FALSE,
                'message' => 'Aucun fichier audio envoyé'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }

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

        // Envoyer la réponse au client
        $this->response([
            'status' => TRUE,
            'message' => 'Fichier audio transcrit avec succès',
            'transcription' => $transcription
        ], REST_Controller::HTTP_OK);
    }
}
