<?php

namespace App\Http\Controllers;

use App\Standout;
use App\Standout_heading;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StandoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.standout.index', [
            'heading' => Standout_heading::find(1),
            'standouts' => Standout::latest()->get()
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
        Standout::insert($request->except('_token') + [
            'created_at' => Carbon::now()
        ]);
        return back()->with('add_standout', 'Added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Standout $out)
    {
        return view('admin.standout.show', [
            'detail' => Standout::find($out->id)
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
    public function update(Request $request, Standout $out)
    {
        Standout::find($out->id)->update($request->except('_token', '_method'));
        return back()->with('update_standout', 'Updated successfully!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Standout $out)
    {
        Standout::find($out->id)->delete();
        return back()->with('item_delete', 'Deleted successfully!');
    }
    public function standheadingupdate($id){
        return view('admin.standout.update_heading', [
            'heading' => Standout_heading::find($id)
        ]);
    }
    public function standheadingupdatepost(Request $request, $id){
        Standout_heading::find($id)->update($request->except('_token'));
        return back()->with('heading_update', 'Heading Updated successfully!');
    }
}
