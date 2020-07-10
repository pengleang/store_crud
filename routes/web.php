<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\FeedbackReceived;
use App\Mail\Replyback;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TaskController;
Route::resource('task', 'TaskController');
Route::get('contact', function () {
    return view('contact');
});
Route::post('contact', function (Request $request) {
    Validator::make($request->all(), [
        'name' => 'required|string',
        'email' => 'required|email',
        'comment' => 'required|string'
    ])->validate();

    Mail::to($request->get('email'))->send(      new FeedbackReceived(
                                                          $request->get('name'),
                                                          $request->get('comment')
        )
    );

    return redirect('/contact')->with([
        'success_message' => 'Your message has been sent!'
    ]);

});

Route::get('layouts/partials/navbar', function () {
    return view('layouts.partials.navbar');
});
Route::get('layouts/default', function () {
    return view('layouts.default');
});
Route::get('layouts/app', function () {
return view('layouts.app');
});

Route::get('fulltemplate', function () {
    return view('fulltemplate');
});
Route::get('full.template', function () {
    return view('fulltemplate');
});
Route::get('full/template', function () {
    return view('fulltemplate');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('welcome', function () {
return view('welcome');
});
Route::get('about', function () {
 return view('about');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/homeme', 'TasksController@hometest');
//Route::get('tasks/create', 'TasksController@create');
//Route::post('tasks', 'TasksController@store');
