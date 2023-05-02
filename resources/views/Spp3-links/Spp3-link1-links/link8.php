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

                <h3>Деятельность союза</h3>
                <div class="empty"></div>
            </div>
            <div class="content__wrapper">
                <?php include('navbar.blade.php'); ?>

                <main>
                    <td rowspan="2" background="/support/images/bg_center.gif">

                        <!--название подраздела (если есть, если нет - сразу же начинается текст)-->
                        <p class="main">
                            <img border="0" src="/support/images/m4.gif" width="19" height="13" align="absmiddle"><span class="dt2"><b>Заседание Бюро Правления в мае</b></span><br>



                            <!--текст странички-->
                        </p>
                        <p>Очередное заседание Бюро Правления СПП (р) РК</p>



                        <!--прицепленные файлы-->
                        <p class="main">

                            <img border="0" src="/support/images/app/doc.png" width="16" height="16" align="absmiddle">&nbsp;<a href="https://docs.yandex.ru/docs/view?url=ya-browser%3A%2F%2F4DT1uXEPRrJRXlUFoewruPNJtMx4B18N52x3D-vW3Lx2D7S9_5fNataWwQ0cnLc5PzI06iHVc9RkcNRm-glpipPVKvvahc5AkDDUf6DMtjSlIAXd2Y4esgMSrHjYG-FsjXAOSbniS8E2WwGe46zYaA%3D%3D%3Fsign%3DuLwOCQ5sQomjQoSAIXpIOKfDDvExZywyzulAbp0sCnw%3D&name=20090529_1.doc&nosw=1" class="nl">протокол №5 (*.doc, 55 Kb)</a><br><br>

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