<?php

$id = $bday[0]['id'];
$data = $bday[0];
?>

<h3>Pas een verjaardag aan:</h3>
<div>
<!-- Dit formulier gaat naar de functie 'saveEdit' in Birthdayscontroller.php-->
  <form action="<?=URL?>birthdays/saveEdit" method="post" autocomplete="off">
    <label for="fname">Naam</label>
    <input type="text" id="person" name="person" minlength="2" maxlength="30" value="<?echo $data['person'];?>" required>

    <label for="fname">Dag</label>
    <input type="number"onkeydown="return FilterInput(event)" onpaste="handlePaste(event)"  id="day" name="day" min="1" max = "31" value="<?echo $data['day'];?>" required>
    <br>
    <label for="fname">Maand</label>
    <input type="number"onkeydown="return FilterInput(event)" onpaste="handlePaste(event)"  id="month" name="month"  min="1" max = "12" value="<?echo $data['month'];?>" required>
    <br>
    <label for="fname">Jaar</label>
    <input type="number"onkeydown="return FilterInput(event)" onpaste="handlePaste(event)"  id="year" name="year"  min="1900" max = "2018" value="<?echo $data['year'];?>" required>
        <input type="hidden" name="id" value="<?= $data['id'] ?>">

    <input type="submit" value="Opslaan">
    <input type="button" name="cancel" value="Annuleren" onClick="window.location='/kalender/';" />
  </form>
</div>
