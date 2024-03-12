<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zuzia</title>
</head>
<body>
    <h1>pierwsze zadanie z php</h1>
    <h3>
    <?php
       $imie = 'umami';
       $liczba = 11;
       $liczbaa = 1.3;
       echo "<h3> $imie ktos $liczba wyłaczyl <i> zasilanie</i></h3>";
       echo '<h3>'. $imie .'ktos '.$liczba.' wyłaczyl <i> zasilanie</i></h3>';
       echo $liczbaa;
       echo '<br>';
       echo $liczba+$liczbaa;
    ?>
    </h3>
</body>
</html>