<?php
// Array per tradurre testo -> morse
$testo_morse = array(
        "A"=>".-",   "B"=>"-...", "C"=>"-.-.", "D"=>"-..", "E"=>".",
        "F"=>"..-.", "G"=>"--.",  "H"=>"....", "I"=>"..",  "J"=>".---",
        "K"=>"-.-",  "L"=>".-..", "M"=>"--",   "N"=>"-.",  "O"=>"---",
        "P"=>".--.", "Q"=>"--.-", "R"=>".-.",  "S"=>"...", "T"=>"-",
        "U"=>"..-",  "V"=>"...-", "W"=>".--",  "X"=>"-..-","Y"=>"-.--",
        "Z"=>"--..",
        "0"=>"-----","1"=>".----","2"=>"..---","3"=>"...--","4"=>"....-",
        "5"=>".....","6"=>"-....","7"=>"--...","8"=>"---..","9"=>"----."
);

// Array per tradurre morse -> testo
$morse_testo = array(
        ".-"=>"A",   "-..."=>"B", "-.-."=>"C", "-.."=>"D", "."=>"E",
        "..-."=>"F", "--."=>"G",  "...."=>"H",".."=>"I",  ".---"=>"J",
        "-.-"=>"K",  ".-.."=>"L", "--"=>"M",  "-."=>"N",  "---"=>"O",
        ".--."=>"P", "--.-"=>"Q", ".-."=>"R", "..."=>"S", "-"=>"T",
        "..-"=>"U",  "...-"=>"V", ".--"=>"W", "-..-"=>"X","-.--"=>"Y",
        "--.."=>"Z",
        "-----"=>"0",".----"=>"1","..---"=>"2","...--"=>"3","....-"=>"4",
        "....."=>"5","-...."=>"6","--..."=>"7","---.."=>"8","----."=>"9"
);

$risultato = "";

// Se premo il bottone per tradurre testo -> morse
if (isset($_GET["vaiTesto"])) {
    $lettera = strtoupper($_GET["lettera"]);
    if (isset($testo_morse[$lettera])) {
        $risultato = $testo_morse[$lettera];
    } else {
        $risultato = "Carattere non valido";
    }
}

// Se premo il bottone per tradurre morse -> testo
if (isset($_GET["vaiMorse"])) {
    $codice = $_GET["morse"];
    if (isset($morse_testo[$codice])) {
        $risultato = $morse_testo[$codice];
    } else {
        $risultato = "Codice non valido";
    }
}
?>

<html>
<head>
    <title>Traduttore Morse</title>
</head>
<body>
<h1>Traduttore in Morse</h1>

<form method="get">
    <p>Lettera/Numero: <input type="text" name="lettera"></p>
    <input type="submit" name="vaiTesto" value="Traduci in Morse">
</form>

<form method="get">
    <p>Codice Morse: <input type="text" name="morse"></p>
    <input type="submit" name="vaiMorse" value="Traduci in Testo">
</form>

<?php
if ($risultato != "") {
    echo "<h2>Risultato: $risultato</h2>";
}
?>
</body>
</html>
