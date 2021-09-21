<?php
$author_name = "Ragnar Valdre";
//echo $author_name; //print on alternatiiviks (kasutatakse harva)
//Vaatan praegust aja hetke

//Vaatan mida post meetodil saadeti!
//var_dump($_POST);

$today_html = null; //$today_html = "";
$today_adjective_error = null;
$todays_adjective = null;
//kontrollin kas kasutaja klikkkis submit nuppu
if (isset($_POST["submit_todays_adjective"])) {
    //echo "klikiti nuppu!" ;
    if (!empty($_POST["todays_adjective_input"])) {
        $today_html = "<p> Tänane päev on " . $_POST["todays_adjective_input"] . "</p>";
        $todays_adjective = $_POST["todays_adjective_input"];
    } else {
        $today_adjective_error = "Palun kirjutage tänase kohta omadussõna !";
    }
}

//Lisan lehele juhusliku foto
$photo_dir = "Photos/";
//Loen kataloogi sisu
//$all_files = scandir($photo_dir);

$all_files = array_slice(scandir($photo_dir), 2);
//var_dump($all_files);


//Kontrollin ja võtan ainult fotod
$allowed_photo_types = ["image/jpeg", "image/png"];
$all_photos = [];
foreach ($all_files as $file) {
    $file_info = getimagesize($photo_dir . $file);
    if (isset($file_info["mime"])) {
        if (in_array($file_info["mime"], $allowed_photo_types)) {
            array_push($all_photos, $file);
        } //if inarray lõppeb
    } //if lõppeb
} //foreach lõppeb


$file_count = count($all_photos);
$photo_num = mt_rand(0, $file_count - 1);
//<img src="Photos/img.jpg" alt="FML">
$photo_html = '<img src="' . $photo_dir . $all_photos[$photo_num] . '" alt="Tallinna Ülikool" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">';
$photo_list_html = "<ul> \n";

//tsükkel
//for $i=tsükkliväärtus; $i < piirväärtus; $i muutumune) (...)

//<ul>
//<li>pildifail.jpg</li>
//...
//<li>pildifailn.jpg</li>
//</ul>

for ($i = 0; $i < $file_count; $i++) {
    $photo_list_html .= "<li>" . $all_photos[$i] . "</li> \n";
}
$photo_list_html .= "</ul> \n";
$foto_placeholder =  '<option value="">Vali foto!</option>';
$photo_select_html = '<select name="photo_select">' . "/n";
$photo_select_html .= $foto_placeholder;
for ($i = 0; $i < $file_count; $i++) {
    $photo_select_html .= '<option value="' . ($i) . '">' . $all_photos[$i] . "</option> \n";
}
$photo_select_html .= '</select>';

$picture_select = null;
$foto_html = '';
$pildi_all = null;


if (isset($_POST["submit_foto"])) {
    if ($_POST["photo_select"] != '') {
        $picture_select = $_POST["photo_select"];
        $foto_html = '<img src="' . $photo_dir . $all_photos[$picture_select] . '" alt="Tallinna Ülikool" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">';
        $pildi_all = "<p style='text-align: center;'> Valitud pildi nimi on  " . $all_photos[$picture_select] . "</p>";
    } else {
        $foto_html = '<img src="' . $photo_dir . $all_photos[$photo_num] . '" alt="Tallinna Ülikool" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">';
        $pildi_all = "<p style='text-align: center;'> Valitud pildi nimi on  " . $all_photos[$photo_num] . "</p>";
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
    <div class="centered-box">
        <div class="joke">
            <div class="box">
                <p>Did you hear about the claustrophobic astronaut? <br> He just needed a little space.</p>
            </div>
        </div>
        <div class="joke">
            <div class="box">
                <p>Yesterday I saw a guy spill all his Scrabble letters on the road. <br> I asked him, “What’s the word
                    on
                    the street?”</p>
            </div>
        </div>
        <div class="joke">
            <div class="box">
                <p>How does a non-binary samurai kill people? <br> They/Them.</p>

            </div>
        </div>
    </div>
    <p style="text-align: center;">Õppetöö toimub <a href="https://www.tlu.ee/dt">Tallinna Ülikooli Digitehnoloogia
            Instituudis</a>.</p>
    <p style="text-align: center;">See leht on valminud õppetöö raames ja ei sisalda mingit tõsiseltvõetavat sisu!</p>
    <hr>
    <!--ekraanivorm-->
    <form method="POST" style="text-align: center;">
        <input type="text" name="todays_adjective_input" placeholder="Tänase päeva ilma omadus"
            value='<?php echo $todays_adjective; ?>'>
        <input type="submit" name="submit_todays_adjective" value="Saada ära">
        <span><?php echo $today_adjective_error; ?></span>
    </form>
    <span style="text-align: center;"><?php echo $today_html; ?></span>
    <hr>
    <form method="POST" style="text-align: center;">
        <?php echo $photo_select_html; ?>
        <input type="submit" name="submit_foto" value="Vali foto">
    </form>
    <span><?php echo $foto_html; ?></span>
    <span><?php echo $pildi_all; ?></span>
	<span><?php echo $photo_list_html; ?></span>






</body>

</html>