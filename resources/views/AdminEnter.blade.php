<!DOCTYPE html>
<html lang="ru">

    @include('head')

    <body>
    
    	<link href="{{ asset('css/enter.css') }}" rel="stylesheet" type="text/css">

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
                            <form method="" action="/authenticateAdmin" id="eForm">
                                <input type="text" name="login" placeholder="Логин" id="formInput">
                                <input type="text" name="password" placeholder="Пароль" id="formInput">
                                <button class="formSubmit" type="submit">Войти</button>
                            </form>
                        </div>
                    </div>
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
