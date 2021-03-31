<?php

namespace App\Http\Controllers;

use App\Plan_one;
use App\Plan_six;
use App\Plan_two;
use App\Plan_five;
use App\Plan_four;
use App\Plan_seven;
use App\Plan_three;
use App\Plan_heading;
use App\Plan_one_title;
use App\Plan_six_title;
use App\Plan_two_title;
use App\Plan_five_title;
use App\Plan_four_title;
use App\Plan_seven_title;
use App\Plan_three_title;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DepositController extends Controller
{
    function index(){
        return view('admin.deposit.index',[
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
    function cart(Request $request){
        if($request->d_item == 1){
            $plan = Plan_one::latest()->get();
            $plan_title =  Plan_one_title::find(1);
            $plan_name = 'Basic';
        }
        elseif ($request->d_item == 2) {
            $plan = Plan_two::latest()->get();
            $plan_title =  Plan_two_title::find(1);
            $plan_name = 'Basic';
        }
        elseif ($request->d_item == 3) {
            $plan = Plan_three::latest()->get();
            $plan_title =  Plan_three_title::find(1);
            $plan_name = 'Basic';
        }
        elseif ($request->d_item == 4) {
            $plan = Plan_four::latest()->get();
            $plan_title =  Plan_four_title::find(1);
            $plan_name = 'Super';
        }
        elseif ($request->d_item == 5) {
            $plan = Plan_five::latest()->get();
            $plan_title =  Plan_five_title::find(1);
            $plan_name = 'Super';
        }
        elseif ($request->d_item == 6) {
            $plan6 = Plan_six::latest()->get();
            $plan_title =  Plan_six_title::find(1);
            $plan_name = 'Super';
        }
        elseif ($request->d_item == 7) {
            $plan = Plan_seven::latest()->get();
            $plan_title =  Plan_seven_title::find(1);
            $plan_name = 'Super';
        }
        return view('admin.deposit.cart',[
            'getwey' => $request->getwey,
            'amount' => $request->amount,
            'plan' => $plan,
            'plan_title' => $plan_title,
            'plan_name' => $plan_name

        ]);
    }
}
