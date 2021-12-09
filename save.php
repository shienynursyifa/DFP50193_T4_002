<?php
$word=$_POST ['word'];
$myfile = fopen("note.txt", "a") or die("Unable to open file!");
fwrite($myfile, $word."\n");
fclose($myfile);
header('location:index.php');