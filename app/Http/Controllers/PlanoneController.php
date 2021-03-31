<?php

namespace App\Http\Controllers;

use App\Plan_heading;
use App\Plan_one;
use App\Plan_one_title;
use Illuminate\Http\Request;

class PlanoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.plan_one.index', [
            'ones' => Plan_one::latest()->get(),
            'title' => Plan_one_title::find(1)
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
        Plan_one::insert($request->except('_token'));
        return back()->with('add_plan', 'Plane added successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plan_one $one)
    {
        return view('admin.plan_one.show', [
            'info' => Plan_one::find($one->id)
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
    public function update(Request $request, Plan_one $one)
    {
        Plan_one::find($one->id)->update($request->except('_token', '_method'));
        return back()->with('update_plan', 'Plan Updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan_one $one)
    {
        Plan_one::find($one->id)->delete();
        return back()->with('delete_plan', 'Plan deleted successfully!!');
    }
    public function homeplaneonetitleupdate($id){
        return view('admin.plan_one.update_title', [
            'title' => Plan_one_title::find($id)
        ]);
    }
    public function homeplaneonetitleupdatepost(Request $request, $id){
        Plan_one_title::find($id)->update($request->except('_token'));
        return back()->with('update_title', 'Title updated successfully!!');
    }
}
