<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Profile;
// use Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
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
         return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profile = new Profile();
        $profile->beverage_id=$profile->beverage_id;
        $profile->name = $profile->name;
        $profile->price = $profile->price;
        $profile->type = $profile->type;
        $profile->save();
        return redirect()->route('beverage.index');
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
        
        $profile =  DB::table('profiles')->where('beverage_id',$id)->first();
        

			return View('profile.show',['profile'=>$profile]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile =  DB::table('profiles')->where('beverage_id',$id)->first();
        return View('profile.edit',['profile'=>$profile]);
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
        $profile = new Profile();
			$profile->full_name = $request->input('full_name');
			$profile->producer = $request->input('producer');
			$profile->country = $request->input('country');
			$affected = DB::table('profiles')
				->where('id', $id)
				->update(['full_name' =>  $profile->full_name,
							'producer' =>  $profile->producer,
							'country' =>  $profile->country
					]);
			return redirect()->route('profiles.show', [$id]);
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
}
