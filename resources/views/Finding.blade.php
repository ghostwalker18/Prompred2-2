<!DOCTYPE html>
<html lang="ru">

    @include('head')

    <body>
	<link href="{{ asset('css/find.css') }}" rel="stylesheet" type="text/css">
	
        <div class='wrapper'>
            @include('header')
            <div class="page__now">
                <div class="menu__toggle" id="nav__toggle">
                    <div></div>
                </div>
                <h3>Поиск</h3>
                <div class="empty"></div>
            </div>
            
            <div class="content__wrapper">
            
                @include('navbar')
                
                <main>
                    <div class="input_wrapper">
                        <div class="find">
                            <form method = "" action = "/search">
                                <input type="search" name = "text" class="search" placeholder="Начните ввод...">
                                <button class="submit" type="submit">
                                    <span class="lnr lnr-magnifier ss"></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
            
            <footer>
            
                <div class="ds">
                    <img src="images/garant__logo.png" class="garant">
                </div>
                
                <div class="footer__menu">
                </div>
                
                <div class="petr__1">
                    <img src="images/Petr1.png">
                </div>
            </footer>

        </div>
        
        @include('svg')
        
        <script src="js/appp.js"></script>
    </body>
</html>
