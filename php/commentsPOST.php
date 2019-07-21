<?php
$FileText = file_get_contents("commentaries.txt");
$data = $_POST;
$content = '<<_!_>><<_!A_>>'.$data['author'].'<<_?A_>><<_!T_>>'.$data['text'].'<<_?T_>><<_?_>>';
$file = fopen('commentaries.txt', 'w');
$FileText = $content.$FileText;
fwrite($file, $FileText);
fclose($file);
?>