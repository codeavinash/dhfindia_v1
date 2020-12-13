<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Models\CountryStates;
use App\Models\StatesDistricts;
use App\Models\Notification;

class userDetailsController extends Controller
{
    
    public function showall($distic){
        
            $users = StatesDistricts::find($distic)->members()->get();
            return view('Admin.Users.showUserdetails',['users'=>$users]);
        
    }

    public function updateRank(Request $request, $id){

       $user =  User::find($id);
       $user->numbering = $request->reankNumber;
       $user->save();

       return redirect()->back()->with(['updated'=>true]);

    }

    public function updateUser($userId){
        
        $user = User::whereId($userId)->get();
        $userRoles = User::whereId($userId)->first()->roles();
        $allRoles= Role::all();

        return view('Admin.Users.showSingleUser',['user'=>$user,'roles'=>$allRoles]);

    }


    public function showallStates(){
        $states = CountryStates::all();
        return view('Users.showStates',['states'=>$states,"admin"=>true]);
    }

    public function showLocation($type,$id,$action){
        
        if($action == 'show'){
            $val = 1;
        }else {
            $val = 0;
        }

        if($type == 'state'){
            $state = CountryStates::find($id);
            $state->show = $val;
            $state->save();
            return redirect()->back();
        }elseif($type == 'district'){
            $district = StatesDistricts::find($id);
            $district->show = $val;
            $district->save();
            return redirect()->back();
        }else {
            return abort(404);
        }
    }


    public function changeImage(Request $request, $id){
        $state = CountryStates::find($id);
        $state->backgroundImage = $request->backgoundImage;
        $state->save();
        return  redirect()->back();
    }

    public function showDistricts($state){
        $districts = CountryStates::findOrFail($state)->districts()->get();
        $currentState = CountryStates::where('id',$state)->first();
        return view('Users.showDistricts',['districts'=>$districts,'state'=>$currentState]);
    }

    public function notifiactions(){

        $userDetails = User::find(auth()->user()->id);

        if($userDetails->hasAnyRoles(['admin','superAdmin'])){
            return Notification::orderBy('id', 'DESC')->get();
        }else{
            if($userDetails->position == 'user'){
                return Notification::where('type','user')->orderBy('id', 'DESC')->get()
                ;
            }else{
                return Notification::where('type','member')->orderBy('id', 'DESC')->get();
            }
        }
    }

    public function validateUser($id){

        $user = User::find($id);
        $distic = StatesDistricts::find($user->dis_id);
        
        if($user->dis_id && $distic->state_id){
            $state = CountryStates::find($distic->state_id);
        }else{
            $distic = false;
            $state = false;
        }
        $roles = $user->roles()->get();
        if($user->payment()->first()){
            $payment = $user->payment()->first();
        }else{
            $payment = false;
        }
        $skills = $user->skills()->first();

        $user->district = $distic;
        $user->state = $state;
        $user->roles = $roles;
        $user->skills = $skills;
        $user->payments = $payment;

        return view('Admin.Users.validateUser',['user'=>$user]);
    }

    public function approveUser($type,$userID){
        $user = User::find($userID);
        if($type == 'approve'){
            $user->approved = 1;
        }else{
            $user->approved = 0;
        }
        $user->save();
         return redirect()->back();
    }

    public function changeRole(Request $request){

        $user = User::find($request->userId);

        if($request->role == 'admin'){
            $role = Role::where('name','admin')->first();
            $user->roles()->attach($role);
        }elseif($request->role == 'post manager'){
            $secondrole = Role::where('name','PostManager')->first();
            $user->roles()->attach($secondrole);
        }else{
            // return 'comming from else';
            $thirdRole = Role::where('name','user')->first();
            $user->roles()->detach();
            $user->roles()->attach($thirdRole);
        }
        return  redirect()->back();
    }

    public function changeposition(Request $request){

        // return $request;
        $user = User::find($request->userId);
        $user->position = $request->position;
        $user->save();

        return redirect()->back();

    }

    


}
