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
        return view(view: 'welcome');
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

    public function test()
    {
        return view(view: 'test');
    }
}
