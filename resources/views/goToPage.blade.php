<div style="display:flex; flex-direction:column; width: 100%; align-items: center";>
    <form form method = "" action = "/goToPage" style="display:flex: flex-direction: column">
        <p>Укажите страницу:</p>
        <input type="text" name="pageNumber">
        <div style="display: flex; align-items: center">
            <button>
                Отмена
            </button>
            <button type="submit">
                Перейти
            </button>
        </div>
    </form>
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
</div>