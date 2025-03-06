<!DOCTYPE html>
<html lang="ru">

    @include('head')

    <body>

        <div class='wrapper'>
        
            @include('header')
            
            <div class="page__now">
                <div class="menu__toggle" id="nav__toggle">
                    <div></div>
                </div>

                <h3>Обратная связь</h3>
                
                <div class="empty"></div>
            </div>
            
            <div class="content__wrapper">
            
                @include('navbar')

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
        
        @include('svg')
        
        <script src="js/appp.js"></script>
    </body>
</html>
