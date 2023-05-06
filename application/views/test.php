<form>
  <button id="bouton_enregistrer">Enregistrer un message vocal</button>
</form>

<audio id="audio_preview" controls></audio>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(() => {
    const button = $('#bouton_enregistrer');
    const audioPreview = $('#audio_preview');
    const chunks = [];

    button.click(() => {
      if (button.text() === 'Enregistrer un message vocal') {
        navigator.mediaDevices.getUserMedia({ audio: true })
          .then(stream => {
            const mediaRecorder = new MediaRecorder(stream);
            mediaRecorder.addEventListener('dataavailable', event => {
              chunks.push(event.data);
            });
            mediaRecorder.addEventListener('stop', () => {
              const blob = new Blob(chunks, { type: 'audio/ogg; codecs=opus' });
              const formData = new FormData();
              formData.append('message_vocal', blob, 'message.ogg');
              $.ajax({
                url: '<?php echo base_url('enregistrer_message_vocal'); ?>',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: () => {
                  alert('Message vocal enregistré avec succès !');
                },
                error: (jqXHR, textStatus, errorThrown) => {
                  alert(`Erreur lors de l'enregistrement du message vocal : ${errorThrown}`);
                }
              });
              chunks.length = 0;
            });
            mediaRecorder.start();
            button.text('Arrêter l'enregistrement');
          })
          .catch(error => {
            console.error('Erreur lors de l\'accès au microphone :', error);
          });
      } else {
        button.prop('disabled', true);
        const mediaRecorder = chunks.length > 0 ? new MediaRecorder(new Blob(chunks, { type: 'audio/ogg; codecs=opus' })) : null;
        chunks.length = 0;
        if (mediaRecorder !== null) {
          mediaRecorder.stop();
          audioPreview.attr('src', URL.createObjectURL(mediaRecorder.getBlob()));
        }
        button.text('Enregistrer un nouveau message vocal');
        button.prop('disabled', false);
      }
    });
  });
</script>
