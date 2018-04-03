<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
       require_once 'connection.php';
        $query = new MongoDB\Driver\Query([]); 
        $rows = $client->executeQuery("flori.flowers", $query);
?>
<table>
    <tr>
        <td>Nume</td>
        <td>Culoare</td>
        <td>Marime</td>
        <td>Pret</td>
</tr>
<?php foreach($rows as $val):?> 
<?php if((isset($val->nume))&&(isset($val->culoare))&&(isset($val->marime))&&(isset($val->pret))&&
($val->nume!="")&& ($val->culoare!="")):?>    
<tr>
    <td><?php echo $val->nume;?></td>
    <td><?php echo $val->culoare;?></td>
    <td><?php echo $val->marime;?></td>
    <td><?php echo $val->pret;?></td>
 </tr>
    <?php endif;?>
    <?php endforeach;?>
</table>
</body>
</html>
