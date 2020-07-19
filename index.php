<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

//Namu darbai, nemoku...

/*Sukurkite asociatyvūjį masyvą, kuris 
    reprezentuotų žmogų ir jo svorį ir:
    1. Rasti lengviausią žmogų (minimumas);
    2. Sunkiausią (maximumas);
    3. Atspausdinti surikiuotus žmones (pagal svorį);
    4. Susumuoti visų žmonių svorį ir nustatyti
       ar jie gali kilti liftu (500kg ar kita riba);
     */

foreach ([
    "suauges" => "60 kg",
    "vaikas" => "20 kg",
    "pagyvenes" => "80 kg",
    "paauglys" => "40 kg",
] as $zmogus => $svoris) {
    print($zmogus . '-' . $svoris . "<br>");
}
// daugiau nemoku, nesuprantu...

print("----------------" . "<br>");

$number = [1, 2, 3, 4];
for ($i = 0; $i < count($number); $i++) {
    for ($j = 0; $j < count($number[$i]); $j++) {
        print($number[$i][$j]);
        if (!($j + 1 == count($number[$i]))) {
            print(', ');
        }
    }
    print('<br>');
}
?>
    
</body>
</html>