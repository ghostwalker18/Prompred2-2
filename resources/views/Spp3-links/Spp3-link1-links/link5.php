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

                <h3>Деятельность союза</h3>
                <div class="empty"></div>
            </div>
            <div class="content__wrapper">
                <?php include('navbar.blade.php'); ?>

                <main>
                    <td rowspan="2" background="/support/images/bg_center.gif">

                        <!--название подраздела (если есть, если нет - сразу же начинается текст)-->
                        <p class="main">
                            <img border="0" src="/support/images/m4.gif" width="19" height="13" align="absmiddle"><span class="dt2"><b>Заседание Бюро Правления СПП (р) РК в ноябре</b></span><br>



                            <!--текст странички-->
                        </p>
                        <p>&nbsp;</p>
                        <p>«О готовности системы обязательного страхования социальных рисков к переходу от ЕСН к страховым взносам»<br>
                            <br>
                            &nbsp;
                        </p>



                        <!--прицепленные файлы-->
                        <p class="main">

                            <img border="0" src="/support/images/app/doc.png" width="16" height="16" align="absmiddle">&nbsp;<a href="https://docs.yandex.ru/docs/view?url=ya-browser%3A%2F%2F4DT1uXEPRrJRXlUFoewruEfDnyIVFrjzmxXH97ta5p_HfPVm4B61P7aGDz0PnlHpJEptweE0foaz81fH_Ea1Nch4Gx56nUaXMav-jR8nm8ewbVmBznc5B2-ShRDf5pDrL79lKWieUwDbFPMJiGdNfg%3D%3D%3Fsign%3Dp8PgjopeuOsqFzv2TzLCMBgedPW_Ra1hmIbzXCUppXc%3D&name=20100226_1.doc&nosw=1" class="nl">Протокол заседания (*.doc, 49 Kb)</a><br><br>

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