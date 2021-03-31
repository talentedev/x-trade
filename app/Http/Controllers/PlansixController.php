<?php

namespace App\Http\Controllers;

use App\Plan_six;
use App\Plan_six_title;
use Illuminate\Http\Request;

class PlansixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.plan_six.index', [
            'sixs' => Plan_six::latest()->get(),
            'title' => Plan_six_title::find(1)
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
        Plan_six::insert($request->except('_token'));
        return back()->with('add_plan', 'Plane added successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plan_six $six)
    {
        return view('admin.plan_six.show', [
            'info' => Plan_six::find($six->id)
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
    public function update(Request $request, Plan_six $six)
    {
        Plan_six::find($six->id)->update($request->except('_token', '_method'));
        return back()->with('update_plan', 'Plan Updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan_six $six)
    {
        Plan_six::find($six->id)->delete();
        return back()->with('delete_plan', 'Plan deleted successfully!!');
    }

    public function homeplansixtitleupdate($id)
    {
        return view('admin.plan_six.update_title', [
            'title' => Plan_six_title::find($id)
        ]);
    }
    public function homeplansixtitleupdatepost(Request $request, $id)
    {
        Plan_six_title::find($id)->update($request->except('_token'));
        return back()->with('update_title', 'Title updated successfully!!');
    }
}
