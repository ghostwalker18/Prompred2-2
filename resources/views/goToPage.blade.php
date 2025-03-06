<div style="display:flex; flex-direction:column; width: 100%; align-items: center";>

    <script>

        function toggleForm(){
            let form = document.getElementById("pagerForm")
            if(form.style.visibility == 'visible')
                form.style.visibility = 'hidden'
            else
                form.style.visibility = 'visible'
        }
    </script>

    <form id="pagerForm" form-method = "" action = "/goToPage">

        <p style="padding-bottom: 10px">Укажите страницу:</p>

        <input type="text" name="pageNumber">

        <div style="display: flex; align-items: center;  justify-content: center; padding-top: 10px">

            <button type="button" style="margin-left: 5px; margin-right: 5px; font-size: 1.8vmin;" onClick="toggleForm()">
                Отмена
            </button>

            <button type="submit" style="margin-left: 5px; margin-right: 5px; font-size: 1.8vmin;">
                Перейти
            </button>
        </div>
    </form>

    <div class="footer__menu">

        <a class="pageControler" style="display: flex; margin: 0 2vmin;" href={{ $articles->previousPageUrl() }}>

            <p style="margin: 0 2vmin;">Предыдущая</p>

            <div class="triangle"></div>
        </a>
                        
        <a class="pageControler" style="display: flex;text-decoration:none;" href={{$articles->url(1)}}>
            <p>1</p>
        </a>

        <p style="color: white;" onClick="toggleForm()">...{{$articles->currentPage()}}...</p>
                        
        <a class="pageControler" style="display: flex;text-decoration:none;" href={{ $articles->url($articles->lastPage()) }}>
            <p>{{ $articles->lastPage() }}</p>
        </a>
                        
        <a class="pageControler" style="display: flex;" href={{ $articles->nextPageUrl() }}>
                        
            <div class="two triangle"></div>
                            
            <p style="margin: 0 2vmin;">Следующая</p>
        </a>
    </div>
</div>