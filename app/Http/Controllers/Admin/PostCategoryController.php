<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostCategory;


class PostCategoryController extends Controller
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
        return view('Admin.Posts.addnewCat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(PostCategory::where('name',$request->name)->exists()){
            return "this name exist in database";
        }else{

            if($request->hasfile('thumbnailUrl')){
                $image = $request->file('thumbnailUrl');
                $name = rand(10,10000).$image->getClientOriginalName();
                $deltinationPath = public_path('/networkingFiles/images/categoryImages/');
                $image->move($deltinationPath,$name);
                $dbPath = '/networkingFiles/images/categoryImages/'.$name;
                
            };

            PostCategory::create([
                'name'=>$request->name,
                'thumbnailUrl'=>$dbPath,
                'shortDescription'=>$request->shortDescription
            ]);

             return redirect()->route('user.showallevents');

        }
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

        $cat = PostCategory::where('id',$id)->first();

        return view('Admin.Posts.editPostCat',['cat'=>$cat]);
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
        $cat = PostCategory::where('id',$id)->first();

        $cat->name = $request->name;
        $cat->shortDescription = $request->shortDescription;

        if($request->hasfile('thumbnailUrl')){
            // removing old image
            unlink(public_path($cat->thumbnailUrl));
            // adding new image
            $image = $request->file('thumbnailUrl');
            $name = rand(10,10000).$image->getClientOriginalName();
            $deltinationPath = public_path('/networkingFiles/images/categoryImages/');
            $image->move($deltinationPath,$name);
            $dbPath = '/networkingFiles/images/categoryImages/'.$name;
            $cat->thumbnailUrl = $dbPath;
        };
        $cat->save();
         return redirect()->route('user.showallevents')->with('message','cat edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = PostCategory::find($id);
        $posts = $cat->posts();
        foreach($posts as $post){
            unlink(public_path($post->thumbnailUrl));
            $post->comments()->delete();
            $post->alllikes()->delete();
        }
        $posts->delete();
        unlink(public_path($cat->thumbnailUrl));
        $cat->delete();

    }
}
