<?php
function importerCSV(string $fileName, array &$villes)
{
// A COMPLETER
}

$villes = [];
importerCSV("villes.csv", $villes);

// A MODIFIER
$str = <<<HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>TP PHP 5.2 - Villes</title>
<style>
	table { border-collapse: collapse; }
	table, th, tr, td { border: 1px solid black;}
</style>
</head>
<body>
HEREDOC;

// A COMPLETER

echo $str;
?>
