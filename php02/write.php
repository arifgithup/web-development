<?php
$file2 = fopen("simpol.txt", "w") or die("unable to open file");
fwrite($file2,"this is text one\n");
fwrite($file2,"this is text two\n");
fwrite($file2);

?>