<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <?php

    $path = "./" . str_replace('./', '', $_GET['path'], $i);
    $dirContents = scandir($path);
    print($path);
    

    print(
        "<table>
            <tr>
               <th>Name</th>
               <th>Type</th>
            </tr>"
    );
    for ($i = 0; $i < count($dirContents); $i++) {
        if ($dirContents[$i] === ".." or $dirContents[$i] === ".")
        continue;
        print("<tr><td>");
        // print($path . '/' . $dirContents[$i]);
        if (is_dir($dirContents[$i])) {
            print("Dir</td>");
            print("<td><a href='?path=" . $path . $dirContents[$i] . "'>" . $dirContents[$i] . "</a></td></tr>");
        } else {
            print("File</td>");
            print("<td>" . $dirContents[$i] . "</td></tr>");
        }
    }
    print("</table>" . "<br>");
    echo '<button onclick="window.history.back()">Go Back</button>';
    ?>

</body>

</html>