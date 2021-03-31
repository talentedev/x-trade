<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'FrontendController@index')->name('index');
Route::get('user-register', 'FrontendController@userregister')->name('userregister');
Route::post('message/post', 'FrontendController@messagepost')->name('messagepost');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('edit/profile', 'HomeController@editprofile')->name('editprofile');
Route::post('change/name', 'HomeController@changename')->name('changename');
Route::post('change/photo', 'HomeController@changephoto')->name('changephoto');
Route::post('change/password', 'HomeController@changepassword')->name('changepassword');
Route::get('home/logo', 'HomeController@homelogo')->name('homelogo');
Route::get('home/logo/update/{id}', 'HomeController@logoupdate')->name('logoupdate');
Route::post('home/logo/update/post/{id}', 'HomeController@logoupdatepost')->name('logoupdatepost');
Route::get('home/banner/detail', 'HomeController@bannerdetail')->name('bannerdetail');
Route::get('home/banner/detail/update/{id}', 'HomeController@updatebannerdetail')->name('updatebannerdetail');
Route::post('home/banner/detail/update/post/{id}', 'HomeController@updatebannerdetailpost')->name('updatebannerdetailpost');
Route::get('home/about/detail', 'HomeController@aboutdetail')->name('aboutdetail');
Route::get('home/about/detail/update/{id}', 'HomeController@updateaboutdetail')->name('updateaboutdetail');
Route::post('home/about/detail/update/post/{id}', 'HomeController@updateaboutdetailpost')->name('updateaboutdetailpost');
Route::get('home/count', 'HomeController@homecount')->name('homecount');
Route::get('home/count/update/{id}', 'HomeController@homecountupdate')->name('homecountupdate');
Route::post('home/count/update/post/{id}', 'HomeController@homecountupdatepost')->name('homecountupdatepost');
Route::get('home/referral/program', 'HomeController@homereferralprogram')->name('homereferralprogram');
Route::get('home/referral/program/update/{id}', 'HomeController@homereferralprogramupdate')->name('homereferralprogramupdate');
Route::post('home/referral/program/update/post/{id}', 'HomeController@homereferralprogramupdatepost')->name('homereferralprogramupdatepost');
Route::get('home/plan/heading', 'HomeController@homeplanheading')->name('homeplanheading');
Route::get('home/plan/heading/update/{id}', 'HomeController@homeplanheadingupdate')->name('homeplanheadingupdate');
Route::post('home/plan/heading/update/post/{id}', 'HomeController@homeplanheadingupdatepost')->name('homeplanheadingupdatepost');
Route::get('home/contact/heading', 'HomeController@homecontactheading')->name('homecontactheading');
Route::get('home/contact/heading/update/{id}', 'HomeController@homecontactheadingupdate')->name('homecontactheadingupdate');
Route::post('home/contact/heading/update/post/{id}', 'HomeController@homecontactheadingupdatepost')->name('homecontactheadingupdatepost');
Route::get('home/contact/info/update/{id}', 'HomeController@homecontactinfoupdate')->name('homecontactinfoupdate');
Route::post('home/contact/info/update/post/{id}', 'HomeController@homecontactinfoupdatepost')->name('homecontactinfoupdatepost');
Route::get('home/visitor/message', 'HomeController@visitormessage')->name('visitormessage');
//UserController
Route::get('user-dashboard', 'UserController@userdashboard')->name('userdashboard');



//StandoutController
Route::resource('home/stand/out', 'StandoutController');
Route::get('home/stand/heading/update/{id}', 'StandoutController@standheadingupdate')->name('standheadingupdate');
Route::post('home/stand/heading/update/post/{id}', 'StandoutController@standheadingupdatepost')->name('standheadingupdatepost');

//UseController
Route::resource('home/how/to/use', 'UseController');
Route::get('home/how/to/use/heading/update/{id}', 'UseController@homehowtouseheadingupdate')->name('homehowtouseheadingupdate');
Route::post('home/how/to/use/heading/update/post/{id}', 'UseController@homehowtouseheadingupdatepost')->name('homehowtouseheadingupdatepost');
//FaqController
Route::resource('home/faq', 'FaqController');
//SocialController
Route::resource('home/social', 'SocialController');
//PaymentmethodController
Route::resource('home/method/payment', 'PaymentmethodController');




//PlanoneController
Route::resource('home/plane/one', 'PlanoneController');
Route::get('home/plane/one/title/update/{id}', 'PlanoneController@homeplaneonetitleupdate')->name('homeplaneonetitleupdate');
Route::post('home/plane/one/title/update/post/{id}', 'PlanoneController@homeplaneonetitleupdatepost')->name('homeplaneonetitleupdatepost');



//PlantwoController
Route::resource('home/plane/two', 'PlantwoController');
Route::get('home/plane/two/title/update/{id}', 'PlantwoController@homeplantwotitleupdate')->name('homeplantwotitleupdate');
Route::post('home/plane/two/title/update/post/{id}', 'PlantwoController@homeplantwotitleupdatepost')->name('homeplantwotitleupdatepost');



//PlanthreeController
Route::resource('home/plane/three', 'PlanthreeController');
Route::get('home/plane/three/title/update/{id}', 'PlanthreeController@homeplanthreetitleupdate')->name('homeplanthreetitleupdate');
Route::post('home/plane/three/title/update/post/{id}', 'PlanthreeController@homeplanthreetitleupdatepost')->name('homeplanthreetitleupdatepost');


//PlanfourController
Route::resource('home/plane/four', 'PlanfourController');
Route::get('home/plane/four/title/update/{id}', 'PlanfourController@homeplanfourtitleupdate')->name('homeplanfourtitleupdate');
Route::post('home/plane/four/title/update/post/{id}', 'PlanfourController@homeplanfourtitleupdatepost')->name('homeplanfourtitleupdatepost');




//PlanfiveController
Route::resource('home/plane/five', 'PlanfiveController');
Route::get('home/plane/five/title/update/{id}', 'PlanfiveController@homeplanfivetitleupdate')->name('homeplanfivetitleupdate');
Route::post('home/plane/five/title/update/post/{id}', 'PlanfiveController@homeplanfivetitleupdatepost')->name('homeplanfivetitleupdatepost');




//PlansixController
Route::resource('home/plane/six', 'PlansixController');
Route::get('home/plane/six/title/update/{id}', 'PlansixController@homeplansixtitleupdate')->name('homeplansixtitleupdate');
Route::post('home/plane/six/title/update/post/{id}', 'PlansixController@homeplansixtitleupdatepost')->name('homeplansixtitleupdatepost');



//PlansevenController
Route::resource('home/plane/seven', 'PlansevenController');
Route::get('home/plane/seven/title/update/{id}', 'PlansevenController@homeplanseventitleupdate')->name('homeplanseventitleupdate');
Route::post('home/plane/seven/title/update/post/{id}', 'PlansevenController@homeplanseventitleupdatepost')->name('homeplanseventitleupdatepost');


// desposit controller route start here
Route::get('home/make-deposite', 'DepositController@index')->name('deposit.index');
Route::post('home/deposite/cart', 'DepositController@cart')->name('deposit.cart');
// desposit controller route end here
