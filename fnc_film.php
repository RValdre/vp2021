<?php
$database = "if21_ragnar_va";


function read_all_films()
{

	//Loome andmebaasiga ühenduse mysqli /serverhost/kasutajanimi/parool/andmebaas;
	$conn = new mysqli($GLOBALS['server_host'], $GLOBALS["server_user_name"], $GLOBALS['server_password'], $GLOBALS['database']);
	//Valmistan ette sql päringu SELECT * FROM tabelinimi;
	$conn->set_charset('utf8');
	$stmt = $conn->prepare("SELECT * FROM film");

	echo $conn->error;
	//Seon tulemused muutujatega
	$stmt->bind_result($title_from_db, $year_from_db, $duration_from_db, $genre_from_db, $studio_from_db, $director_from_db);
	//Täidan käsu
	$film_html = null;
	$stmt->execute();

	//Võtan kirjeid kuni jätkub !
	while ($stmt->fetch()) {
		$film_html .= '<h3>' . $title_from_db . '</h3>';
		$film_html .= '<ul>';
		$film_html .= '<li>Valmimis aasta:' . $year_from_db . '</li>';
		$film_html .= '<li>Kestus:' . $duration_from_db . '</li>';
		$film_html .= '<li>Zanr:' . $genre_from_db . '</li>';
		$film_html .= '<li>Tootja::' . $studio_from_db . '</li>';
		$film_html .= '<li>Lavastaja:' . $director_from_db . '</li>';
		$film_html .= '</ul>';
	}
	//Sulgen käsu
	$stmt->close();
	//Sulgeme andmebaasi ühenduse
	$conn->close();
	return $film_html;
}

function store_film($title_input, $year_input, $duration_input, $genre_input, $studio_input, $director_input)
{
	$conn = new mysqli($GLOBALS['server_host'], $GLOBALS["server_user_name"], $GLOBALS['server_password'], $GLOBALS['database']);
	$conn->set_charset('utf8');
	//SQL: INSERT INTO film (pealkiri, aasta, kestus, zanr, tootja, lavastaja) VALUES('SUVI', 1976, 83, 'Tallinn film', 'Arvo Kruusement')
	$stmt = $conn->prepare('INSERT INTO film (pealkiri, aasta, kestus, zanr, tootja, lavastaja) VALUES(?,?,?,?,?,?)');
	echo $conn->error;
	//seome SQL käsuga päris andmed!
	//i - integer, d - decimal, s - string
	$year_input = intval($year_input);
	$duration_input = intval($duration_input);
	$stmt->bind_param('siisss', $title_input, $year_input, $duration_input, $genre_input, $studio_input, $director_input);
	//käsu täitmine!
	$success = null;
	if ($stmt->execute()) {
		$success = 'Salvestamine õnnestus';
	} else {
		$success = 'Salvestamisel tekkis viga: ' . $stmt->error;
	}

	$stmt->close();
	$conn->close();
	return $success;
}

function form_filter($answer)
{
	$answer = trim($answer);
	$answer = stripslashes($answer);
	$answer = htmlspecialchars($answer);
	return $answer;
}