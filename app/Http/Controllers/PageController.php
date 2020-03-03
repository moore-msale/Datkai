<?php

namespace App\Http\Controllers;

use App\AboutUs;
use App\DatkaiSetting;
use App\MainPage;
use App\News;
use App\Partner;
use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $main = MainPage::orderBy('created_at','desc')->first();
        $settings = DatkaiSetting::orderBy('created_at','desc')->first();
        $products = Product::where('hit','!=',0)->get();
        $partners = Partner::all();
        $news = News::all();
        return view('pages.main')->with('main',$main)->with('settings',$settings)->with('products',$products)->with('partners',$partners)->with('news',$news);
    }
    public function catalog(){
        $settings = DatkaiSetting::orderBy('created_at','desc')->first();
        $products = Product::all();
        return view('pages.catalog')->with('settings',$settings)->with('products',$products);
    }
    public function aboutUs(){
        $about = AboutUs::orderBy('created_at','desc')->first();
        $settings = DatkaiSetting::orderBy('created_at','desc')->first();
        return view('pages.about_us')->with('about',$about)->with('settings',$settings);
    }
    public function innerProduct($id){
        $settings = DatkaiSetting::orderBy('created_at','desc')->first();
        $product = Product::find($id);
        return view('pages.inner_product')->with('settings',$settings)->with('product',$product);
    }
    public function news(){
        $settings = DatkaiSetting::orderBy('created_at','desc')->first();
        $news = News::orderBy('created_at','desc')->get();
        return view('pages.news')->with('news',$news)->with('settings',$settings);
    }
    public function innerNews($id){
        $settings = DatkaiSetting::orderBy('created_at','desc')->first();
        $news = News::find($id);
        return view('pages.inner_news')->with('news',$news)->with('settings',$settings);
    }
}
