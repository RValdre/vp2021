<?php
require_once("../../config.php");
require_once("fnc_film.php");
//echo $server_host;
$author_name = "Ragnar Valdre";
$film_store_notice = null;
$title_answer = null;
$year_answer = null;
$duration_answer = null;
$genre_answer = null;
$studio_answer = null;
$director_answer = null;
$title_error = null;
$year_error = null;
$duration_error = null;
$genre_error = null;
$studio_error = null;
$director_error = null;
//kas klikiti submit nuppu
if (isset($_POST['film_submit'])) {
    if (!empty($_POST['title_input'])) {
        $title_answer = form_filter($_POST['title_input']);
    } else {
        $title_error = "Error, väli on tühi!";
    }

    if (!empty($_POST['year_input'])) {
        $year_answer = form_filter($_POST['year_input']);
        $year_answer = filter_var($year_answer, FILTER_VALIDATE_INT);
        if ($year_answer === false) {
            $year_error = "Sisestati numbri asemel midagi muud!";
        }
    } else {
        $year_error = "Error, väli on tühi!";
    }

    if (!empty($_POST['duration_input'])) {
        $duration_answer = form_filter($_POST['duration_input']);
        $duration_answer = filter_var($duration_answer, FILTER_VALIDATE_INT);
        if ($duration_answer === false) {
            $duration_error = "Sisestati numbri asemel midagi muud!";
        }
    } else {
        $duration_error = "Error, väli on tühi!";
    }

    if (!empty($_POST['genre_input'])) {
        $genre_answer = form_filter($_POST['genre_input']);
    } else {
        $genre_error = "Error, väli on tühi!";
    }

    if (!empty($_POST['studio_input'])) {
        $studio_answer = form_filter($_POST['studio_input']);
    } else {
        $studio_error = "Error, väli on tühi!";
    }

    if (!empty($_POST['director_input'])) {
        $director_answer = form_filter($_POST['director_input']);
    } else {
        $director_error = "Error, väli on tühi!";
    }

    if (is_null($title_error) and is_null($year_error) and is_null($duration_error) and is_null($genre_error) and is_null($studio_error) and is_null($director_error)) {
        if (!empty($_POST['title_input']) and !empty($_POST['genre_input']) and !empty($_POST['year_input']) and !empty($_POST['duration_input']) and !empty($_POST['studio_input']) and !empty($_POST['director_input'])) {
            $film_store_notice = store_film($_POST['title_input'], $_POST['year_input'], $_POST['duration_input'], $_POST['genre_input'], $_POST['studio_input'], $_POST['director_input']);
        }
    } else {
        $film_store_notice = 'Osa andmeid on puudu !';
    }
}
?>
<!DOCTYPE html>
<html lang="et">

<head>
    <meta charset="utf-8">
    <title><?php echo $author_name ?> webpage</title>
    <style>
    p {
        color: rgb(209, 209, 209);
    }

    h1 {
        color: rgb(209, 209, 209);
    }

    h2 {
        color: rgb(209, 209, 209);
    }

    h3 {
        color: rgb(209, 209, 209);
    }

    ul {
        color: rgb(209, 209, 209);
    }

    label {
        color: rgb(209, 209, 209);
    }

    li {
        color: rgb(209, 209, 209);
    }

    body {
        background-color: rgb(54, 54, 54);
    }

    .centered-box {
        background-color: rgb(54, 54, 54);
        padding: 30px;
    }

    .joke {
        margin: 0 auto;
        border: limegreen 5px solid;
        height: 100px;
        width: 50%;
        background-color: rgb(50, 50, 50);
        text-align: center;
    }

    .box {
        text-align: center;
        height: 80px;
        /*Flex mudel*/
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .joke::after {
        content: "* * *";
        color: red;
        font-size: 1.2em;
    }
    </style>
</head>

<body>
    <h1 style="text-align: center;"><?php echo $author_name ?> veebileht</h1>

    <p style="text-align: center;">Õppetöö toimub <a href="https://www.tlu.ee/dt">Tallinna Ülikooli Digitehnoloogia
            Instituudis</a>.</p>
    <p style="text-align: center;">See leht on valminud õppetöö raames ja ei sisalda mingit tõsiseltvõetavat sisu!</p>
    <hr>
    <br>
    <h2 style="text-align: center;">Eesti Filmid</h2>
    <form method='POST'>
        <label for='title_input'>Filmi pealkiri: </label>
        <input type='text' name='title_input' id='title_input' value='<?php echo $title_answer; ?>'
            placeholder='pealkiri'>
        <span style="color: red;"><?php echo $title_error ?></span>
        <br>
        <label for='year_input'>Valmimis aasta: </label>
        <input type='text' name='year_input' id='year_input' value="<?php echo $year_answer; ?>"
            placeholder='<?php echo date('Y'); ?>' min='1912'>
        <span style="color: red;"><?php echo $year_error ?></span>
        <br>
        <label for='duration_input'>Kestus minutites: </label>
        <input type='text' name='duration_input' id='duration_input' value='<?php echo $duration_answer; ?>'
            placeholder='60' min='1'>
        <span style="color: red;"><?php echo $duration_error ?></span>
        <br>
        <label for='genre_input'>Filmi žanr: </label>
        <input type='text' name='genre_input' id='genre_input' value='<?php echo $genre_answer; ?>' placeholder='žanr'>
        <span style="color: red;"><?php echo $genre_error ?></span>
        <br>
        <label for='studio_input'>Filmi tootja: </label>
        <input type='text' name='studio_input' id='studio_input' value='<?php echo $studio_answer; ?>'
            placeholder='tootja'>
        <span style="color: red;"><?php echo $studio_error ?></span>
        <br>
        <label for='director_input'>Filmi lavastaja: </label>
        <input type='text' name='director_input' id='director_input' value='<?php echo $director_answer; ?>'
            placeholder='lavastaja'>
        <span style="color: red;"><?php echo $director_error ?></span>
        <br>
        <input type='submit' name='film_submit' value='Salvesta'>
    </form>
    <p><?php echo $film_store_notice; ?></p>






</body>

</html>