<?php
$code = '404';
$d = 'Сторінка не знайдена';
$headerinfo = '404 Not Found';

header('HTTP/3 ' . headerinfo);
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AndriyCraft | <?php echo $code ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.andriycraft.page/static/error.css" rel="stylesheet">
</head>
<body>
    <center style="color: #444; margin:0;">
        <h1 style="line-height:150px; font-weight:bold;"><?php echo $code ?></h1>
        <p><?php echo $d ?></p>
    </center>
</body>
</html>