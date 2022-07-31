<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Uprofile;
class UprofileController extends Controller
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
        $uprofile =  DB::table('uprofiles')->where('user_id',$id)->first();
        

        return View('uprofile.show',['uprofile'=>$uprofile]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $uprofile =  DB::table('uprofiles')->where('user_id',$id)->first();
        return View('uprofile.edit',['uprofile'=>$uprofile]);
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
        $uprofile = new Uprofile();
			$uprofile->full_name = $request->input('full_name');
			$uprofile->address = $request->input('address');
			$uprofile->birthday = $request->input('birthday');
			$affected = DB::table('uprofiles')
				->where('id', $id)
				->update(['full_name' =>  $uprofile->full_name,
							'address' =>  $uprofile->address,
							'birthday' =>  $uprofile->birthday
					]);
			return redirect()->route('uprofiles.show', [$id]);
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
