


<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Document</title>
    <style type="text/css">
        td { border: 1px solid black;
        }
    </style>
</head>

<body>
<table>
    <thead>
        <!- mettre th pour texte en gras ->
        <tr>
            <th>
            Valeur F
            </th>
            <th>
            Valeur C
            </th>
        </tr>
    </thead>
    <tbody>
        <?php For($TempF=-50; $TempF<=50; $TempF=$TempF+5){ ?>
        <tr>
            <td>
           <?php echo "$TempF <br>" ?>
            </td>
            <td>
            <?php
            echo 'C=' . round(($TempF-32)*(5/9), 2) . "<br>";
            ?>
            </td>
        </tr>
        <?php //fermer l'accolade!
        } ?>
    </tbody>
    
</table>




</body>

</html>