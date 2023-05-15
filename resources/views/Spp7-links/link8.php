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
                <div class="menu__toggle" id="nav__toggle">
                    <div></div>
                </div>

                <h3>Конференции, семинары, выставки</h3>
                <div class="empty"></div>
            </div>
            <div class="content__wrapper">
                <?php include('navbar.blade.php'); ?>

                <main>
                    <td rowspan="2" background="/support/images/bg_center.gif">

                        <!--название подраздела (если есть, если нет - сразу же начинается текст)-->
                        <p class="main">
                            <img border="0" src="/support/images/m4.gif" width="19" height="13" align="absmiddle"><span class="dt2"><b>23 Международная выставка (конкурс) "Всероссийская Марка (III тысячелетие). Знак качества XXI века".</b></span><br>



                            <!--текст странички-->
                        </p>
                        <p>С 25 по 28 мая 2010 г. в рамках Национальной программы состоится 23 Международная выставка (конкурс) "Всероссийская Марка (III тысячелетие). Знак качества XXI века", которая продолжит шестой этап конкурса (2009-2010 г.г.). Участники Программы будут номинировать свою продукцию на Золотой, Серебрянный и Бронзовый Знаки качества XXI века. <br>
                            &nbsp;</p>



                        <!--прицепленные файлы-->
                        <p class="main">

                            <img border="0" src="/support/images/app/file.png" width="16" height="16" align="absmiddle">&nbsp;<a href="http://souz.karelia.ru/files/article/572/20100322_1.tif" class="nl">информация (*.tif, 271 Kb)</a><br><br>

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