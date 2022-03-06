<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'test', 'namespace' => 'App\Http\Controllers\Test'], function(){

    Route::get('/',function(){
        return view('test');
    });

Route::get('test','testController@index')->name('test');
Route::get('show','testController@show');
Route::get('showText','testController@showText')->name('user');
Route::get('dbtest','dbtestController@index')->name('dbtest');
});

Route::group(['prefix'=>'/user','namespace'=>'App\Http\Controllers','middleware'=>'auth'],function(){
    Route::get('/showusers','UserController@show')->name('users');
    //where to prevent user from add/pass string to url
    Route::get('/showuser/{id}','UserController@showUser')->where('id','[0-9]+');
    Route::get('/','UserController@show');
});



///////////////// Route returning /////////////////////////
//you can return html tags
Route::get('/html', function(){
    return '<div style="color:blue;text-align:center;">Welcome</div>';
});
//you can return list object
Route::get('/list', function(){
    return ['Luqman', 'luqman@gmail.com'];
});
//you can return json object
Route::get('/json', function(){
    return Response()->json(['name'=>'Luqman','email'=>'luqman@gmail.com']);
});
//you can return function
Route::get('/fun', function(){
    return redirect('/');
});

Route::group(['prefix'=>'/tailwind','namespace'=>'App\Http\Controllers'],function(){

    Route::get('/','TailwindController@index')->name('tailwind');
});

