<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

//Index Action, displays all jobs
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

// Create Action, displays a form to create a new job
Route::get('/jobs/create', function () {
    //dd('create');
    return view('jobs.create');
});

// Show Action, displays a single job
Route::get('/jobs/{job}', function (Job $job) { //instead of $id used $job with Route Model Binding
    // $job = Job::find($id);

    // //dd($job);
    return view('jobs.show', ['job' => $job]);
});

// Store Action, creates a new job
Route::post('/jobs', function () {
    // dd('hello from the post request');
    // dd(request('title'));

    // validation
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
        //'employer_id'=>rand(1, 10)
    ]);

    return redirect('/jobs');

});

// Edit Action, displays a form to edit an existing job
Route::get('/jobs/{job}/edit', function (Job $job) { //instead of $id used $job with Route Model Binding
    //$job = Job::find($id);

    //dd($job);
    return view('jobs.edit', ['job' => $job]);
});

// Update Action, updates an existing job
Route::patch('/jobs/{job}', function (Job $job) { //instead of $id used $job with Route Model Binding
    // authorize (on hold)

    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);
    // update the job 2 ways:

    //$job = Job::findOrFail($id);
    // $job->title = request('title');
    // $job->salary = request('salary');
    // $job->save();

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);
    //redirect to the job page
    return redirect('/jobs/' . $job->id);

});

// Delete Action, deletes an existing job
Route::delete('/jobs/{job}', function (Job $job) {
    // authorize (on hold)
    //Job::findOrFail($id)->delete();
    $job->delete();
    return redirect('/jobs');
});

// Contact Action, displays the contact page
Route::get('/contact', function () {
    return view('contact');
});