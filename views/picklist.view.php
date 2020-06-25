

<?php $q = $db->query('SELECT * FROM unite'); ?>
<select>
<?php while($response = $q->fetch()):; ?>
    <option><?=$response['unit'] ?></option>
<?php endwhile; ?>
</select>
