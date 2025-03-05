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
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <title>СПП(Р) РК</title>
</head>

<body>
    <div class='wrapper'>
    
        @include('header')
        
        <div class="page__now">
            <div class="empty"></div>
            <h3>Панель администрирования</h3>
            <div class="empty"></div>
        </div>
        
        <div class="content__wrapper">
            <main style="display:flex; flex-direction: column; align-items: center; height: 100%">
		<h3 style="padding: 10px;"><a style="font-size: x-large" href="/addNews">Выложить новость</a></h3>
		<h3 style="padding: 10px;"><a style="font-size: x-large" href="/changeAdminPassword">Сменить пароль</a></h3>
            </main>     
        </div>
        
        <footer>
            <div class="ds"><img src="images/garant__logo.png" class="garant"></div>
            
            <div class="footer__menu"></div>
            
            <div class="petr__1">
            	<img src="images/Petr1.png">
            </div>
        </footer>
    </div>
    <script src="js/appp.js"></script>
</body>
</html>
