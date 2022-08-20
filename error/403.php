<?php
$code = '403';
$d = 'Ви не маєте доступа до цієї сторінки';
$headerinfo = '403 Forbidden';

header('HTTP/1.0 ' . headerinfo);
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AndriyCraft | <?php echo $code ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
    *{
        font-family: Roboto, sans-serif;
    }
    </style>
</head>
<body>
    <center style="color: #444; margin:0;">
        <h1 style="line-height:150px; font-weight:bold;"><?php echo $code ?></h1>
        <p><?php echo $d ?></p>
    </center>
</body>
</html>