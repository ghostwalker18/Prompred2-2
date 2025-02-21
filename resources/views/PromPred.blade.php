<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Союз промышленников и предпринимателей (работадателей) республики Карелия">
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
        <title>СПП(Р) РК</title>
    </head>

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
                
                <div class="footer__menu">
                    <a class="pageControler" style="display: flex; margin: 0 2vmin;" href={{$articles->previousPageUrl()}}>
                        <p style="margin: 0 2vmin;">Предыдущая</p>
                        <div class="triangle"></div>
                    </a>
                    
                    <a class="pageControler" style="display: flex;text-decoration:none;" href={{$articles->url(1)}}>
                        <p>1</p>
                    </a>

                    <p style="color: white;">...{{$articles->currentPage()}}...</p>
                    
                    <a class="pageControler" style="display: flex;text-decoration:none;" href={{$articles->url($articles->lastPage())}}>
                        <p>{{$articles->lastPage()}}</p>
                    </a>
                    
                    <a class="pageControler" style="display: flex;" href={{$articles->nextPageUrl()}}>
                    
                        <div class="two triangle"></div>
                        
                        <p style="margin: 0 2vmin;">Следующая</p>
                    </a>
                </div>
                
                <div class="petr__1"><img src="{{ asset('images/Petr1.png') }}"></div>
            </footer>
        </div>
        
        @include('svg')
        
        <script src="js/appp.js"></script>
    </body>
</html>
