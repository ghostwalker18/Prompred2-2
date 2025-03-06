<!DOCTYPE html>
<html lang="ru">

    @include('head')

    <body>
        <div class='wrapper' >
        
            @include('header')
            
            <div class="page__now">
            
                <div class="empty"></div>
                
                <h3>Панель администрирования</h3>
                
                <div class="empty"></div>
            </div>
            
            <div class="content__wrapper">
                <main style="display:flex; flex-direction: column; align-items: center; height: 100%">
                
            	    <h3 style="padding: 10px;"><a style="font-size: x-large" href="/addNews">Добавить новость</a></h3>
            	    
                    <h3 style="padding: 10px;"><a style="font-size: x-large" href="/allNews">Редактировать новости</a></h3>
                    
                    <h3 style="padding: 10px;"><a style="font-size: x-large" href="/addNews">Добавить мероприятие</a></h3>
                    
                    <h3 style="padding: 10px;"><a style="font-size: x-large" href="/allNews">Редактировать мероприятия</a></h3>
                    
                    <h3 style="padding: 10px;"><a style="font-size: x-large" href="/addDocument">Добавить документ</a></h3>
                    
                    <h3 style="padding: 10px;"><a style="font-size: x-large" href="/allDocuments">Документы</a></h3>
                    
                    <h3 style="padding: 10px;"><a style="font-size: x-large" href="/changeContacts">Изменить данные организации</a></h3>
                    
                    <h3 style="padding: 10px;"><a style="font-size: x-large" href="">Управление хостингом</a></h3>
                    
                    <h3 style="padding: 10px;"><a style="font-size: x-large" href="/changeAdminPassword">Сменить пароль</a></h3>
                </main>     
            </div>
            
            <footer style="margin-top: auto">
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
