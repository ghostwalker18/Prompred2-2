<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use App\Models\Article;
use WithPagination;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

function getMyDataForEvents($countOfPagination, $keyword = null)
{ 
    if(isset($keyword))
        $articles = Article::where("a_title", "LIKE", "%" . $keyword . "%")->paginate($perPage = $countOfPagination, $columns = ['a_date', 'a_text', 'a_title']);
    else
        $articles = Article::query()->paginate($countOfPagination, ['a_date', 'a_text', 'a_title']);
        
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

class AppController extends BaseController
{
    public function goToPage(Request $request)
    {
    	return redirect()->to('/?page='.$request->input('pageNumber'));
    }
    
    public function find()
    {
        return view('Finding', getMyDataForEvents(6));
    }
    
    
    public function aboutEvent(Request $request)
    {
        $date = $request->date;

        $event = Article::where('a_date', $date)->get();
        return view('aboutEvent', ['event' => $event]);
    }

    public function search(Request $request)
    {
        return redirect()->route('showNews', ['nameNews' => $request->input('text')]);
    }

    public function showNews(Request $request, $nameNews)
    {
        return view('HomePage', getMyDataForEvents(6, $nameNews));
    }

    public function adminEnter()
    {
        return view('AdminEnter');
    }
   
    public function adminDashboard()
    {
    	return view('AdminDashboard');
    }
    
    public function allNews()
    {
        return view('allNews', getMyDataForEvents(3));
    }
    
    public function addNews()
    {
        return view('AddNews');
    }
    
    public function publishNews(Request $request)
    {
    	$news = $request->validate([
            'NewsName' => ['required'],
            'NewsDate' => ['required'],
            'NewsContent' => ['required']
        ]);
        return redirect()->to('/admin');
    }
    
    public function homePage()
    {
        return view('HomePage', getMyDataForEvents(6));
    }

    public function mailto()
    {
        return view('MailTo');
    }

    public function about()
    {

        return view('About');
    }

    public function members()
    {
        return view('Members');
    }

    public function activity()
    {
        return view('Activity');
    }

    public function social()
    {
        return view('Social');
    }
    
    public function offering()
    {
        return view('Offering');
    }
    
    public function delegation()
    {
        return view('Delegation');
    }
    
    public function conferencies()
    {
        return view('Conferencies');
    }
    
    public function contacts()
    {
        return view('Contacts');
    }
    
    public function policy()
    {
        return view('Policy');
    }
    
    //  контроллеры ссылок подвального уровня
    public function link11()
    {
        return view('Spp1-links/link1');
    }
    
    public function link12()
    {
        return view('Spp1-links/link2');
    }
    
    public function link111()
    {
        return view('Spp1-links/Spp1-link1-links/link1');
    }
    
    public function link112()
    {
        return view('Spp1-links/Spp1-link1-links/link2');
    }
    
    public function link113()
    {
        return view('Spp1-links/Spp1-link1-links/link3');
    }

    public function link121()
    {
        return view('Spp1-links/Spp1-link2-links/link1');
    }
    
    public function link122()
    {
        return view('Spp1-links/Spp1-link2-links/link2');
    }
    
    public function link123()
    {
        return view('Spp1-links/Spp1-link2-links/link3');
    }

    public function link1211()
    {
        return view('Spp1-links/Spp1-link2-links/Spp1-link2-links-link1/link1');
    }

    public function link31()
    {
        return view('Spp3-links/link1');
    }
    
    public function link32()
    {
        return view('Spp3-links/link2');
    }
    
    public function link33()
    {
        return view('Spp3-links/link3');
    }
   
    public function link34()
    {
        return view('Spp3-links/link4');
    }
    
    public function link35()
    {
        return view('Spp3-links/link5');
    }
    
    public function link36()
    {
        return view('Spp3-links/link6');
    }
    
    public function link37()
    {
        return view('Spp3-links/link7', (6));
    }
    
    public function link311()
    {
        return view('Spp3-links/Spp3-link1-links/link1');
    }
    
    public function link312()
    {
        return view('Spp3-links/Spp3-link1-links/link2');
    }
    
    public function link313()
    {
        return view('Spp3-links/Spp3-link1-links/link3');
    }
    
    public function link314()
    {
        return view('Spp3-links/Spp3-link1-links/link4');
    }
    
    public function link315()
    {
        return view('Spp3-links/Spp3-link1-links/link5');
    }
    
    public function link316()
    {
        return view('Spp3-links/Spp3-link1-links/link6');
    }
    
    public function link317()
    {
        return view('Spp3-links/Spp3-link1-links/link7');
    }
    
    public function link318()
    {
        return view('Spp3-links/Spp3-link1-links/link8');
    }
    
    public function link51()
    {
        return view('Spp5-links/link1');
    }
    
    public function link52()
    {
        return view('Spp5-links/link2');
    }
    
    public function link53()
    {
        return view('Spp5-links/link3');
    }
    
    public function link54()
    {
        return view('Spp5-links/link4');
    }
    
    public function link55()
    {
        return view('Spp5-links/link5');
    }
    
    public function link56()
    {
        return view('Spp5-links/link6');
    }

    public function link61()
    {
        return view('Spp6-links/link1');
    }
    
    public function link62()
    {
        return view('Spp6-links/link2');
    }
    
    public function link63()
    {
        return view('Spp6-links/link3');
    }
    
    public function link64()
    {
        return view('Spp6-links/link4');
    }
    
    public function link65()
    {
        return view('Spp6-links/link5');
    }
    
    public function link66()
    {
        return view('Spp6-links/link6');
    }

    public function link71()
    {
        return view('Spp7-links/link1');
    }
    
    public function link72()
    {
        return view('Spp7-links/link2');
    }
    
    public function link73()
    {
        return view('Spp7-links/link3');
    }
    
    public function link74()
    {
        return view('Spp7-links/link4');
    }
    
    public function link75()
    {
        return view('Spp7-links/link5');
    }
    
    public function link76()
    {
        return view('Spp7-links/link6');
    }
    
    public function link77()
    {
        return view('Spp7-links/link7');
    }
    
    public function link78()
    {
        return view('Spp7-links/link8');
    }
    
    public function link79()
    {
        return view('Spp7-links/link9');
    }

    public function link91()
    {
        return view('Spp9-links/link1');
    }
    public function link92()
    {
        return view('Spp9-links/link2');
    }
    
    public function link93()
    {
        return view('Spp9-links/link3');
    }
    
    public function link94()
    {
        return view('Spp9-links/link4');
    }
    
    public function link95()
    {
        return view('Spp9-links/link5');
    }
    
    public function link96()
    {
        return view('Spp9-links/link6');
    }
    
    public function link97()
    {
        return view('Spp9-links/link7');
    }
    
    public function link98()
    {
        return view('Spp9-links/link8');
    }
    
    public function link99()
    {
        return view('Spp9-links/link9');
    }
}
