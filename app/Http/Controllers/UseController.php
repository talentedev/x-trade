<?php

namespace App\Http\Controllers;

use App\How_to_use;
use App\Use_heading;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class UseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.how_to_use.index', [
            'heading' => Use_heading::find(1),
            'uses' => How_to_use::latest()->get()
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
        $use_id = How_to_use::insertGetId($request->except('_token', '_method', 'thumbnail') + [
            'created_at' => Carbon::now()
        ]);
        if ($request->hasFile('thumbnail')) {
            $uploaded_photo = $request->file('thumbnail');
            $new_file_name = $use_id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/how_to_use/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            How_to_use::find($use_id)->update([
                'thumbnail' => $new_file_name,
            ]);
        }
        return back()->with('add_use', 'Add use step Successfully!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(How_to_use $use)
    {
        return view('admin.how_to_use.show', [
            'info' => How_to_use::find($use->id)
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
    public function update(Request $request, How_to_use $use)
    {
        How_to_use::find($use->id)->update($request->except('_token', '_method', 'thumbnail'));
        if ($request->hasFile('thumbnail')) {
            if (How_to_use::find($use->id)->thumbnail != 'default.jpg') {
                $old_photo_location = 'public/uploads/how_to_use/' . How_to_use::find($use->id)->thumbnail;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('thumbnail');
            $new_file_name = $use->id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/how_to_use/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            How_to_use::find($use->id)->update([
                'thumbnail' => $new_file_name,
            ]);
        }
        return back()->with('update_use', 'Use updated Successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(How_to_use $use)
    {
        How_to_use::find($use)->delete();
        return back()->with('delete_use', 'Use step deleted successfully!!');
    }
    public function homehowtouseheadingupdate($id){
        return view('admin.how_to_use.update_heading', [
            'heading' => Use_heading::find($id)
        ]);
    }
    public function homehowtouseheadingupdatepost(Request $request, $id){
        Use_heading::find($id)->update($request->except('_token'));
        return back()->with('heading_update', 'Heading updated successfully!!');
    }
}
