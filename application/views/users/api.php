<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Transcription de la parole en texte</title>
</head>
<body>
    <h1>Transcription de la parole en texte</h1>
    <p>Appuyez sur le bouton "Démarrer" et commencez à parler. Appuyez sur le bouton "Arrêter" pour arrêter la transcription.</p>
    <button id="start-button">Démarrer</button>
    <button id="stop-button" disabled>Arrêter</button>
    <div id="transcription"></div>

    <script>
        let recognition = null;

        const startButton = document.getElementById("start-button");
        const stopButton = document.getElementById("stop-button");
        const transcriptionDiv = document.getElementById("transcription");

        startButton.onclick = () => {
            recognition = new webkitSpeechRecognition(); // Initialiser l'API Web Speech
            recognition.lang = "fr-FR"; // Spécifier la langue parlée
            recognition.continuous = true; // Activer la transcription en temps réel
            recognition.interimResults = true; // Récupérer les résultats provisoires

            recognition.onresult = (event) => {
                const result = event.results[event.results.length - 1]; // Récupérer le dernier résultat

                if (result.isFinal) { // Si le résultat est final
                    const transcription = result[0].transcript; // Récupérer la transcription du texte
                    transcriptionDiv.innerHTML += "<p>" + transcription + "</p>"; // Afficher la transcription du texte
                }
            };

            recognition.onerror = (event) => {
                console.error(event.error); // Afficher l'erreur s'il y en a une
            };

            recognition.onend = () => {
                startButton.disabled = false;
                stopButton.disabled = true;
            };

            recognition.start(); // Démarrer la reconnaissance vocale
            startButton.disabled = true;
            stopButton.disabled = false;
        };

        stopButton.onclick = () => {
            recognition.stop(); // Arrêter la reconnaissance vocale
            startButton.disabled = false;
            stopButton.disabled = true;
        };
    </script>
</body>
</html>
