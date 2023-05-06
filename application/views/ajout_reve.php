<?php

?>
<html>
    <form action="<?php echo site_url('ReveController/ajout_reve'); ?>" method="get">
        Date: <input type="date" name="date">
        Type: 
        <select name="typereve">
            <?php foreach($type as $key){ ?>
            <option value="<?php echo $key['id']; ?>"><?php echo $key['type']; ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="Valider">
    </form>
</html>