<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wynik</title>
</head>
<body>
    <h2>Średnia arytmetyczna z ocen</h2>
    <?php
        $avgGrade = array($_POST['ocena1'],$_POST['ocena2'],$_POST['ocena3'],$_POST['ocena4'],$_POST['ocena5'],$_POST['ocena6'],$_POST['ocena7'],$_POST['ocena8'],$_POST['ocena9'],$_POST['ocena10']);
        $length = 0;
        $suma = 0;
        $avg = 0;

        foreach($avgGrade as $a)
        {
            if(is_numeric($a))
            {
                $suma += $a;
                $length++;
            }
        }
        $avg = $suma / $length;
        echo "Obliczona średnia dla $length ocen to $avg";
        if($avg >= 4.75)
        {
            echo "<br> Udało ci się dostać, gratulacje!";
        }
    ?>
</body>
</html>