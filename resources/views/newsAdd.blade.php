<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Союз промышленников и предпринимателей (работадателей) республики Карелия">
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <link href="css/app.css" rel="stylesheet" type="text/css">
        <link href="css/find.css" rel="stylesheet" type="text/css">
        <link href="css/allNews.css" rel="stylesheet" type="text/css">
        <link href="css/add.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
        <title>СПП(Р) РК</title>
    </head>

    <body>

        <div class='wrapper'>
        
            @include('header')
            
            <div class="page__now">
                <div class="empty"></div>
                <h3>Новости и мероприятия</h3>
                <div class="empty"></div>
            </div>
            
            <div class="content__wrapper">
                <main>
                    <div class="input_wrapper">
                        <div class="adminBlock">
                            <form method="" action="#" id="addForm">
                            
                                <h2>Название</h2>
                                
                                <input type="text" name="NewsName" placeholder="Новая новость" id="formInput1" required class="NewsName">
                                
                                <time class='news__date'>Дата публикации</time>
                                
                                <input type="date" name="NewsDate" placeholder="2023-01-01" id="formInput2" required>
                                
                                <p>Текст</p>
                                
                                <textarea type="text" name="NewsContent" placeholder="На повестке дня..." id="formInput3"></textarea>
                                
                                <div class="check" style="padding: 0;">
                                
                                    <p style="margin-top: 2vmin; margin-left: 1vmin;">Мероприятие</p>
                                    
                                    <input type="checkbox" id="formInput4" style="margin-top: 2vmin;">
                                </div>
                                
                                <div class="check file" style="padding: 0;">
                                
                                    <p style="margin-top: 1.5vmin; margin-left: 1vmin;">Для добавления картинки</p>
                                    
                                    <input type="file" name="newsFile" style="margin-top: 1.5vmin; margin-left: 2vmin;">
                                </div>

                                <button class="formSubmit" type="submit">Опубликовать</button>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
            
            <footer>
            
                <div class="ds"><img src="images/garant__logo.png" class="garant"></div>
                
                <div class="footer__menu"></div>
                
                <div class="petr__1"><img src="images/Petr1.png"></div>
            </footer>
        </div>
        
        <script src="js/appp.js"></script>
    </body>
</html>
