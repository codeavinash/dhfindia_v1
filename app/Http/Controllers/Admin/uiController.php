<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BannerImage;

class uiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.uiViews.uiOptions');
    }
    public function showall(){

        $BannerImges = BannerImage::orderBy('id', 'DESC')->get();

        return view('Admin.uiViews.showall',['bannerImages'=>$BannerImges]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.uiViews.addnewBanner');
    }

    /**
     * Store a newly created resource in storage.The 🌍 World’s Fastest Indian
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('bannerImge')){
            $image = $request->file('bannerImge');
            $name = rand(10,10000).$image->getClientOriginalName();
            $deltinationPath = public_path('/networkingFiles/images/bannerImage/');
            $image->move($deltinationPath,$name);
            $dbPath = '/networkingFiles/images/bannerImage/'.$name;
            BannerImage::create(['imageUrl'=>$dbPath]);
             return redirect()->route('admin.showallimage');
        };
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
        $bannerImage = BannerImage::where('id',$id)->first();
        $removingPath = public_path($bannerImage->imageUrl);
        unlink($removingPath);
        $bannerImage->delete();
         return redirect()->route('admin.showallimage');
    }
}
