<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {
    //dd('create');
    return view('jobs.create');
});
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    //dd($job);
    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function () {
    // dd('hello from the post request');
    // dd(request('title'));
    // validation

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');

});


Route::get('/contact', function () {
    return view('contact');
});