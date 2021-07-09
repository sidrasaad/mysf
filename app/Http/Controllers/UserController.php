<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function profile()
    {
        $user = Auth::user();
        if($user->date_of_birth)
        $user->date_of_birth =  Carbon::createFromFormat('Y-m-d', $user->date_of_birth )->format('d/m/Y');
        return view('profile.edit',compact('user'));
    }

    public function update_profile(Request $request)
    {
         
        //     $user =Auth::user();

        //     $user->name=$request->input('name');
        //     $user->last_name=$request->input('last_name');
        //     $user->date_of_birth=$request->input('date_of_birth')? Carbon::createFromFormat('d/m/Y', $request->input('date_of_birth')):null;
        //     $user->gender=$request->input('gender');

        //         if($request->input('profile_photo')){
        //                              //get the base-64 from data
        //      $base64_str = substr($request->input('profile_photo'), strpos($request->input('profile_photo'), ",")+1);

        //     //decode base64 string
        //     $image = base64_decode($base64_str);
        //     $path='profile_photos/image'.uniqid().time().'.png';
        //     Storage::disk('public')->put($path, $image);
        //     $user->profile_photo=$path;
        //         }

        // $user->update();

        //     return redirect()->route('admin.profile.edit')->with('success','Profile Updated Successfully!');
    }

}
