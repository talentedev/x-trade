<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use Image;

class PaymentmethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.payment_method.index', [
            'methods' => Payment::latest()->get()
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
        $payment_id = Payment::insertGetId($request->except('_token', 'payment_thumbnail'));

        if ($request->hasFile('payment_thumbnail')) {
            $uploaded_photo = $request->file('payment_thumbnail');
            $new_file_name = $payment_id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/payment_method/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Payment::find($payment_id)->update([
                'payment_thumbnail' => $new_file_name,
            ]);
        }
        return back()->with('add_method', 'method added Successfully!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        return view('admin.payment_method.show', [
            'info' => Payment::find($payment->id)
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
    public function update(Request $request, Payment $payment)
    {
        Payment::find($payment->id)->update($request->except('_token', '_method', 'payment_thumbnail'));
        if ($request->hasFile('payment_thumbnail')) {
            if (Payment::find($payment->id)->payment_thumbnail != 'default.png') {
                $old_photo_location = 'public/uploads/payment_method/' . Payment::find($payment->id)->payment_thumbnail;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('payment_thumbnail');
            $new_file_name = $payment->id . "." . $uploaded_photo->getClientOriginalExtension();
            $new_file_location = 'public/uploads/payment_method/' . $new_file_name;
            Image::make($uploaded_photo)->save(base_path($new_file_location));
            Payment::find($payment->id)->update([
                'payment_thumbnail' => $new_file_name,
            ]);
        }
        return back()->with('update_method', 'Method updated Successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        Payment::find($payment->id)->delete();
        return back()->with('delete_method', 'Method deleted successfully!!');
    }
}
