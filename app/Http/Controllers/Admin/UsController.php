<?php

namespace App\Http\Controllers\Admin;
use SweetAlert;
use App\Http\Controllers\Controller;
use App\us;
use Illuminate\Http\Request;

class UsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $us=Us::all();
        return view(('Admin.us.index'),compact('us'));
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
        $this->validate(request(), [
            'name'=>'required',
            'email'=>'required',
            'mobile'=>'required|regex:/[0-9]{10}/|digits:11',
            'description'=>'required',
            'body'=>'required',
            
 
        ]);

        Us::create([
            'name'=>request('name'),
            'email'=>request('email'),
            'mobile'=>request('mobile'),
            'description'=>request('description'),
            'body'=>request('body')
        ]);
        alert()->success('پیام شما با موفقیت برای ما ارسال شد :)',)->persistent('بستن');
         return back();
         
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\us  $us
     * @return \Illuminate\Http\Response
     */
    public function show(us $us)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\us  $us
     * @return \Illuminate\Http\Response
     */
    public function edit(us $us)
    {
        return view('Admin.us.show',compact('us'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\us  $us
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, us $us)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\us  $us
     * @return \Illuminate\Http\Response
     */
    public function destroy(us $us)
    {
        $us->delete();
        return back();
    }
}
