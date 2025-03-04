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

                <h3>Антикризисная политика</h3>
                <div class="empty"></div>
            </div>
            <div class="content__wrapper">
                <?php include('navbar.blade.php'); ?>

                <main>
                    <td rowspan="2" background="/support/images/bg_center.gif">

                        <!--название подраздела (если есть, если нет - сразу же начинается текст)-->
                        <p class="main">
                            <img border="0" src="/support/images/m4.gif" width="19" height="13" align="absmiddle"><span class="dt2"><b>9 сентября Глава Карелии Сергей Катанандов провел заседание Комиссии по повышению устойчивости экономического развития республики и разработке антикризисных мер </b></span><br>



                            <!--текст странички-->
                        </p>
                        <p>На Комиссии рассмотрены вопросы о ситуации на рынке труда и состояние с выплатой заработной платы в отраслях производства, о ходе выполнения Региональной Программы поддержки занятости населения в Республике Карелия, о работе по реализации плана антикризисных мер.<br>
                            Согласно данным Министерства труда и занятости Карелии, пик напряженности на рынке труда в республике уже пройден. Уровень безработицы с мая текущего года к сентябрю снизился с 3,8 % до 2,9 %. Начиная с мая начали увеличиваться и потребности работодателей в рабочей силе. Однако, количество безработных в нынешнем году все равно выше, чем в 2008. Поэтому вопросы занятости продолжают оставаться на постоянном контроле в Правительстве Карелии. <br>
                            <br>
                            &nbsp;
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