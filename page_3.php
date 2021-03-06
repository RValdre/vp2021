<?php
	require_once("../../config.php");
	require_once("fnc_film.php");
	//echo $server_host;
	$author_name = "Ragnar Valdre";
	$film_html = null;
	$film_html = read_all_films();
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
	<?php echo $film_html; ?>
	





</body>

</html>