<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Союз промышленников и предпринимателей (работадателей) республики Карелия">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link href="css/app.css" rel="stylesheet" type="text/css">
    <link href="css/find.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <title>СПП(Р) РК</title>
</head>

<body>
    <div class="input_wrapper">
    
        <div class="popupa" id="popupa">
            <h3>О мероприятии</h3>
            <?php
            echo $event->a_title;
            ?>
            <a class="btn" href='/'>Закрыть</a>
        </div>
    </div>
</body>
</html>
