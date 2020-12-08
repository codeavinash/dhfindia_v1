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
        $comments = $post->comments()->get();
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
        $username = auth()->user()->name;
        Post::find($id)->first()->comments()->create([
            'userName'=>$username,
            'userComment'=> $request->commentBox
        ]);
         return redirect()->back()->with('message','your comment is added and you can see it after we approve it');
    }

    public function addLike($id){
        $userId = auth()->user()->id;
        $likes = Post::where('id',$id)->first()->alllikes()->get()->where('user_id',"1")->first();
        if($likes == null){
            Post::where('id',$id)->first()->alllikes()->create(['user_id'=>$userId]);
        }else{
            $likes->delete();
        }
        return redirect()->back();
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
        $members = CountryStates::where('stateName',$state)->first()->districts()->where('id',$dis_id)->first()->members()->where('approved',1)->get();
        $advisors = $members->where('position','advisor');
        $core_members = $members->where('position','core_members');
        $subCommunityMember = $members->where('position','sub_members');
        $executive_member = $members->where('position','executive_member');
        return view('Users.showMembers',['advisors'=>$advisors,'coreMembers'=>$core_members,'subMembers'=>$subCommunityMember,'totalmembers'=>$members,'executive_member'=>$executive_member]);
    }

    public function getDistricts(Request $request){
        $districts =  CountryStates::find($request->state_id)->districts()->get();
        return $districts;
    }


    public function joinusForm(Request $request){
        
        // find the district and and than add the user

        // return $request->file();

        $user_id = auth()->user()->id;

        $user = User::find($user_id);

        $user->dis_id = $request->District;
        
        $user->save();

        if( $file = $request->file('paymentProof')){
                $file_extention = $file->extension();
                $file_name = $user->id.rand(10,10000).$user->name.'.'.$file_extention;
                $file->move(public_path('/networkingFiles/images/paymet_barcode/'),$file_name);
                $user->payment()->create([
                    'paymentResept'=>'networkingFiles/images/paymet_barcode/'.$file->getClientOriginalName()
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
            'link'=> route('admin.validateUser',$user_id)
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

}

