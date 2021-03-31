<?php

namespace App\Http\Controllers;

use App\Plan_five;
use App\Plan_five_title;
use Illuminate\Http\Request;

class PlanfiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.plan_five.index', [
            'fives' => Plan_five::latest()->get(),
            'title' => Plan_five_title::find(1)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Plan_five::insert($request->except('_token'));
        return back()->with('add_plan', 'Plane added successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plan_five $five)
    {
        return view('admin.plan_five.show', [
            'info' => Plan_five::find($five->id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan_five $five)
    {
        Plan_five::find($five->id)->update($request->except('_token', '_method'));
        return back()->with('update_plan', 'Plan Updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan_five $five)
    {
        Plan_five::find($five->id)->delete();
        return back()->with('delete_plan', 'Plan deleted successfully!!');
    }


    public function homeplanfivetitleupdate($id)
    {
        return view('admin.plan_five.update_title', [
            'title' => Plan_five_title::find($id)
        ]);
    }
    public function homeplanfivetitleupdatepost(Request $request, $id)
    {
        Plan_five_title::find($id)->update($request->except('_token'));
        return back()->with('update_title', 'Title updated successfully!!');
    }
}
