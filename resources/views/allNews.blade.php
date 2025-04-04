<!DOCTYPE html>
<html lang="ru">

    @include('head')

	<body>

	    <div class='wrapper'>
	    
		@include('header')
		
		<div class="page__now">
		    <div class="empty"></div>
		    
		    <h3>Редактировать новости</h3>
		    
		    <div class="empty"></div>
		</div>
		
		<div class="content__wrapper">
		    <main>		
		        <div class="input_wrapper">
		            <div class="adminBlock">
		                <div class="news__1" style="background: none;">
		                    <?php
		                    foreach ($articles as $article) {

		                        echo "<div class='news'>";
		                        echo "<div class='news__rect'>$article->a_title</div>";
		                        echo "<div class='newsSettings'>";
		                        echo "<form action='/newsAdd'>";
		                        echo "<button type='submit'><span class='lnr lnr-pencil'></span></button>";
		                        echo "</form>";
		                        echo "<form action='#'>";
		                        echo "<button type='submit'><span class='lnr lnr-cross'></span></button>";
		                        echo "</form>";
		                        echo "</div>";
		                        echo "<time class='news__date'>$article->a_date</time>";
		                        echo "<p>$article->a_text</p>";
		                        echo "</div>";
		                    }
		                    ?>
		                    
		                    <div class="menu">
		                    
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
		                </div>
		            </div>
		        </div>
		    </main>
		</div>
		
		<footer>
		
		    <div class="ds"><img src="images/garant__logo.png" class="garant"></div>
		    
		    <div class="footer__menu"></div>
		    
		    <div class="petr__1"><img src="images/Petr1.png"></di>
		</footer>
	    </div>
	    
	    <script src="js/appp.js"></script>
	</body>
</html>
