<!--  Kevin Kraaijveld PHP Kalender / index.php -->
<h3>Kalender</h3>
<?php
$month = '';
$day = '';
$person ='';

foreach ($birthdays as $bday) {
  // Als $month niet gelijk is aan de maand in het database moet hij die weergeven
  if( $month != $bday['month']){
    $month = $bday['month'];
    echo '<h1>' . date('F', mktime(0,0,0,$month,10)) . '</h1>';
  }

  // Als $day niet gelijk is aan de dag in het database moet hij die weergeven

  if ($day != $bday['day']){
    $day = $bday['day'];
    echo '<h2>' . $day . '</h2>';
  }

  // Als $person niet gelijk is aan de person in het database moet hij die weergeven
  if ($person != $bday['person']){
    $person = $bday['person'];
    $year = $bday['year'];
    $current = date("Y-m-d");
    $sum_total = $current - $year;
    echo "<p>
      <a class='personsname' href = '" . URL . "birthdays/edit/" . $bday["id"]. "'>" . $bday["person"] . "</a>
      " . $bday['year'] . " / <span class='age'>" . $sum_total . "</span>
      <a class='deletethis' href = '" . URL . "birthdays/delete/" . $bday["id"]. "'>x</a>
    </p>";
  }
}


 ?>
<a id='createNew' href='birthdays/create'>+ Toevoegen</a>
