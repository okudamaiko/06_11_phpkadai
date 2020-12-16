<?php

$todo = $_POST["todo"];
$deadline = $_POST["deadline"];
$mail = $_POST["mail"];
$write_data = "{$deadline} {$todo} {$mail}\n";
$file = fopen('data/todo.txt', 'a');
flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);
header("Location:text_i.php");
