<?php

namespace App\Http\Controllers;

use App\About_detail;
use App\Banner_detail;
use App\Contact_heading;
use App\Contact_info;
use App\Conter;
use App\Faq;
use App\How_to_use;
use App\Logo;
use App\Payment;
use App\Plan_five;
use App\Plan_five_title;
use App\Plan_four;
use App\Plan_four_title;
use App\Plan_heading;
use App\Plan_one;
use App\Plan_one_title;
use App\Plan_seven;
use App\Plan_seven_title;
use App\Plan_six;
use App\Plan_six_title;
use App\Plan_three;
use App\Plan_three_title;
use App\Plan_two;
use App\Plan_two_title;
use App\Referral_program;
use App\Social;
use App\Standout;
use App\Standout_heading;
use App\Use_heading;
use App\User;
use App\Visitor_message;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('Frontend.index', [
            'logo' => Logo::find(1),
            'banner' => Banner_detail::find(1),
            'about_detail' => About_detail::find(1),
            'count1' => Conter::find(1),
            'count2' => Conter::find(2),
            'count3' => Conter::find(3),
            'count4' => Conter::find(4),
            'methods' => Payment::latest()->get(),
            'stand_heading' => Standout_heading::find(1),
            'standouts' => Standout::latest()->get(),
            'refferal' => Referral_program::find(1),
            'use_heading' => Use_heading::find(1),
            'uses' => How_to_use::all(),
            'faqs' => Faq::latest()->get(),
            'contact_heading' => Contact_heading::find(1),
            'socials' => Social::latest()->get(),
            'contact_info' => Contact_info::find(1),
            'plan_heading' => Plan_heading::find(1),
            'plan_one_title' => Plan_one_title::find(1),
            'plan1' => Plan_one::latest()->get(),
            'plan_two_title' => Plan_two_title::find(1),
            'plan2' => Plan_two::latest()->get(),
            'plan_three_title' => Plan_three_title::find(1),
            'plan3' => Plan_three::latest()->get(),
            'plan_four_title' => Plan_four_title::find(1),
            'plan4' => Plan_four::latest()->get(),
            'plan_five_title' => Plan_five_title::find(1),
            'plan5' => Plan_five::latest()->get(),
            'plan_six_title' => Plan_six_title::find(1),
            'plan6' => Plan_six::latest()->get(),
            'plan_seven_title' => Plan_seven_title::find(1),
            'plan7' => Plan_seven::latest()->get(),
            
        ]);
    }
    public function messagepost(Request $request){
        Visitor_message::insert($request->except('_token'));
        return back()->with('message_send', 'We recived your message successfully!!');
    }
    public function userregister(){
        return view('Frontend.registration');
    }
}
