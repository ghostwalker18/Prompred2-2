<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Союз промышленников и предпринимателей (работадателей) республики Карелия">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <title>PromPred</title>
</head>

<body>

    <div class='wrapper'>
        <header>
        
            <div class="logo__wrapper">
            
                <img class="logo" src="{{ asset('images/titleShadCoder.png')}}">
                
                <div class="title__wrapper">
                
                    <h3>СОЮЗ ПРОМЫШЛЕННИКОВ</h3>
                    
                    <h3>И ПРЕДПРИНИМАТЕЛЕЙ (РАБОТАДАТЕЛЕЙ)</h3>
                    
                    <h3>РЕСПУБЛИКИ КАРЕЛИЯ</h3>
                </div>
            </div>
            
            <div class="header__menu">
            
                <a href="/"><span class="lnr lnr-home"></span></a>
                
                <a href="mailto:koposov@cs.petrsu.ru"><span class="lnr lnr-envelope"></span></a>
                
                <a href="/Find"> <span class="lnr lnr-magnifier"></span> </a>
            </div>
        </header>
        
        <div class="page__now">
        
            <div class="menu__toggle" id="nav__toggle" style="display: flex;">
            
                <div></div>
                
                <p>Меню</p>
            </div>

            <h3>Новости</h3>
            
            <div class=" empty"></div>
        </div>
        <div class="content__wrapper">
            <nav id="nav">
            
                <div class="nav__header">
                    <h3>Навигация</h3>
                </div>

                <div class="nav__main">
                    <ul>
                    
                        <a href="">
                            <li>
                                <div class="triangle"></div>
                                <a href="/Spp1">Что такое СПП (р) РК?</a>
                            </li>
                        </a>
                        
                        <a href="">
                            <li>
                                <div class="triangle"></div>
                                <a href="/Spp2">Кто входит в СПП(Р) РК?</a>
                            </li>
                        </a>
                        
                        <a href="">
                            <li>
                                <div class="triangle"></div>
                                <a href="/Spp3">Деятельность союза</a>
                            </li>
                        </a>
                        
                        <a href="">
                            <li>
                                <div class="triangle"></div>
                                <a href="https://rspp.ru/">РСПП</a>
                            </li>
                        </a>
                        
                        <a href="">
                            <li>
                                <div class="triangle"></div>
                                <a href="">Предложения для членов союза</a>
                            </li>
                        </a>
                        
                        <a href="">
                            <li>
                                <div class="triangle"></div>
                                <a href="">Представительство МСО ПАУ в РК</a>
                            </li>
                        </a>
                        
                        <a href="">
                            <li>
                                <div class="triangle"></div>
                                <a href="">Конференции, семинары, выставки</a>
                            </li>
                        </a>
                        
                        <a href="">
                            <li>
                                <div class="triangle"></div><a href="">Контакты</a>
                            </li>
                        </a>
                        
                        <a href="">
                            <li>
                                <div class="triangle"></div><a href="">Антикризисная политика</a>
                            </li>
                        </a>
                    </ul>
                    
                    <div class="deliner"></div>
                    
                    <div class="index">
                    
                        <p> 185035, Республика Карелия,<br>
                            г.Петрозаводск, ул.Андропова, д.1, офис 127<br>
                            тел.: (814 2) 77-28-64<br>
                            e-mail: spp.rk@onego.ru
                        </p>
                    </div>
                    
                    <div class="deliner"></div>
                    
                    <div class="created__by">
                        <p> Дизайн<br>
                            и программирование<br>
                            сайта<br>
                            WebLab
                        </p>
                    </div>
                </div>
            </nav>
            
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
            
            <aside>
            
                <div class="events">
                
                    <div class="events-header">
                        <h3>Мероприятия</h3>
                    </div>
                    
                    <div class="events-body">
                    
                        <div class="events-date">
                        
                            <?php
                            echo "<h4> $name_month, $year</h4>";
                            ?>
                            
                            <div class="date-deliner"></div>
                        </div>
                        
                        <table>
                        
                            <thead>
                                <td>пн</td>
                                <td>вт</td>
                                <td>ср</td>
                                <td>чт</td>
                                <td>пт</td>
                                <td class="weekend">сб</td>
                                <td class="weekend">вс</td>
                            </thead>
                            
                            <tbody>
                                <?php
                                echo "<tr>";

                                if (date("w", strtotime("$year-$month-1")) == 0) {
                                    for ($i = 0; $i < 6; $i++) {
                                        echo "<td></td>";
                                    }
                                } else {
                                    for ($i = 0; $i < (date("w", strtotime("$year-$month-1"))) - 1; $i++) {
                                        echo "<td></td>";
                                    }
                                }

                                for ($i = 1; $i <= date('t'); $i++) {
                                    $day = date("w", strtotime("$year-$month-$i"));
                                    if ($i == date('d')) {
                                        echo "<td class='today'>$i</td>";
                                    } else {
                                        if ($day == 0) {
                                            echo "<td class='weekend'>$i</td>";
                                            echo "</tr>";
                                        } else 
                                        if (($day == 6)) {
                                            echo "<td class='weekend'>$i</td>";
                                        } else
                                         if (in_array("$year-0$month-$i", $events)) {
                                            $date = "$year-0$month-$i";
                                            echo "<td class='active-date'><a href='/aboutEvent?date=$date'>$i</a></td>";
                                        } else {
                                            echo "<td >$i</td>";
                                        }
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                        
                        <div class='events-button'>Все Мероприятия</div>
                    </div>
                </div>
            </aside>
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
    
    <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                <feComposite in="SourceGraphic" in2="goo" operator="atop" />
            </filter>
        </defs>
    </svg>
    
    <script src="js/appp.js"></script>
</body>
</html>
