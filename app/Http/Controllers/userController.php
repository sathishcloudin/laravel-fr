<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testuser;
use App\Models\usermodel;
use App\Users;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["users"] = testuser::get();
        
         
        return view ('userview')->with($data);
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
        $storeuser = new testuser();
        $storeuser->name = $request->name;
        $storeuser->email = $request->email;
        $storeuser->dob = $request->dob;
        $storeuser->phone = $request->phone;
        $storeuser->address = $request->address;
        $storeuser->save();

        return "inserted";
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
        // echo $id;
       $storeuser= testuser::find($id);
       return view('edit',['storeuser'=>$storeuser]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        testuser::where('id', $request->id)            
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'dob' => $request->dob,
                'phone' => $request->phone,
                'address' => $request->address                
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     // echo $id;exit();   
       $storeuser =testuser::find($id);    
       $storeuser->delete();  
       
    }
}
