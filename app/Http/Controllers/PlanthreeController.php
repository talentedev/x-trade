<?php

namespace App\Http\Controllers;

use App\Plan_three;
use App\Plan_three_title;
use Illuminate\Http\Request;

class PlanthreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.plan_three.index', [
            'threes' => Plan_three::latest()->get(),
            'title' => Plan_three_title::find(1)
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
        Plan_three::insert($request->except('_token'));
        return back()->with('add_plan', 'Plane added successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plan_three $three)
    {
        return view('admin.plan_three.show', [
            'info' => Plan_three::find($three->id)
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
    public function update(Request $request, Plan_three $three)
    {
        Plan_three::find($three->id)->update($request->except('_token', '_method'));
        return back()->with('update_plan', 'Plan Updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan_three $three)
    {
        Plan_three::find($three->id)->delete();
        return back()->with('delete_plan', 'Plan deleted successfully!!');
    }

    public function homeplanthreetitleupdate($id)
    {
        return view('admin.plan_three.update_title', [
            'title' => Plan_three_title::find($id)
        ]);
    }
    public function homeplanthreetitleupdatepost(Request $request, $id)
    {
        Plan_three_title::find($id)->update($request->except('_token'));
        return back()->with('update_title', 'Title updated successfully!!');
    }
}
