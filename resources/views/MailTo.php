<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Союз промышленников и предпринимателей (работадателей) республики Карелия">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link href="css/app.css" rel="stylesheet" type="text/css">
    <link href="css/mail.css" rel="stylesheet" type="text/css">
    <title>PromPred</title>
</head>

<body>

    <div class='wrapper'>
    
        <?php include('header.blade.php'); ?>
        
        <div class="page__now">
            <div class="menu__toggle" id="nav__toggle">
                <div></div>
            </div>

            <h3>Обратная связь</h3>
            
            <div class="empty"></div>
        </div>
        
        <div class="content__wrapper">
        
            <?php include('navbar.blade.php'); ?>

            <main>

                <div class="mail-wrapper">
                
                    <div class="mail-back"></div>
                    
                    <div class="mail-box">
                        <div class="name-wrap">
                        
                            <div class="name">
                                <h3>Имя*</h3>
                                <input type="text">
                            </div>
                            
                            <div class="surname">
                                <h3>Фамилия*</h3>
                                <input type="text">
                            </div>
                        </div>
                        
                        <div class="email-wrap">
                        
                            <h3>Электронная почта*</h3>
                            
                            <input type="email" class="email-inp">

                            <div class="message-wrap">
                                <h3>Сообщение</h3>

                                <textarea title="Начните ввод" rows="5" cols="33" class="message-inp"></textarea>
                            </div>
                        </div>
                        
                        <div class="send-button">
                            <button type="submit">Отправить</button>
                        </div>
                    </div>
            </main>
        </div>
        
        <footer>
        
            <div class="ds"><img src="images/garant__logo.png" class="garant"></div>
            
            <div class="footer__menu">
            
                <h3>Назад</h3>
                
                <div class="triangle"></div>
                
                <a>12</a>
                
                <div class="two triangle"></div>
                
                <h3>Вперед</h3>
            </div>
            
            <div class="petr__1">
            	<img src="images/Petr1.png">
            </di>
        </footer>
    </div>
    
    <?php include('svg.blade.php'); ?>
    
    <script src="js/appp.js"></script>
