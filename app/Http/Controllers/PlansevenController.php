<?php

namespace App\Http\Controllers;

use App\Plan_seven;
use App\Plan_seven_title;
use Illuminate\Http\Request;

class PlansevenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.plan_seven.index', [
            'sevens' => Plan_seven::latest()->get(),
            'title' => Plan_seven_title::find(1)
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
        Plan_seven::insert($request->except('_token'));
        return back()->with('add_plan', 'Plane added successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plan_seven $seven)
    {
        return view('admin.plan_seven.show', [
            'info' => Plan_seven::find($seven->id)
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
    public function update(Request $request, Plan_seven $seven)
    {
        Plan_seven::find($seven->id)->update($request->except('_token', '_method'));
        return back()->with('update_plan', 'Plan Updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan_seven $seven)
    {
        plan_seven::find($seven->id)->delete();
        return back()->with('delete_plan', 'Plan deleted successfully!!');
    }


    public function homeplanseventitleupdate($id)
    {
        return view('admin.plan_seven.update_title', [
            'title' => Plan_seven_title::find($id)
        ]);
    }
    public function homeplanseventitleupdatepost(Request $request, $id)
    {
        Plan_seven_title::find($id)->update($request->except('_token'));
        return back()->with('update_title', 'Title updated successfully!!');
    }
}
