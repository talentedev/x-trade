<?php

namespace App\Http\Controllers;

use App\Plan_four;
use App\Plan_four_title;
use Illuminate\Http\Request;

class PlanfourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.plan_four.index', [
            'fours' => Plan_four::latest()->get(),
            'title' => Plan_four_title::find(1)
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
        Plan_four::insert($request->except('_token'));
        return back()->with('add_plan', 'Plane added successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plan_four $four)
    {
        return view('admin.plan_four.show', [
            'info' => Plan_four::find($four->id)
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
    public function update(Request $request, Plan_four $four)
    {
        Plan_four::find($four->id)->update($request->except('_token', '_method'));
        return back()->with('update_plan', 'Plan Updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan_four $four)
    {
        Plan_four::find($four->id)->delete();
        return back()->with('delete_plan', 'Plan deleted successfully!!');
    }

    public function homeplanfourtitleupdate($id)
    {
        return view('admin.plan_four.update_title', [
            'title' => Plan_four_title::find($id)
        ]);
    }
    public function homeplanfourtitleupdatepost(Request $request, $id)
    {
        Plan_four_title::find($id)->update($request->except('_token'));
        return back()->with('update_title', 'Title updated successfully!!');
    }
}
