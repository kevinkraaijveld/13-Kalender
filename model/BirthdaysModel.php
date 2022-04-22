<?php
/*  Kevin Kraaijveld PHP BirthdaysModel
============================================================================

1. Algemeen
2. Create
3. Delete
4. Edit

============================================================================ */

/* 1. Algemeen
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word aangeroepen door de 'index' functie in de controller
function getAllBirthdays()
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM birthdays ORDER BY month, day ASC";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

// Dit word aangeroepen door de 'delete' en de 'edit' functies in de controller
function getBirthdateById($id){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `birthdays` where id = :id ";
	$query = $db->prepare($sql);
	$query->bindParam(":id", $id);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

/* 2. Create
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word aangeroepen door de 'create' functie in de controller
function newBirthday($data){
	$db = openDatabaseConnection();
	$sql = $db->prepare("INSERT INTO birthdays (person, day, month, year)
	VALUES (:person, :day, :month, :year);");

		$sql->bindParam(':person',$data['person'],PDO::PARAM_STR);
			$sql->bindParam(':day',$data['day'],PDO::PARAM_INT);
				$sql->bindParam(':month',$data['month'],PDO::PARAM_INT);
					$sql->bindParam(':year',$data['year'],PDO::PARAM_INT);
	$sql->execute();
}

/* 3. Delete
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

// Dit word aangeroepen door de 'delete' functie in de controller
function deleteBirthday($id) {
	$db = openDatabaseConnection();
		$sql = $db->prepare("DELETE FROM birthdays WHERE id = :id");
			$sql->bindParam(":id", $id);
	$sql->execute();
}

/* 4. Edit
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */


// Dit word aangeroepen door de 'saveEdit' functie in de controller
function update($answers){
	$db = openDatabaseConnection();
	$sql = "UPDATE birthdays SET person = :name, day = :day, month = :month, year = :year WHERE id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(":name", $answers['person']);
	$query->bindParam(":day", $answers['day']);
	$query->bindParam(":month", $answers['month']);
	$query->bindParam(":year", $answers['year']);
	$query->bindParam(":id", $answers['id']);
	$query->execute();
}

/*Made by Kevin Kraaijveld*/
