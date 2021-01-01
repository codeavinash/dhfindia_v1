<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostCategory;
use App\Models\Post;
use App\Models\PostComments;
use App\Models\PostLikes;
use App\Models\CountryStates;
use App\Models\User;
use App\Models\StatesDistricts;
use App\Models\UserSkill;
use App\Models\Notification;
use App\Models\ContactUs;

class userController extends Controller
{
    public function showAllEventCat(){
        $allCats = PostCategory::all();
        return view('Users.showAllPostCat',['postCat'=>$allCats]);
    }

    public function showPostbycat($id){
        $eventCatagoryList = PostCategory::all();
        $posts = PostCategory::where('id',$id)->first()->posts()->simplePaginate(10);
        $postsCatName = PostCategory::where('id',$id)->first();
        return view('Users.showPostbycat',['posts'=>$posts,'eventList'=>$eventCatagoryList,'postsCatName'=>$postsCatName]);

    }

    public function showSinglePost($id){
        $post = Post::where('id',$id)->firstOrFail();
        $likes = $post->alllikes()->get();
        $comments = $post->comments()->orderBy('id', 'DESC')->get();

        foreach ($comments as $key => $value) {
            $userid =  $value->userid;
            $value->userprofile = User::where('id',$userid)->first()->profilepic;
            $value->username = User::where('id',$userid)->first()->name;
        }
        $eventCatagoryList = PostCategory::all();
        if(auth()->user()){
            $currentUserLike = $post->alllikes()->where('user_id',auth()->user()->id)->first();
            $currentUserLike == null ? '': $currentUserLike = 'liked' ;
        }else{
            $currentUserLike ="";
        }
        return view('Users.showSinglePost',['post'=>$post,'likes'=>$likes,'comments'=>$comments,'currentLike'=>$currentUserLike,'eventList'=>$eventCatagoryList]);
    }

    public function addcomment( Request $request, $id){


        $userid = auth()->user()->id;
        Post::find($id)->first()->comments()->create([
            'userid'=>$userid,
            'userComment'=> $request->commentBox
        ]);

        $CommentCount = count(Post::find($id)->first()->comments()->get());

        $post = Post::find($id)->first();
        $post->likes = $CommentCount;
        $post->save();


         return redirect()->back()->with('message','your comment is added and you can see it after we approve it');
    }

    public function addLike($id){
        // adding likes to a single post 
        // checking this user has liked or not 
        $user =  auth()->user()->id;
        $likeCheck = Post::find($id)->alllikes()->where('user_id',$user)->first();
        if($likeCheck){
            $likeCheck->delete();
        }else{
            $postLike = Post::find($id)->alllikes();
            $postLike->create([
                "user_id"=>$user
            ]);
        }

        // adding the like count to post table

        $post = Post::find($id)->first();
        $likecount = $post->alllikes()->count();
        $post->likes = $likecount;
        $post->save();
        return redirect()->back()->with("like",true);
    }


    public function joinasMember(){

        if(auth()->user()){
            $states = CountryStates::all();
        return view('Users.joinUs',['states'=>$states]);
        }else{
            return  redirect()->route('login')->with('joinUsMessage','for joining us first you have to login');
        }
    }


    public function showStates(){
        $allstates = CountryStates::all()->where('show',1);
        return view('Users.showStates',['states'=>$allstates]);
    }

    public function showDistricts($state){
        $state = CountryStates::where('stateName',$state)->first();
        $allDistricts = $state->districts()->get()->where('show',1);
        return view('Users.showDistricts',['districts'=>$allDistricts, 'state'=>$state]);
    } 

    public function showMembersOther($state , $dis_id){
        $members = CountryStates::where('stateName',$state)->first()->districts()->where('id',$dis_id)->first()->members()->where('approved',1)->orderBy('numbering', 'asc')->get();
        $membersCount = $members->count();
        $advisors = $members->where('position','advisor');
        $core_members = $members->where('position','core_members');
        $subCommunityMember = $members->where('position','sub_members');
        $executive_member = $members->where('position','executive_member');
        $volenteer_member = $members->where('position','volenteer');

        $memberDetails = ['totalmembers' => $membersCount ,'advisor'=>$advisors,'core_mem'=>$core_members,'sub_mem'=>$subCommunityMember,'exe_mem'=>$executive_member,'vol_mem'=>$volenteer_member];
        
        

        return view('Users.showMembers',['memberDetails'=>$memberDetails]);
    }

    public function getDistricts($id){
        $districts =  CountryStates::find($id)->districts()->get();
        return $districts;
    }


    public function joinusForm(Request $request){


        $user_id = auth()->user()->id;

        $user = User::find($user_id);

        if($user->joined){
            return redirect()->back()->with(['alreadyExist'=>true]);
        }

        $user->dis_id = $request->District;
        $user->joined = true;

        if($file = $request->file('profilePic')){
            if($user->profilepic){
                unlink(public_path($user->profilepic));
            }
            // add new one
            $file_name = $user->id.rand(10,10000).$user->name.'.jpg';
            $file->move(public_path('/networkingFiles/images/userImages/'),$file_name);
            $user->profilepic = '/networkingFiles/images/userImages/'.$file_name;
        }
        
        $user->save();



        if( $file = $request->file('paymentProof')){
                $file_extention = $file->extension();
                $file_name = $user->id.rand(10,10000).$user->name.'.'.$file_extention;
                $file->move(public_path('/networkingFiles/images/paymet_barcode/'),$file_name);
                $user->payment()->create([
                    'paymentResept'=>'networkingFiles/images/paymet_barcode/'.$file_name
                ]);
        }

        


        $user->skills()->create([
            'dob'=> $request->dateOfBirth,
            'education'=>$request->education,
            'skills'=>$request->skills,
            'bloodGroup'=>$request->blood_group
        ]);

        Notification::create([
            'type'=>'admin',
            'notification' => 'a new user named '.$user->name.' just joind review the payment',
            'link'=> "/admin/validateUser/".$user_id
        ]);


        return redirect()->route('root')->with('success','we will verify your requsest and contact you');
    }


    public function myprofile(){
        return view('Users.myProfile');
    }

    public function changeProfile(Request $request){
         $request->file('profilepic');
        //  remove old pic
        $user = User::find(auth()->user()->id);
        if($user->profilepic){
            unlink(public_path($user->profilepic));
        }
        // add new one
        $file =  $request->file('profilepic');
        $file_name = $user->id.rand(10,10000).$user->name.'.jpg';
        $file->move(public_path('/networkingFiles/images/userImages/'),$file_name);
        $user->profilepic = '/networkingFiles/images/userImages/'.$file_name;
        $user->save();
        return redirect()->back()->with('success','profile changed successfully');
    }

    public function donateUs(){
        return view('Users.donateUs');
    }

    public function contactUsSubmit(Request $request){

        // create a new notification

        $validated = $request->validate([
            'name'=> "required|max:255",
            'number'=>'required|max:10|min:10',
            'message'=>'required'
        ]);


        ContactUs::create([
            'name'=>$request->name,
            'number'=>$request->number,
            'message'=>$request->message
        ]);


        Notification::create([
            'type'=>'admin',
            'notification' => 'a user wants to contact us click to view details',
            'link'=> route('admin.contactUsTable')
        ]);

        return redirect()->back()->with(['contactsus'=>true]);

    }


     

}

