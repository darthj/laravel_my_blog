<?php
$message = '';
if($guess == $number)
{
	$message = "You guessed the number!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Roll The Dice</title>
</head>
<body>
    <h2>Your guess was <?= $guess; ?></h2>
    <h2>The dice roll was <?= $number; ?></h2>
	<h2><?= $message;?></h2>
</body>
</html>