<!--  Kevin Kraaijveld PHP Kalender / create.php -->

<h3>Voeg een nieuwe verjaardag toe</h3>
<div>
  <!-- Dit formulier gaat naar de functie 'create' in Birthdayscontroller.php-->
  <form action="<?=URL?>birthdays/create" method="post" autocomplete="off">
    <label for="fname">Naam</label>
    <input type="text" id="person" name="person" minlength="2" maxlength="30" placeholder="Nieuwe naam" required>

    <label for="fname">Dag</label>
    <input type="number"onkeydown="return FilterInput(event)" onpaste="handlePaste(event)"  id="day" name="day" min="1" max = "31" placeholder="Dag" required>
    <br>
    <label for="fname">Maand</label>
    <input type="number"onkeydown="return FilterInput(event)" onpaste="handlePaste(event)"  id="month" name="month"  min="1" max = "12" placeholder="Maand" required>
    <br>
    <label for="fname">Jaar</label>
    <input type="number"onkeydown="return FilterInput(event)" onpaste="handlePaste(event)"  id="year" name="year"  min="1900" max = "2018" placeholder="Jaar" required>

    <input type="submit" value="Versturen">
    <input type="button" name="cancel" value="Annuleren" onClick="window.location='/kalender/';" />
  </form>
</div>
