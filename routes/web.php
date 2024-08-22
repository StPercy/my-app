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

// Route::get('/hallowelt', function () {
//     return "hallowelt 🦊";
// });
// 
// Route::get('/user/{id?}', function ($id = null) {
//     return "Der User hat die folgende Id:".$id;
// });
// 
// Route::get('/vorname/{vorname?}/nachname/{nachname?}', function ($vorname = null, $nachname = null) {
//     return "Hallo ".$vorname." ".$nachname . "🏴";
// });
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