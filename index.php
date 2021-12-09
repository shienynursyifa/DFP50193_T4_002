<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form name="form" method="post" action="save.php">
        <label for="word"><b>Something Good To Say:</b></label><br><br>
        <input type="text" name="word" id="word"><br><br>
        <input type="submit" name="submit" value="Submit">

        <?php
        $myfile = fopen("note.txt", "r") or die("Unable to open file!");
        echo nl2br(fread($myfile, filesize("note.txt")));
        fclose($myfile);
        ?>

</body>

</html>