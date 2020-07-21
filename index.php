<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px,  solid;
        }
    </style>
</head>
<body>

<?php
 $failai = scandir('./');
print_r($failai);
foreach ($failai as $failas) {
    print('<ul>');
    print('<li>'.$failas.'</li>');
    print('</ul>');
}
?>

</body>
</html>