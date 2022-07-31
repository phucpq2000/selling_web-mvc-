<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Beverage;
use Illuminate\Http\Request;

class BeverageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beverage = DB::table('beverages')->simplePaginate(5);
        // $beverage = DB::table('beverage')->paginate(5);
        return view('beverage.index',  ['beverages' => $beverage]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beverage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $beverage = new Beverage();
        $beverage->name = $request->name;
        $beverage->price = $request->price;
        $beverage->type = $request->type;
        $beverage->save();
        return redirect()->route('beverages.index');
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
        $beverage =  DB::table('beverages')->where('id',$id)->first();
        return View('beverage.edit',['beverages'=>$beverage]);
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
        $beverage = Beverage::find($id);
        $beverage->name = $request->name;
        $beverage->price = $request->price;
        $beverage->type = $request->type;

        $beverage->save();
        return redirect()->route('beverages.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $beverage = Beverage::find($id);
        $beverage->delete();
        return redirect()->route('beverages.index');
    }
}
