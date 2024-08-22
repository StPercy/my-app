<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});




// WE

//Controller Routes 
Route::get('/helloworld', 'App\Http\Controllers\TestController@printMessage');

Route::get('/vorname/{vorname?}/nachname/{nachname?}', 'App\Http\Controllers\TestController@showName');

//Resource Routes 
Route::resource('/memories', 'App\Http\Controllers\MemoryController');
Route::resource('/certificates', 'App\Http\Controllers\CertificateController')
->except([ 'store', 'edit', 'update', 'destroy'])->names(['create' => 'certificate.certify']);    


//Route::get('/user/{name?}', 'App\Http\Controllers\TestController@showUsername')->name('userName');

//Standard Routes
//Route::get('/user/{id?}', function($id = null) {
//    return 'User has ID:  ' . $id;
//});

// Route::get('/vorname/{vorname?}/nachname/{nachname?}', function($vorname, $nachname) {
//     return 'Hallo ' . $vorname . ' ' . $nachname;
// })->name('VorUndNachname');

//Route::get('/redirect', function () {
//    return redirect('https://www.stefanpertschi.de');
//});

// Route::get('/hallowelt', function () {
//     return "hallowelt 🦊";
// });
// 
// 
// 
// Route::get('/user/setting', function () {
//     return "einstellungen";
// })->name("settings");
// 
// Route::get('/morin', function () {
//     return 'Das Denken, welches vereinfacht, 
//     ist zur Barbarei der Wissenschaft geworden. 
//     Dies ist die spezifische Barbarei unserer Zivilisation';
// })->name('morin');