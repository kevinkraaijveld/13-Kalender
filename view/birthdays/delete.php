<?php
$id = $bday[0]['id'];
$data = $bday[0];
?>

<h3>Verwijder verjaardag:</h3>
<div>
<!-- Dit formulier gaat naar de functie 'deleteThis' in Birthdayscontroller.php-->
  <form action="<?=URL?>birthdays/deleteThis/<?=$bday[0]['id']?>" method="GET" autocomplete="off">
    <label for="fname">Naam</label>
    <input type="text" name="person" placeholder="<?echo $data['person'];?>" readonly>
    <label for="fname">Dag</label>
    <input type="number" placeholder="<?echo $data['day'];?>" readonly>
    <br>
    <label for="fname">Maand</label>
    <input type="number" placeholder="<?echo $data['month'];?>" readonly>
    <br>
    <label for="fname">Jaar</label>
    <input type="number" placeholder="<?echo $data['year'];?>" readonly>


    <input type="submit" value="Verwijderen">
    <input type="button" name="cancel" value="Annuleren" onClick="window.location='/kalender/';" />
  </form>
</div>
