<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Союз промышленников и предпринимателей (работадателей) республики Карелия">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link href="css/app.css" rel="stylesheet" type="text/css">
    <link href="css/find.css" rel="stylesheet" type="text/css">
    <title>PromPred</title>


</head>

<body>

    <div class='wrapper'>
        <?php include('header.blade.php'); ?>
        <div class="page__now">
            <div class="menu__toggle" id="nav__toggle">
                <div></div>
            </div>
            <h3>Поиск</h3>
            <div class="empty"></div>
        </div>
        <div class="content__wrapper">
            <?php include('navbar.blade.php'); ?>
            <main>
                <div class="input_wrapper">
                    <div class="find">
                        <form action="">
                            <input type="search" class="search" placeholder="Начните ввод...">
                            <button class="submit" type="submit">
                                <span class="lnr lnr-magnifier ss"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </main>
            <aside></aside>
        </div>
        <footer>
            <div class="ds"><img src="images/garant__logo.png" class="garant"></div>
            <div class="footer__menu">
            </div>
            <div class="petr__1"><img src="images/Petr1.png"></di>

        </footer>

    </div>
    <?php include('svg.blade.php'); ?>
    <script src="js/appp.js"></script>