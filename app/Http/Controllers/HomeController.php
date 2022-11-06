<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Page;
use App\Models\Category;
use App\Models\Banner;
use App\Models\Portfolio;
use App\Models\OtherText;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Cache;
class HomeController extends Controller
{
    public function index(Request $request)
    {
        //multilanguage

        // dd(Cache::get('locale'));
    
        if(!IS_NULL(Cache::get('locale'))){
            //if choose locale, use locale
            $lang = Cache::get('locale');
        }else{
            //if not, use default detect
            $lang = $this->detectBrowserLang();
        }
        //load articles data
        $data['articles'] = Article::where('lang',$lang)->get();
        //load posts data
        $data['pages'] = Page::where('lang',$lang)->get();
        //load categories data
        $data['categories'] = Category::where('lang',$lang)->get();
        //load banner data
        $data['banners'] = Banner::where('lang',$lang)->get();
        //load portfolio data
        $data['portfolios'] = Portfolio::where('lang',$lang)->get();
        //load other text
        $data['other_text'] = OtherText::where('lang',$lang)->get()->keyBy('alias');

        //load now data
        $data['lang'] = $lang;
        // dd($data);
        return view('front/index', $data);
    }

    public function ajaxLangChange(Request $request){
        // dd($request->lang);
        $lang = Cache::put('locale', $request->lang, 60);

        // dd(Cache::get('locale'));
        return $lang;
    }

    protected function detectBrowserLang(){
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 4);

        if (preg_match("/zh/i", $lang)){
            return 'tw';  
        }else if (preg_match("/en/i", $lang)){ 
            return 'en';
        }else if (preg_match("/ja/i", $lang)){
            return 'jp';
        }else{
            return 'tw';
        }
    }

    public function insertDefaultDataIntoDB(Request $request){
        for($i=1;$i<=20;$i++){
            $article = new Portfolio;
            $article->title = '案例'.$i;
            $article->content = '案例敘述案例敘述案例敘述案例敘述案例敘述案例敘述案例敘述案例敘述案例敘述'.$i;
            $article->picture = 'front/img/brand-ori.jpg';
            $article->order = 0;
            $article->lang = 'tw';
            $article->alias = 'article'.$i;
            $article->created_at = now();
            $article->updated_at = now();
            $article->save();
        }
    }
}
