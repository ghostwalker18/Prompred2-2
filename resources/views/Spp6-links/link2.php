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

                <h3>Предложения для членов союза</h3>
                <div class="empty"></div>
            </div>
            <div class="content__wrapper">
                <?php include('navbar.blade.php'); ?>

                <main>
                    <td rowspan="2" background="/support/images/bg_center.gif">

                        Обсудить проблемы своего бизнеса вы можете с Президентом Союза промышленников и предпринимателей (работодателей) Республики Карелия Юрием Пономаревым, предварительно договорившись о встрече по телефону (814 2) 77 28 64.

                        <!--название подраздела (если есть, если нет - сразу же начинается текст)-->
                        <p class="main">
                            <img border="0" src="/support/images/m4.gif" width="19" height="13" align="absmiddle"><span class="dt2"><b>ОБРАЩЕНИЕ РЕСПУБЛИКАНСКОЙ ТРЕХСТОРОННЕЙ КОМИССИИ ПО РЕГУЛИРОВАНИЮ СОЦИАЛЬНО-ТРУДОВЫХ ОТНОШЕНИЙ К РУКОВОДИТЕЛЯМ ПРЕДПРИЯТИЙ, ОРГАНИЗАЦИЙ, ИНДИВИДУАЛЬНЫМ ПРЕДПРИНИМАТЕЛЯМ РЕСПУБЛИКИ КАРЕЛИЯ</b></span><br>



                            <!--текст странички-->
                        </p>
                        <p>обращение</p>



                        <!--прицепленные файлы-->
                        <p class="main">

                            <img border="0" src="/support/images/app/file.png" width="16" height="16" align="absmiddle">&nbsp;<a href="http://souz.karelia.ru/files/article/577/20100401_1.tif" class="nl">обращение (*.tif, 94 Kb)</a><br><br>

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