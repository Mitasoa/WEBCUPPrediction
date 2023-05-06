<audio id="enregistrement_vocal" controls></audio>

<button id="bouton_enregistrer">Enregistrer</button>
<script>
  navigator.mediaDevices.getUserMedia({ audio: true })
  .then(stream => {
    const mediaRecorder = new MediaRecorder(stream);
    const chunks = [];

    mediaRecorder.addEventListener('dataavailable', event => {
      chunks.push(event.data);
      const enregistrementVocal = document.querySelector('#enregistrement_vocal');
      enregistrementVocal.src = URL.createObjectURL(new Blob(chunks, { type: 'audio/ogg; codecs=opus' }));
    });

    mediaRecorder.addEventListener('stop', () => {
      const blob = new Blob(chunks, { type: 'audio/ogg; codecs=opus' });
      const formData = new FormData();
      formData.append('enregistrement_vocal', blob, 'enregistrement.ogg');

      const xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          console.log('Transcription :', this.responseText);
        }
        else{
          console.log(this.responseText);
        }
      };
      xhr.open('POST', '<?php echo base_url('Enregistrement/transcrire_audio');?>');
      xhr.send(formData);
    });

    const button = document.querySelector('#bouton_enregistrer');
    button.addEventListener('click', () => {
      if (mediaRecorder.state === 'inactive') {
        mediaRecorder.start();
        button.textContent = 'Arrêter';
      } else {
        mediaRecorder.stop();
        button.textContent = 'Enregistrer';
      }
    });
  })
  .catch(error => {
    console.error('Erreur lors de l\'accès au microphone :', error);
  });

</script>