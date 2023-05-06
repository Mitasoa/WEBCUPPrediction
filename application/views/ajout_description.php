<html>
    <script type="text/javascript">

    function find_endroit()
    {
        //création de l'objet XMLHttpRequest
        var xhr;
        try {  xhr = new ActiveXObject('Msxml2.XMLHTTP');   }
        catch (e)
        {
            try {   xhr = new ActiveXObject('Microsoft.XMLHTTP'); }
            catch (e2)
            {
            try {  xhr = new XMLHttpRequest();  }
            catch (e3) {  xhr = false;   }
            }
        }

        //Définition des changements d'états
        xhr.onreadystatechange  = function()
        {
        if(xhr.readyState  == 4){
                if(xhr.status  == 200) {
                    var retour = JSON.parse(xhr.responseText);
                    // var option = '';
                    // for( $i=0; $i<retour.length; $i++){
                    //     option = option + '<option value='+retour[$i].id+'>'+retour[$i].nom+'</option>';
                    // }
                    // document.getElementById('client_list').innerHTML = option;
                    console.log(retour);
                } else {
                    document.dyn="Error code " + xhr.status;
                }
            }
        };
    //XMLHttpRequest.open(method, url, async)
    var mot = document.getElementById("endroit");
    xhr.open("GET", "trouver_endroit?mot="+mot.value, true);

    //XMLHttpRequest.send(body)
    xhr.send(null);
    }

    </script>
    <form action="<?php echo site_url('ReveController/ajout_reve'); ?>" method="get">
        <!-- Endroit: <input type="text" name="endroit" id="endroit" onkeyup="find_endroit()"> -->
        <select name="endroit" id="endroit" onchange="find_endroit()">
        <?php foreach($endroit as $key){ ?>
            <option value="<?php echo $key['endroit']; ?>"><?php echo $key['endroit']; ?></option>
        <?php } ?>
        </select>
        
    </form>
</html>