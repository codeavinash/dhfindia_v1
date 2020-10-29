<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\uiController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\PostCategoryController;
use App\Http\Controllers\Admin\userDetailsController;
use App\Http\Controllers\userController;
use App\Http\Controllers\genralController;
use App\Http\Controllers\UserNotification;
use App\Models\BannerImage;
use App\Models\PostCategory;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $bannerImges = BannerImage::all();
    $posts = PostCategory::where('id','2')->first()->posts()->orderBy('id', 'DESC')->get();
    // return $posts;
    return view('welcome',['bannerimages'=>$bannerImges,'posts'=>$posts]);
})->name('root');




Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('user')->name('user')->group(function () {
    Route::get('showallevents',[userController::class ,'showAllEventCat'])->name('.showallevents');
    Route::get('showposts/{id}',[userController::class,'showPostbycat'])->name('.showPostbycat');
    Route::get('post/{id}',[userController::class,'showSinglePost'])->name('.showSinglePost');
    Route::get('joinus',[userController::class,'joinasMember'])->name('.joinAsMember');
    Route::get('otherMembers',[userController::class,'showStates'])->name('.showStates');
    Route::get('otherMembers/{state}',[userController::class,'showDistricts'])->name('.showDistricts');
    Route::get('otherMembers/{state}/{dis_id}',[userController::class,'showMembersOther'])->name('.showMembersOther');
    Route::get('getDistrict',[userController::class,'getDistricts']);
    Route::get('donateUs',[userController::class,'donateUs'])->name('.donateUs');
});


Route::prefix('user')->name('user')->middleware('auth')->group(function (){
    Route::post('addcomment/{id}',[userController::class,'addcomment'])->name('.addnewcomment');
    Route::get('addlike/{id}',[userController::class,'addLike'])->name('.addLike');
    Route::post('joinus',[userController::class,'joinusForm'])->name('.joinusForm');
    Route::get('myProfile',[userController::class,'myprofile'])->name('.showmyprofile');
    Route::post('changeProfile',[userController::class,'changeProfile'])->name('.changeProfile');
    Route::get('notifiactions',[userDetailsController::class,'notifiactions'])->name('notifiactions');
    
});


Route::prefix('admin')->name('admin')->middleware('can:managePost')->group(function () {
    // POST ROUTES 
    Route::resource('post',PostController::class);
    Route::resource('Postcat',PostCategoryController::class);

    // USER INTERFACE ROUTES ==
    Route::resource('uioptions', uiController::class);
    Route::get('uiOptions/showallImage',[uiController::class,'showall'])->name('.showallimage');

    Route::get('appriveComment/{id}',[PostController::class,'approveComments'])->name('.approveComments');
    Route::get('disapprove/{id}',[PostController::class,'disapprove'])->name('.disapprove');
    
});




Route::prefix('admin')->name('admin')->middleware('can:SuperAndAdmin')->group(function () {
    Route::get('showalluser/{role}',[userDetailsController::class,'showall'])->name('.showallusers');
    Route::get('otherMembers',[userDetailsController::class, 'showallStates'])->name('.showallStates');
    Route::get('showlocation/{type}/{id}/{action}',[userDetailsController::class,'showLocation'])->name('.locationoption');
    Route::get('changeimage/{id}',[userDetailsController::class,'changeImage'])->name('.changeImage');
    Route::get('showDistrict/{state}',[userDetailsController::class,'showDistricts'])->name('.showDistrictTable');
    Route::get('validateUser/{id}',[userDetailsController::class,'validateUser'])->name('.validateUser');
    Route::get('approveUser/{type}/{UserId}',[userDetailsController::class,'approveUser'])->name('.approveUser');
    Route::post('changerole',[userDetailsController::class,'changeRole'])->name('.changeRole');
    Route::post('changeposition',[userDetailsController::class,'changeposition'])->name('.changeposition');
    Route::get('makeNotification',[UserNotification::class,'makeNotifiaction'])->name('.makeNotifiaction');
    Route::get('createNotification/payment',[UserNotification::class,'paymentNotification'])->name('.paymentNotification');
    Route::post('createNotification',[UserNotification::class,'custumNotification'])->name('.custumNotification');
    Route::get('deleteNotification/{id}',[UserNotification::class,'deleteNotification'])->name('.deleteNotification');
});


Route::get('aboutus',[genralController::class,'aboutus'])->name('aboutus');

Route::get('contactUs',[genralController::class,'contactUs'])->name('contactUs');
Route::post('contactUs',[genralController::class,'submitContactUs'])->name('conatctUsSubmit');