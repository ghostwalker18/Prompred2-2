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

                        <!--название подраздела (если есть, если нет - сразу же начинается текст)-->
                        <p class="main">
                            <img border="0" src="/support/images/m4.gif" width="19" height="13" align="absmiddle"><span class="dt2"><b>В Сегежском районе будет разработана новая программа социально-экономического развития территории</b></span><br>



                            <!--текст странички-->
                        </p>
                        <p>18 декабря специалисты Министерства экономического развития Карелии посетят Сегежский муниципальный район, где состоится рабочее совещание с участием глав поселений, экономистов администраций муниципального района, специалистов Центра занятости и руководителей социальных учреждений. Главный вопрос - разработка Программы комплексного социально-экономического развития Сегежского района на предстоящий пятилетний период.</p>
                        <p>Сегежский район станет первой территорией республики, где будет апробирован так называемый новый типовой макет комплексной программы муниципального образования. Опыт работы с муниципалитетами показал, что отработанные в 2006-2007 годах методы подготовки проектов таких программ во всех районных администрациях, так же как и основные требования к ним, не устарели. В новых комплексных программах должны быть отражены все социально-экономические процессы, происходящие на территории. Особое внимание будет уделено созданию условий для реализации инвестиционных проектов и проработке новых идей.</p>
                        <p>«Ноу-хау» нового типового макета – это предлагаемая оценка реализации комплексной Программы. Оценивать ее результаты разработчики предлагают по степени решения существующих проблем и поставленных задач.</p>
                        <p>&nbsp;</p>






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