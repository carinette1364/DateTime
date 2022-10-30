<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>DateTime</title>
</head>
<body>
    
</body>
</html>
<?php
$presentTime = new DateTime('now');
// var_dump($presentTime);
$destinationTime = new DateTime('DEC 02 2022 17:30');
// var_dump($destinationTime);
?>
<div class='date'>
<?php
echo '<div><p>' . $presentTime->format('M d Y A H:i') . '</p></div><br>' . PHP_EOL;
echo '<div><p>' . $destinationTime->format('M d Y A H:i') . '</p></div><br>' . PHP_EOL;
?>
</div>
<?php
$interval = $presentTime->diff($destinationTime);
echo 'Entre aujourd\'hui et le ' . $destinationTime->format('M d Y A H:i') . ',<br> il reste ' . $interval-> y . " années, " 
. $interval->m." mois, ". $interval->d." jours, " . $interval->h." heures, et " . $interval->i." minutes. ";


