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
    <link href="css/enter.css" rel="stylesheet" type="text/css">
    <title>PromPred</title>


</head>

<body>

    <div class='wrapper'>
        @include('header')
        <div class="page__now">
            <div class="empty"></div>
            <h3>Вход</h3>
            <div class="empty"></div>
        </div>
        <div class="content__wrapper">
            <main>
                <div class="input_wrapper">
                    <div class="enterForm">
                        <form method="" action="/Enter" id="eForm">
                            <input type="text" name="login" placeholder="Логин" id="formInput">
                            <input type="password" name="password" placeholder="Пароль" id="formInput">
                            <button class="formSubmit" type="submit">Войти</button>
                        </form>
                    </div>
                </div>
            </main>
            <aside></aside>
        </div>
        <footer>
            <div class="ds"><img src="images/garant__logo.png" class="garant"></div>
            <div class="footer__menu">
            </div>
            <div class="petr__1"><img src="images/Petr1.png"></di>
        </footer>
    </div>
    <script src="js/appp.js"></script>
</body>

</html>