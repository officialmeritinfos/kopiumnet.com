<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;
use App\Models\Service;
use Illuminate\Http\Request;

class Home extends Controller
{
    //landing page
    public function landingPage()
    {
        $web= GeneralSetting::find(1);
        return view('home.home')->with([
            'siteName'      =>$web->name,
            'web'           =>$web,
            'pageName'      =>'Empowering your digital tomorrow',
            'services'      =>Service::where('status',1)->get()
        ]);
    }
    //about page
    public function about()
    {
        $web= GeneralSetting::find(1);
        return view('home.about')->with([
            'siteName'      =>$web->name,
            'web'           =>$web,
            'pageName'      =>'About Us'
        ]);
    }
    //services
    public function services()
    {
        $web= GeneralSetting::find(1);
        return view('home.services')->with([
            'siteName'      =>$web->name,
            'web'           =>$web,
            'pageName'      =>'Services we provide',
            'services'      =>Service::where('status',1)->get()
        ]);
    }
    //service detail
    public function serviceDetail($slug)
    {
        $service = Service::where('slug',$slug)->firstOrFail();
        $web= GeneralSetting::find(1);
        return view('home.service_detail')->with([
            'siteName'      =>$web->name,
            'web'           =>$web,
            'pageName'      =>$service->title,
            'service'       =>$service
        ]);
    }
    //frequently asked questions
    public function faqs()
    {
        $web= GeneralSetting::find(1);
        return view('home.faqs')->with([
            'siteName'      =>$web->name,
            'web'           =>$web,
            'pageName'      =>'Frequently Asked Questions'
        ]);
    }
    //portfolios
    public function portfolios()
    {
        $web= GeneralSetting::find(1);
        return view('home.portfolios')->with([
            'siteName'      =>$web->name,
            'web'           =>$web,
            'pageName'      =>'Our Portfolios'
        ]);
    }
    //products
    public function products()
    {
        $web= GeneralSetting::find(1);
        return view('home.products')->with([
            'siteName'      =>$web->name,
            'web'           =>$web,
            'pageName'      =>'Our Products'
        ]);
    }
    //products
    public function testimonials()
    {
        $web= GeneralSetting::find(1);
        return view('home.testimonials')->with([
            'siteName'      =>$web->name,
            'web'           =>$web,
            'pageName'      =>'Clients Testimonials'
        ]);
    }
    //team
    public function teams()
    {
        $web= GeneralSetting::find(1);
        return view('home.team')->with([
            'siteName'      =>$web->name,
            'web'           =>$web,
            'pageName'      =>'Our team'
        ]);
    }
    //terms of operation
    public function terms()
    {
        $web= GeneralSetting::find(1);
        return view('home.team')->with([
            'siteName'      =>$web->name,
            'web'           =>$web,
            'pageName'      =>'Our Terms of Operation'
        ]);
    }
    //contact
    public function contact()
    {
        $web= GeneralSetting::find(1);
        return view('home.contact')->with([
            'siteName'      =>$web->name,
            'web'           =>$web,
            'pageName'      =>'Contact Us'
        ]);
    }
    //book our service
    public function book()
    {
        $web= GeneralSetting::find(1);
        return view('home.booking')->with([
            'siteName'      =>$web->name,
            'web'           =>$web,
            'pageName'      =>'Book for our service',
            'services'      =>Service::where('status',1)->get()
        ]);
    }
}
