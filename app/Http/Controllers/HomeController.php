<?php

namespace App\Http\Controllers;

use App\About_detail;
use App\Banner_detail;
use App\Contact_heading;
use App\Contact_info;
use App\Conter;
use App\Logo;
use App\Plan_heading;
use App\Referral_program;
use App\User;
use App\Visitor_message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkrole');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home.home', [
            'users' => User::latest()->paginate(10),
        ]);
    }
    public function editprofile()
    {
        return view('admin.home.edit_profile');
    }
    public function changename(Request $request){
        User::find(Auth::id())->update([
            'name' => $request->name,
        ]);
        return back()->with('changename', 'Name Change Successfully!@!');
    }
    function changephoto(Request $request)
    {
        if ($request->hasFile('profile_photo')) {
            if (Auth::user()->profile_photo != 'default.jpg') {
                $old_photo_location = 'public/uploads/profile_photos/' . Auth::user()->profile_photo;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('profile_photo');
            $new_file_name = Auth::id() . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/profile_photos/' . $new_file_name;
            Image::make($uploaded_photo)->resize(300, 300)->save(base_path($new_file_location));
            User::find(Auth::id())->update([
                'profile_photo' => $new_file_name,
            ]);
            return back()->with('profile_photo', 'Your Profile Photo Changed Successfully!!!');
        }
         else {
            return back();
        }
    }
    function changepassword(Request $request)
    {
        if (Hash::check($request->old_password, Auth::user()->password)) {
            if ($request->old_password == $request->password) {
                return back()->with('same_pass', 'your new password is like your current password!!!');
            } else {
                User::find(Auth::id())->update([
                    'password' => Hash::make($request->password)
                ]);
                return back()->with('chang_pass', 'your Password Change Successfully!!!');
            }
        } else {
            return back()->with('not_match', 'Your Password is not match!!!!');
        }
    }
    public function homelogo(){
        return view('admin.logo.index', [
            'logo' => Logo::find(1)
        ]);
    }
    public function logoupdate($id){
        return view('admin.logo.update_logo', [
            'logo' => Logo::find($id)
        ]);
    }
    public function logoupdatepost(Request $request, $id){
        if ($request->hasFile('logo')) {
            $uploaded_photo = $request->file('logo');
            $new_file_name = $id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/logo/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Logo::find($id)->update([
                'logo' => $new_file_name,
            ]);
            return back()->with('update_logo', 'Logo Updated Successfully!!!');
        } else {
            return back();
        }
    }
    public function bannerdetail(){
        return view('admin.banner.index', [
            'detail' => Banner_detail::find(1)
        ]);
    }
    public function updatebannerdetail($id){
        return view('admin.banner.detail_update', [
            'detail' => Banner_detail::find($id)
        ]);
    }
    public function updatebannerdetailpost(Request $request, $id){
        Banner_detail::find($id)->update($request->except('_token'));
        return back()->with('detail_update', 'Banner detail updated successfully!');
    }
    public function aboutdetail(){
        return view('admin.about.index', [
            'detail' => About_detail::find(1)
        ]);
    }
    public function updateaboutdetail($id){
        return view('admin.about.update_detail', [
            'detail' => About_detail::find($id)
        ]);
    }
    public function updateaboutdetailpost(Request $request, $id){
        About_detail::find($id)->update($request->except('_token'));
        return back()->with('detail_update', 'About detail updated successfully!');
    }
    public function homecount(){
        return view('admin.count.index', [
            'counts' => Conter::latest()->get(),
        ]);
    }
    public function homecountupdate($id){
        return view('admin.count.update_count', [
            'count' => Conter::find($id)
        ]);
    }
    public function homecountupdatepost(Request $request, $id){
        Conter::find($id)->update($request->except('_token'));
        return back()->with('count_update', 'Counter updated successfully!');
    }
    public function homereferralprogram(){
        return view('admin.program.index', [
            'program' => Referral_program::find(1)
        ]);
    }
    public function homereferralprogramupdate($id){
        return view('admin.program.update_program', [
            'program' => Referral_program::find($id)
        ]);
    }
    public function homereferralprogramupdatepost(Request $request, $id){
        Referral_program::find($id)->update($request->except('_token', 'thumbnail'));
        if ($request->hasFile('thumbnail')) {
            $uploaded_photo = $request->file('thumbnail');
            $new_file_name = $id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/program/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Referral_program::find($id)->update([
                'thumbnail' => $new_file_name,
            ]);
            return back()->with('update_program', 'Referral Program Updated Successfully!!!');
        } else {
            return back();
        }
    }
    public function homeplanheading(){
        return view('admin.plan_heading.index', [
            'heading' => Plan_heading::find(1)
        ]);
    }
    public function homeplanheadingupdate($id){
        return view('admin.plan_heading.update_heading', [
            'info' => Plan_heading::find($id)
        ]);
    }
    public function homeplanheadingupdatepost(Request $request, $id){
        Plan_heading::find($id)->update($request->except('_token'));
        return back()->with('heading_update', 'Plan heading updated successfully!!');
    }
    public function homecontactheading(){
        return view('admin.contact.index', [
            'heading' => Contact_heading::find(1),
            'info' => Contact_info::find(1)
        ]);
    }
    public function homecontactheadingupdate($id){
        return view('admin.contact.update_heading', [
            'info' => Contact_heading::find($id)
        ]);
    }
    public function homecontactheadingupdatepost(Request $request, $id){
        Contact_heading::find($id)->update($request->except('_token'));
        return back()->with('heading_update', 'Heading updated successfully!!');
    }
    public function homecontactinfoupdate($id){
        return view('admin.contact.update_info', [
            'info' => Contact_info::find($id)
        ]);
    }
    public function homecontactinfoupdatepost(Request $request, $id){
        Contact_info::find($id)->update($request->except('_token'));
        return back()->with('info_update', 'Contact info updated successfully!!');
    }
    public function visitormessage(){
        return view('admin.visitor_message.index', [
            'messages' => Visitor_message::latest()->get()
        ]);
    }
}
