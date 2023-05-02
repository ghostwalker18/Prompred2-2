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

                <h3>Предложения для членов союза</h3>
                <div class="empty"></div>
            </div>
            <div class="content__wrapper">
                <?php include('navbar.blade.php'); ?>

                <main>
                    <td rowspan="2" background="/support/images/bg_center.gif">

                        <!--название подраздела (если есть, если нет - сразу же начинается текст)-->
                        <p class="main">
                            <img border="0" src="/support/images/m4.gif" width="19" height="13" align="absmiddle"><span class="dt2"><b>Соглашение о минимальной заработной плате в РК</b></span><br>



                            <!--текст странички-->
                        </p>
                        <p>Подробнее:</p>



                        <!--прицепленные файлы-->
                        <p class="main">

                            <img border="0" src="/support/images/app/file.png" width="16" height="16" align="absmiddle">&nbsp;<a href="https://docviewer.yandex.ru/?url=ya-browser%3A%2F%2F4DT1uXEPRrJRXlUFoewruKyvcTwr_2D5BaYd3uwht-kymtHeiG-QpFHY0rJhsxsbs08Y6mdb5hklOHCCtQlzIyBUqPnrT5vU6h7BD8_y7JEw-BQdgMOYrWyh0eo12hv6lJiJSN6LVyP27BXwLqiV4Q%3D%3D%3Fsign%3DHIsERW2Dx7Y_j7DewXzFsXqmcdFhOMVNxjzG6cLxXEI%3D&name=20150619_1.docx" class="nl">Соглашение о МЗП 2015 (*.docx, 5 Kb)</a><br><br>

                            <img border="0" src="/support/images/app/file.png" width="16" height="16" align="absmiddle">&nbsp;<a href="https://docs.yandex.ru/docs/view?url=ya-browser%3A%2F%2F4DT1uXEPRrJRXlUFoewruL4pV3C_huMSExCxkRySGzzan6B3i6deVj6dt-d174541sbzkA1Dgm3uES8gwWBFuPZtaX-UL06Lk7uRNf6MPT8dDZZDyP16UYC6ASebr1KA2eIECo8jX3DlTdjHFs7wlA%3D%3D%3Fsign%3D2DPsyilqRM0PeOgDNxkJ5Gjv8J-llZ2zJlhXriIUMcs%3D&name=20150619_2.docx&nosw=1" class="nl">Постановление Правительства РК. (*.docx, 4 Kb)</a><br><br>

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