<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$text = readfile('simpol.text');
echo '<p>'. $text .'</p>';
$filen = fopen("simpol.text", "r") or die("unable to open file");
echo fread($filen,filesize("simpol.text")) ;

fclose($filen);

// wride file


?>
</body>
</html>