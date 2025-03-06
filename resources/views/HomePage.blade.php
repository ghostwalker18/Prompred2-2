<!DOCTYPE html>
<html lang="ru">

    @include('head')

    <body>

        <div class='wrapper'>
        
	    @include('header')
            
            <div class="page__now">
            
                @include('toggle')

                <h3>Новости</h3>
                
                <div class=" empty"></div>
            </div>
            <div class="content__wrapper">
            
            	@include('navbar')
                
                <main style="background-color: #c7ddf2;">
                    <div class="news__1" style="background: none;">

                        <?php
                        foreach ($articles as $article) {
                            echo "<div class='news' style='margin: 20px;'>";
                            echo "<div class='news__rect'>$article->a_title</div>";
                            echo "<time class='news__date'>$article->a_date</time>";
                            echo "<p>$article->a_text</p>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </main>
                
                @include('events')
            </div>

            <footer>
            
                <div class="ds">
                    <img src="{{ asset('images/garant__logo.png') }}" class="garant">
                </div>
                
                @include('goToPage')
                
                <div class="petr__1">
                	<img src="{{ asset('images/Petr1.png') }}" class="garant">
                </div>
            </footer>
        </div>
        
        @include('svg')
        
        <script src="js/appp.js"></script>
    </body>
</html>
