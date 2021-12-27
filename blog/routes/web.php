<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\userController;
use App\Http\controllers\usercontroller2;
use App\Http\controllers\form;
use App\Http\controllers\formsubmit;
use App\Http\controllers\sessionController;
use App\Http\controllers\flashController;
use App\Http\controllers\uploadController;
use App\Http\controllers\memberController;
use App\Http\controllers\listController;
use App\Http\controllers\fatchController;
use App\Http\controllers\deleteController;
use App\Http\controllers\editController;
use App\Http\controllers\databaseController;
use App\Http\controllers\operationcontroller;
use App\Http\controllers\accessController;
use App\Http\controllers\mutatorController;
use Illuminate\Support\Str;
use App\Mail\SampleMail;

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
//this is the using the string functions 
// $data ="hey, your string is here";
// $data = Str::ucfirst($data);
// $data = Str::replaceFirst("Hey","hello",$data);
// $data = Str::camel($data);

// $data = Str::of($data)
// ->ucfirst($data)
// ->replaceFirst("Hey","helloo",$data)
// ->camel($data);
// echo $data;



// Route::get('/', function () {
//     return view('welcome');
// });

//this is use to send mail through laravel
Route::get('/', function () {
   return new SampleMail();
});
// this is the controller toturial
// Route::get("user/{id}",[userController::class,'show']);
                // this is the old version base formula
// Route::get("user",'userController@show');

// this is the view toturial
// Route::view("user", "user");
// Route::get('/user/{name}',function($name){
//     return view('user',["name"=>$name]);
// });
// Route::get("user/{user}", [userController::class , 'viewpage']);


// this is component in laravel toturial 
// Route::view("users","users");
// Route::view("about","about");

// this is blade toturial in laravel 
// Route::get("users",[userController::class,'viewpage']);
// Route::get("users",[userController::class,'viewpage']);


//this is the form submited tutorial
// Route::view("login","form");
// Route::post("login",[form::class,'login']);
// Route::view("login","form");

//this is the middleware tutorial
// Route::view("inner","inner");
// Route::view("check","check");
// Route::view("noaccess","noaccess");

//this is the group middleware tutorial
// Route::group(['middleware'=>['protectedPage']],function(){
//     Route::view("inner","inner");
// });

//this is the route midleware tutorial
// Route::view('inner','inner')-> middleware('protectPage');
// Route::view('check','check');
// Route::view('noaccess','noaccess');

// this is use to fetch data in simply way
// Route::get('user',[usercontroller2::class,'index']); 

// this is use to fetch data in through models 
// Route::get("data",[userController2::class,'getData']);

//this route is use to save data to diff methods like get post put and delete
// Route::get("formsubmit",[formsubmit::class,'submit']);
// Route::post("formsubmit",[formsubmit::class,'submit']);
// Route::put("formsubmit",[formsubmit::class,'submit']);
// Route::delete("formsubmit",[formsubmit::class,'submit']);
// Route::view("submit","submit");


//this is the session tutorial
// Route::view('session','session');
// Route::view('profile','profileSession');

// //logout Route start here
// Route::get('/logout', function(){
// if(session()->has('username')){
//     session()->pull('username',null);
// }
// return redirect('session');
// });

// Route::get('/session', function(){
//     if(session()->has('username')){
//        return redirect('profile');
//     }
//     return view('session');
// });

// Route::post('sessionc',[sessionController::class,'session']);

//this is the flash session Route
// Route::post('store',[flashController::class,'flash']);
// Route::view('flash','flashSession');

// //this is the file upload tutorail
// Route::view('upload','upload');
// Route::post('upload',[uploadController::class,'file']);

//this is the localization tutorial in laravel
// Route::view('profile','profile');

// Route::get('/profile/{lang}', function($lang){
//     App::setlocale($lang);
//     return view('profile');
// });

//this is route use to upload data in database
// Route::view('add','addmember');
// Route::post('addthis',[memberController::class,'addData']);

//this is the fatch data in pagination tutorial 
// Route::view('list','list');
// Route::get('listdata',[listController::class,'list']);

//this is the fetch data maunally
// Route::view('fatch','fatch');
// Route::get('fatch',[fatchController::class,'fatch']);

//this route use which first of all fatch data then delete it
// Route::view('delete','listdelete');
// Route::get('delete',[deleteController::class,'list']);
// Route::get('delete/{id}',[deleteController::class,'delete']);

//this is the adit data in database throuth html form
// Route::view('edit','edit');
// Route::get('list',[editController::class,'editData']);
// Route::get('edit/{id}',[editController::class,'edit']);
// Route::post('edit',[editController::class,'editfile']);

//this is route use in to database related like insert data fatch data updata and etc
// Route::get('database',[databaseController::class,'Database']);
// Route::get('op',[operationcontroller::class,'operation']);

//this is route use to access data in database and modify the data
// Route::get('access',[accessController::class,'access']);

//this route is use to mutator which mean some data are defult
// Route::get('mutator',[mutatorController::class,'mutator']);