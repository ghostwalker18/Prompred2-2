<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Article;

use WithPagination;

function getMyDataForEvents()
{
    $articles = Article::query()->paginate(6, ['a_date', 'a_text', 'a_title']);

    //$dates = Article::query()->where()
    //$date = DB::select("select CURRENT_DATE() as DATE");

    //$currentDate = date("d.m.Y");

    $year = date("Y");

    $day = date("w", mktime(0, 0, 0, date("m"), date("d"), date("Y")));

    $month = date("n");

    $monthes = array(
        1 => 'Январь', 2 => 'Февраль', 3 => 'Март',
        4 => 'Апрель', 5 => 'Май', 6 => 'Июнь',
        7 => 'Июль', 8 => 'Август', 9 => 'Сентябрь',
        10 => 'Октябрь', 11 => 'Ноябрь',
        12 => 'Декабрь'
    );
    // получаем название месяца из массива
    $name_month = $monthes[$month];

    $paginationTheme = 'bootstrap';

    $events = DB::table('article')->where('a_date', '>=', "$year-$month-1")->where('a_date', '<=', "$year-$month-30")->pluck('a_date')->toArray();;
    $info = array('articles' => $articles, 'year' => $year, 'name_month' => $name_month, 'month' => $month, 'events' => $events);

    return $info;
}

class AppController extends Controller
{

    public function find()
    {
        return view('Finding', getMyDataForEvents());
    }

    public function welcome()
    {
        return view('welcome');
    }
    public function prompred()
    {
        return view('PromPred', getMyDataForEvents());
    }

    public function mailto()
    {
        return view('MailTo', getMyDataForEvents());
    }

    public function spp1()
    {

        return view('Spp1', getMyDataForEvents());
    }

    public function spp2()
    {

        return view('Spp2', getMyDataForEvents());
    }

    public function spp3()
    {
        return view('Spp3', getMyDataForEvents());
    }

    public function spp4()
    {
        return view('Spp4', getMyDataForEvents());
    }
    public function spp5()
    {
        return view('Spp5', getMyDataForEvents());
    }
    public function spp6()
    {
        return view('Spp6', getMyDataForEvents());
    }
    public function spp7()
    {
        return view('Spp7', getMyDataForEvents());
    }
    public function spp8()
    {
        return view('Spp8', getMyDataForEvents());
    }
    public function spp9()
    {
        return view('Spp9', getMyDataForEvents());
    }
    //  контроллеры ссылок подвального уровня
    public function link11()
    {
        return view('Spp1-links/link1', getMyDataForEvents());
    }
    public function link12()
    {
        return view('Spp1-links/link2', getMyDataForEvents());
    }
    public function link111()
    {
        return view('Spp1-links/Spp1-link1-links/link1', getMyDataForEvents());
    }
    public function link112()
    {
        return view('Spp1-links/Spp1-link1-links/link2', getMyDataForEvents());
    }
    public function link113()
    {
        return view('Spp1-links/Spp1-link1-links/link3', getMyDataForEvents());
    }

    public function link121()
    {
        return view('Spp1-links/Spp1-link2-links/link1', getMyDataForEvents());
    }
    public function link122()
    {
        return view('Spp1-links/Spp1-link2-links/link2', getMyDataForEvents());
    }
    public function link123()
    {
        return view('Spp1-links/Spp1-link2-links/link3', getMyDataForEvents());
    }

    public function link1211()
    {
        return view('Spp1-links/Spp1-link2-links/Spp1-link2-links-link1/link1', getMyDataForEvents());
    }

    public function link31()
    {
        return view('Spp3-links/link1', getMyDataForEvents());
    }
    public function link32()
    {
        return view('Spp3-links/link2', getMyDataForEvents());
    }
    public function link33()
    {
        return view('Spp3-links/link3', getMyDataForEvents());
    }
    public function link34()
    {
        return view('Spp3-links/link4', getMyDataForEvents());
    }
    public function link35()
    {
        return view('Spp3-links/link5', getMyDataForEvents());
    }
    public function link36()
    {
        return view('Spp3-links/link6', getMyDataForEvents());
    }
    public function link37()
    {
        return view('Spp3-links/link7', getMyDataForEvents());
    }
    public function link311()
    {
        return view('Spp3-links/Spp3-link1-links/link1', getMyDataForEvents());
    }
    public function link312()
    {
        return view('Spp3-links/Spp3-link1-links/link2', getMyDataForEvents());
    }
    public function link313()
    {
        return view('Spp3-links/Spp3-link1-links/link3', getMyDataForEvents());
    }
    public function link314()
    {
        return view('Spp3-links/Spp3-link1-links/link4', getMyDataForEvents());
    }
    public function link315()
    {
        return view('Spp3-links/Spp3-link1-links/link5', getMyDataForEvents());
    }
    public function link316()
    {
        return view('Spp3-links/Spp3-link1-links/link6', getMyDataForEvents());
    }
    public function link317()
    {
        return view('Spp3-links/Spp3-link1-links/link7', getMyDataForEvents());
    }
    public function link318()
    {
        return view('Spp3-links/Spp3-link1-links/link8', getMyDataForEvents());
    }
    public function link51()
    {
        return view('Spp5-links/link1', getMyDataForEvents());
    }
    public function link52()
    {
        return view('Spp5-links/link2', getMyDataForEvents());
    }
    public function link53()
    {
        return view('Spp5-links/link3', getMyDataForEvents());
    }
    public function link54()
    {
        return view('Spp5-links/link4', getMyDataForEvents());
    }
    public function link55()
    {
        return view('Spp5-links/link5', getMyDataForEvents());
    }
    public function link56()
    {
        return view('Spp5-links/link6', getMyDataForEvents());
    }

    public function link61()
    {
        return view('Spp6-links/link1', getMyDataForEvents());
    }
    public function link62()
    {
        return view('Spp6-links/link2', getMyDataForEvents());
    }
    public function link63()
    {
        return view('Spp6-links/link3', getMyDataForEvents());
    }
    public function link64()
    {
        return view('Spp6-links/link4', getMyDataForEvents());
    }
    public function link65()
    {
        return view('Spp6-links/link5', getMyDataForEvents());
    }
    public function link66()
    {
        return view('Spp6-links/link6', getMyDataForEvents());
    }

    public function link71()
    {
        return view('Spp7-links/link1', getMyDataForEvents());
    }
    public function link72()
    {
        return view('Spp7-links/link2', getMyDataForEvents());
    }
    public function link73()
    {
        return view('Spp7-links/link3', getMyDataForEvents());
    }
    public function link74()
    {
        return view('Spp7-links/link4', getMyDataForEvents());
    }
    public function link75()
    {
        return view('Spp7-links/link5', getMyDataForEvents());
    }
    public function link76()
    {
        return view('Spp7-links/link6', getMyDataForEvents());
    }
    public function link77()
    {
        return view('Spp7-links/link7', getMyDataForEvents());
    }
    public function link78()
    {
        return view('Spp7-links/link8', getMyDataForEvents());
    }
    public function link79()
    {
        return view('Spp7-links/link9', getMyDataForEvents());
    }



    public function link91()
    {
        return view('Spp9-links/link1', getMyDataForEvents());
    }
    public function link92()
    {
        return view('Spp9-links/link2', getMyDataForEvents());
    }
    public function link93()
    {
        return view('Spp9-links/link3', getMyDataForEvents());
    }
    public function link94()
    {
        return view('Spp9-links/link4', getMyDataForEvents());
    }
    public function link95()
    {
        return view('Spp9-links/link5', getMyDataForEvents());
    }
    public function link96()
    {
        return view('Spp9-links/link6', getMyDataForEvents());
    }
    public function link97()
    {
        return view('Spp9-links/link7', getMyDataForEvents());
    }
    public function link98()
    {
        return view('Spp9-links/link8', getMyDataForEvents());
    }
    public function link99()
    {
        return view('Spp9-links/link9', getMyDataForEvents());
    }
}
