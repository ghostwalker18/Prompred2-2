<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Союз промышленников и предпринимателей (работадателей) республики Карелия">
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <link href="css/app.css" rel="stylesheet" type="text/css">
        <title>PromPred</title>


    </head>

    <body>
        <div class="popupa-wrapper off-wrap" id="popupa-wrapper">

        </div>
        <div class='wrapper'>
            <?php include('header.blade.php'); ?>
            <div class="page__now">
                <?php include('toggle.blade.php'); ?>

                <h3>Что такое СПП (р) РК?</h3>
                <div class="empty"></div>
            </div>
            <div class="content__wrapper">
                <?php include('navbar.blade.php'); ?>

                <main>
                    <td rowspan="2" background="/support/images/bg_center.gif">

                        <!--название подраздела (если есть, если нет - сразу же начинается текст)-->
                        <p class="main">
                            <img border="0" src="images/byShadCoder.png" width="19" height="13" align="absmiddle"><span class="dt2"><b>Соглашение между Правительством РК, ОО "Объединение организаций профсоюзов в РК" и Союзом промышленников и предпринимателей (работодателей) РК на 2013-2015 года</b></span><br>



                            <!--текст странички-->
                        </p>
                        <p>Соглашение</p>



                        <!--прицепленные файлы-->
                        <p class="main">

                            <img border="0" src="images/byShadCoder.png" width="16" height="16" align="absmiddle">&nbsp;<a href="http://souz.karelia.ru/files/article/761/20140429_1.pdf" class="nl">Текст Соглашения (*.pdf, 2084 Kb)</a><br><br>

                            <br><br><br>
                        </p>




                        <!--страницы-->

                    </td>
                </main>
                <div class='modal' id='x1'>
                </div>
                <?php include('events.blade.php'); ?>

            </div>
            <?php include('svg.blade.php'); ?>
            <script src="js/appp.js"></script>
            <script src="js/events.js"></script>


    </body>

    </html>