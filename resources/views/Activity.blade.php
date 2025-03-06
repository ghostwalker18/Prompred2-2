<!DOCTYPE html>

<html lang="ru">

    @include('head')

    <body>

        <div class="popupa-wrapper off-wrap" id="popupa-wrapper"></div>

        <div class='wrapper'>

            @include('header')

            <div class="page__now">

                @include('toggle')

                <h3>Деятельность союза</h3>

                <div class="empty"></div>
            </div>

            <div class="content__wrapper">
  
                @include('navbar')

                <main>
                    <td rowspan="2" background="/support/images/bg_center.gif">

                        <!--название подраздела (если есть, если нет - сразу же начинается текст)-->
                        <p class="main"></p>

                        <p class="div">

                            <img border="0" src="/support/images/sd.gif" width="13" height="12" align="absmiddle"><a href="link31" class="nl">IV отчетно-перевыборная конференция</a><br>

                            <br>

                            <img border="0" src="/support/images/sd.gif" width="13" height="12" align="absmiddle"><a href="link32" class="nl">Бюро Правления СПП (р) РК</a><br>

                            <br>

                            <img border="0" src="/support/images/sd.gif" width="13" height="12" align="absmiddle"><a href="link33" class="nl">План работы СПП(р) РК</a><br>

                            <br>

                        </p>

                        <p class="main">

                            <b><a href="link34" class="nl">V Отчетно-выборное собрание Союза работодателей Республики Карелия</a></b>
                            <br>&nbsp;23.июня 2014 в 14 часов 30 минут в Большом зале Министерства экономического развития РК, г.Петрозаводск, ул.Андропова, 2/24, состоялось отчетно-выборное собрание Союза промышленников и предпринимателей (работодателей) Республики Карелия.

                            <br><br>
                        </p>

                        <p class="main">

                            <b><a href="link35" class="nl">Информация о продолжении деятельности некоммерческой организации</a></b>
                            <br>Информация о продолжении деятельности некоммерческой организации Союза промышленников и предпринимателей (работодателей) Республики Карелия

                            <br><br>
                        </p>

                        <p class="main">

                            <b><a href="link36" class="nl">V Отчетно-перевыборное собрание Союза работодателей Республики Карелия</a></b>
                            <br>15 марта 2010 года в 15 час. 00 мин. по адресу: 185035, Республика Карелия, г. Петрозаводск, ул. Андропова, д. 2, зал заседания (3-й этаж) состоится V отчетно-перевыборное собрание Карельского регионального некоммерческого объединения «Союз работодателей Республики Карелия».

                            <br><br>
                        </p>

                        <p class="main">

                            <b><a href="link37" class="nl">О сотрудничестве в сфере финансового оздоровления и банкротства неплатежеспособных организаций</a></b>


                            <br><br>
                        </p>
                    </td>
                </main>

                <div class='modal' id='x1'></div>

                @include('events')
            </div>

            @include('svg')

            <script src="js/appp.js"></script>

            <script src="js/events.js"></script>
        </div>
    </body>
</html>
