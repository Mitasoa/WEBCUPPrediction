<html>
    <form action="#" method="get">
        Date: <input type="date" name="date">
        Type: 
        <select name="type">
            <?php foreach($type as $key){ ?>
            <option value="<?php echo $key['id']; ?>"><?php echo $key['type']; ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="Valider">
    </form>
</html>