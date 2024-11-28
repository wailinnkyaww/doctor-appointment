<?php

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('some/{name}/{age}', function ($name ,$age) {
    return "name is" . $name . "age is" . $age;
});
// Route::get('profile', function () {
//     return view('profile');
// });
Route::view('/home','home')->name('home');
Route::view('/profile','profile');
Route::get('/customer/male', function () {
    return view('/customer/male');
})-> name('male');
Route::get('/customer/female', function () {
    return view('/customer/female');
})->name('female');
Route::get('/customer/fav/fmonth', function () {
    return view('/customer/fav/fmonth');
})->name('favcust');
Route::get('test', function () {
    return view('test',['name'=>'<i><b>WAILLINNK</b></i>','age'=>14]);
});

Route::get( 'sum/{num1}/{num2}' , function ($num1 ,$num2){
    return $num1 + $num2;
});
Route::get('add/{a}/{b}',fn($a, $b)=>$a*$b);
//https://fakestoreapi.com/products
////API API API API 
Route::get('getData',function (){
    $data = file_get_contents('https://fakestoreapi.com/products');
    $jsondata = json_decode($data);
    $result = array_filter($jsondata, fn($j)=>$j->price<50);
    dd($result);
});

Route::get('laraveldata',function(){
    $data = Http::get('https://fakestoreapi.com/products')->object();
    $data = collect($data)->last();
    dd($data);
    // $data = $data->object();
    // dd($data[0]->description);
});

// POST METHOD TESTING //
Route::view('/customer','custRegister');
Route::post('posTest/{id}/{name}',function(Request $request,$id,$name){
    $userData = [
        'name' => $request->userName,
        'age' => $request->userAge,
        'address' => $request->userAddress
    ];
    dd($request->all(),$userData,$id,$name);
})->name('pp');

//controller part testing

Route::get('helloTest',[CustomerController::class,'outputHello']);
Route::post('posTest',[AdminController::class,'adminPostTest'])->name('pp');
Route::get('compactTest',[CustomerController::class,'compactFunct']);