<?php

namespace App\Http\Controllers;

use App\Plan_two;
use App\Plan_two_title;
use Illuminate\Http\Request;

class PlantwoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.plan_two.index', [
            'twos' => Plan_two::latest()->get(),
            'title' => Plan_two_title::find(1)
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
        Plan_two::insert($request->except('_token'));
        return back()->with('add_plan', 'Plane added successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plan_two $two)
    {
        return view('admin.plan_two.show', [
            'info' => Plan_two::find($two->id)
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
    public function update(Request $request, Plan_two $two)
    {
        Plan_two::find($two->id)->update($request->except('_token', '_method'));
        return back()->with('update_plan', 'Plan Updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan_two $two)
    {
        Plan_two::find($two->id)->delete();
        return back()->with('delete_plan', 'Plan deleted successfully!!');
    }
    public function homeplantwotitleupdate($id)
    {
        return view('admin.plan_two.update_title', [
            'title' => Plan_two_title::find($id)
        ]);
    }
    public function homeplantwotitleupdatepost(Request $request, $id)
    {
        Plan_two_title::find($id)->update($request->except('_token'));
        return back()->with('update_title', 'Title updated successfully!!');
    }
}
