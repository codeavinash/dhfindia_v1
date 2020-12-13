<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\ContactUs;



class UserNotification extends Controller
{
    public function makeNotifiaction(){

        $notifications = Notification::all();

        return view('Admin.Users.makeNotification',['notifications'=>$notifications]);
    }

    public function paymentNotification(){
        
        Notification::create([
            'type'=>'member',
            'notification'=>'your monthely membership is getting over pay and support your ngo',
            'link'=>' avinash'
        ]);

        return  redirect()->back()->with('success','notification for payment of member is created');

    }

    public function custumNotification(Request $request){

        if($request->link == 'null'){
            $link = null;
        }else{
            $link = $request->link;
        }

        Notification::create([
            'type'=>$request->userType,
            'notification'=>$request->notificationText,
            'link'=>$link
        ]);

        return redirect()->back()->with('success','notification created successfully');

    }

    public function deleteNotification($id){
        Notification::find($id)->delete();
        return redirect()->back()->with('success','notification deleted successfully');
    }

    public function contactsuTable(){
        $datas = ContactUs::orderBy('id','DESC')->get();
        return view('Admin.contactData',['contactDatas'=>$datas]);
    }

    public function deleteContactus($id){
        ContactUs::find($id)->delete();
        return redirect()->back()->with(['deleted'=>true]);
    }
}
