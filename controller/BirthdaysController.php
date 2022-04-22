<?php
/*  Kevin Kraaijveld PHP BirthdaysController
============================================================================

1. Algemeen
2. Create
3. Delete
4. Edit

============================================================================ */

/* 1. Algemeen
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */


// Dit linkt de controller met de model
require(ROOT . "model/BirthdaysModel.php");

// Dit toont alle verjaardagen in de view/index.php
function index()
{
	render("birthdays/index", // Dit toont de index.php in de view
		array(
			'birthdays' => getAllBirthdays()  // Voert de 'getAllBirthdays' functie uit in de Model.php
		)
	);
}

/* 2. Create
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */


// Dit word uitgevoerd als je in de create.php op versturen klikt
function create(){
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$data=array(
			'person' => $_POST['person'],
			'day' => $_POST['day'],
			'month' => $_POST['month'],
			'year' => $_POST['year']
		);
			newBirthday($data); // Dit voert de 'newBirthday' functie in de model uit.
				echo "<script>alert('Verjaardag toegevoegd'); window.location = '/kalender/';</script>";
	}
	render("birthdays/create"); // Dit toont de create.php
}



/* 3. Delete
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word uitgevoerd als je in de index.php op het kruisje klikt
function delete($id){
		$bday = getBirthdateById($id);
	render("birthdays/delete", ['bday' => $bday]); // Dit toont de delete.php
}


function deleteThis($id){
		deleteBirthday($id); // Dit voert de 'deleteBirthday' functie in de model uit.
	echo "<script>alert('Verjaardag verwijderd'); window.location = '/kalender/';</script>";
}


/* 4. Edit
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word uitgevoerd als je in de index.php op een naam klikt
function edit($id){
		$bday = getBirthdateById($id);
	render("birthdays/edit", ['bday' => $bday]); // Dit toont de edit.php
}

// Dit word uitgevoerd als je in de edit.php op opslaan klikt
function saveEdit(){
		update($_POST);
	echo "<script>alert('Verjaardag is aangepast'); window.location = '/kalender/';</script>";
}

/*Made by Kevin Kraaijveld*/
