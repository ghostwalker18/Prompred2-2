<!DOCTYPE html>
<html lang="ru">

    @include('head')

    <body>

        <div class="popupa-wrapper off-wrap" id="popupa-wrapper"></div>

        <div class='wrapper'>

            @include('header')

            <div class="page__now">

                @include('toggle')

                <h3>Контакты</h3>

                <div class="empty"></div>
            </div>

            <div class="content__wrapper">

                @include('navbar')

                <main>
                    <td rowspan="2" background="/support/images/bg_center.gif">

                        <!--название подраздела (если есть, если нет - сразу же начинается текст)-->
                        <p class="main">
                            <img border="0" src="/support/images/m4.gif" width="19" height="13" align="absmiddle"><span class="dt2"><b>Информация для контактов</b></span><br>

                        </p>

                        <p><br>
                            П<b>резидент СПП(р) РК - Сафронов Александр Владимирович</b><br>
                            <br>
                            Генеральный директор&nbsp;СПП(р) РК -&nbsp;Костин Павел Вячеславович<br>
                            <b>Адрес:</b> 185035, Республики Карелия, г. Петрозаводск,&nbsp; ул.Андропова, д. 2,&nbsp; офис 127<br>
                            <br>
                            <b>Тел</b>: (814 2) 77 28 64<br>
                            <br>
                            <b>E-mail</b>: <a class="nl" href="mailto:spp.rk@onego.ru">spp.rk@onego.ru</a>
                        </p>

                        <p>&nbsp;</p>
                    </td>
                </main>

                <div class='modal' id='x1'></div>

                @include('events')
            </div>

            @include('svg')

            <script src="js/appp.js"></script>

            <script src="js/events.js"></script>
    </body>
</html>
