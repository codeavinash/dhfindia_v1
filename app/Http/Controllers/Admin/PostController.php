<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostCategory;
use App\Models\Post;
use App\Models\PostComments;


class PostController extends Controller
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
        $postcats = PostCategory::all();
        return view('Admin.Posts.addnewPost',['postCat'=>$postcats]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $postCatagory = PostCategory::where('id',$request->category)->first();

        $post = new Post;

        $post->name = $request->name;
        $post->shortDescription = $request->shortDescription;
        $post->description = $request->description;
        
        if($request->hasfile('thumbnailUrl')){
            $image = $request->file('thumbnailUrl');
            $name = rand(10,10000).$image->getClientOriginalName();
            $deltinationPath = public_path('/networkingFiles/images/PostImages/');
            $image->move($deltinationPath,$name);
            $dbPath = '/networkingFiles/images/PostImages/'.$name;
        };

        $post->thumbnailUrl = $dbPath;

        $postCatagory->posts()->save($post);

         return redirect()->route('user.showallevents');


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
        $post = post::find($id);
        return view('Admin.Posts.editPost',['post'=>$post]);
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
        $post = Post::find($id);

        $post->name = $request->name;
        $post->shortDescription = $request->shortDescription;
        $post->description = $request->description;

        if($request->hasfile('thumbnailUrl')){
            $image = $request->file('thumbnailUrl');
            unlink(public_path($post->thumbnailUrl));
            $name = rand(10,10000).$image->getClientOriginalName();
            $deltinationPath = public_path('/networkingFiles/images/PostImages/');
            $image->move($deltinationPath,$name);
            $dbPath = '/networkingFiles/images/PostImages/'.$name;
        };

        $post->thumbnailUrl = $dbPath;

        $post->save();

        return redirect()->route('user.showSinglePost',$post->id);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // remove all the comments
        $post = Post::find($id);
        $post->comments()->delete();
        // remove all the likes
        $post->alllikes()->delete();
        // remove thumbnail 

        unlink(public_path($post->thumbnailUrl));

        $post->delete();

        return redirect()->route('user.showallevents');
        // delete the post
    }


    public function approveComments($id){
        $comment = PostComments::find($id);
        $comment->status = 'approved';
        $comment->save();
        return redirect()->back()->with('success','comment approved ');
    }

    public function disapprove($id){
        $comment = PostComments::find($id);
        $comment->status = 'disapprove';
        $comment->save();
        return redirect()->back()->with('success','comment disapproved ');
    }
}
