<?php
    $quote="bgiorno come va fabio";
    $swear=$_GET['swear'];
    $quote= str_replace($swear , "***", $quote)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badwords</title>
</head>
<body>
    <h1><?php echo $quote; ?></h1>
    <span>Lunghezza del paragrafo: <b><?php echo strlen($quote) ?> caratteri (spazi compresi)</b></span>
</body>
</html>