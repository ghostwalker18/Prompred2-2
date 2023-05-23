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
                            <img border="0" src="/support/images/m4.gif" width="19" height="13" align="absmiddle"><span class="dt2"><b>Заседание Бюро Правления СПП (р) РК в сентябре</b></span><br>



                            <!--текст странички-->
                        </p>
                        <p>28 сентября состоялось очередное заседание Бюро Правления СПП (р) РК.<br>
                            В члены состава СПП (р) РК был принят директор ООО "ТПК "Бонитет" Соколов В.В.<br>
                            Президент СПП (р) РК Пономарев Ю.И. предоставил информацию "О ходе выполнения Программы антикризисных мер Правительства РК на 2009 г. предприятиями республики". Обсуждалась тема "О последствиях увеличения тарифов на электроэнергию 2010 - 2012 годах в условиях кризиса".<br>
                            <br>
                            &nbsp;
                        </p>



                        <!--прицепленные файлы-->
                        <p class="main">

                            <img border="0" src="/support/images/app/doc.png" width="16" height="16" align="absmiddle">&nbsp;<a href="https://docviewer.yandex.ru/?url=ya-browser%3A%2F%2F4DT1uXEPRrJRXlUFoewruJTpvmVeiByw_eAkEX2EdGlE-dV8Xt-fSZgCaN7oJa7kE30QxJun2Qu16gsTP0FSiMzKL8bhce3gcM6xa_kVldLiEEp8x5VKuY6gS1VyQjjCSEpXoWKNHpZV2aqLWoSQ1Q%3D%3D%3Fsign%3DJFxjBA1dhkIMzQiDvBvtyPvmgVUSMd7DypBdjpXtzVw%3D&name=20091006_1.doc" class="nl">протокол (*.doc, 58 Kb)</a><br><br>

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