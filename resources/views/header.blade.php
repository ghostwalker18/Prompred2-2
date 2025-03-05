<header>

    <div class="logo__wrapper">
    
        <img class="logo" src='images/titleShadCoder.png'>
        
        <div class="title__wrapper">
        
            <h3>СОЮЗ ПРОМЫШЛЕННИКОВ</h3>
            
            <h3>И ПРЕДПРИНИМАТЕЛЕЙ (РАБОТАДАТЕЛЕЙ)</h3>
            
            <h3>РЕСПУБЛИКИ КАРЕЛИЯ</h3>
        </div>
    </div>
    
    <div class="header__menu">
    
        <a href="/"> <span class="lnr lnr-home"></span> </a>
        
        <a href="mailto:koposov@cs.petrsu.ru"> <span class="lnr lnr-envelope"></span> </a>
        
        <a href="/find"> <span class="lnr lnr-magnifier"></span> </a>
        
        <?php
            if(Auth::check()){
            	echo '<a style="font-size: large; padding-right: 10px;" href="/admin">Администрирование</a>';
            	echo '<a style="font-size: large" href="/logout">Выход</a>';
            }
        ?>
    </div>
</header>
