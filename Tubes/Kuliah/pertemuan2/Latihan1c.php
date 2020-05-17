<!DOCTYPE html>

<head>
    <title>Latihan 1c</title>
    <style type="text/css">
        .kotak {
            width: 15px;
            height: 15px;
            border: solid 1px;
            padding: 15px;
        }
    </style>
</head>
<body>
    <?PHP 
        $a = "A";
        $b = "B";
        $c = "C";
    ?>

    <table class="kotak" cellspacing="5">
        <tr>
            <td><div class="kotak"><?=$a?></div></td>
            <td><div class="kotak"><?=$a?></div></td>
            <td><div class="kotak"><?=$a?></div></td>
        </tr>
        <tr>
            <td><div class="kotak"><?=$b?></div></td>
            <td><div class="kotak"><?=$b?></div></td>
        </tr>
        <tr>
            <td><div class="kotak"><?=$c?></div></td>
        </tr>
    </table>
   
</body>
</html>