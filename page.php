<?php
$author_name = "Ragnar Valdre";
//echo $author_name; //print on alternatiiviks (kasutatakse harva)
//Vaatan praegust aja hetke
$full_time_now = date("d.m.Y H:i:s");
//Vaatan nädalapäeva
$weekday_now = date("N");
//echo $weekday_now;
$weekday_names_et = ["esmasmpäev", "teisipäev", "kolmapäev", "neljapäev", "reede", "laupäev", "pühapäev"];
//echo $weekday_names_et[$weekday_now - 1];
//küsime ainult tunde
$hour_now = date("H");
$day_category = "tavaline päev";
if ($weekday_now <= 5) {        // < > <= >= == ===  != "Ei ole võrdne"
    $day_category = "koolipäev";
} else {
    $day_category = "puhkepäev";
}

// IF command mis otsustab praeguse päeva tegevuse sõltuvalt ajast ja päeva tüübist!

if ($day_category == 'koolipäev') {
    if ($hour_now < 8 || $hour_now >= 23) {
        $day_activity = "uneaeg";
    } elseif ($hour_now >= 8 && $hour_now <= 18) {
        $day_activity = "kooliaeg";
    } else {
        $day_activity = "vabaaeg";
    }
} else {
    if ($hour_now < 8 || $hour_now >= 23) {
        $day_activity = "uneaeg";
    } else {
        $day_activity = "vabaaeg";
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
    <img src="comedy.jpg" alt="comedy" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
    <p style="text-align: center;">Õppetöö toimub <a href="https://www.tlu.ee/dt">Tallinna Ülikooli Digitehnoloogia
            Instituudis</a>.</p>
    <p style="text-align: center;">See leht on valminud õppetöö raames ja ei sisalda mingit tõsiseltvõetavat sisu!</p>
    <p style="text-align: center;">Lehe avamise hetk: <span>
            <?php echo $weekday_names_et[$weekday_now - 1] . ", " . $full_time_now . ", on " . $day_category ?> </span>
    </p>
    <p style="text-align: center;">Praegusel momendil on sinul:<span> <?php echo $day_activity ?> </span></p>
    <?php echo $photo_html ?>


</body>

</html>