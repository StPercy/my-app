<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index() {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);

        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function create() {
        return view('jobs.create');
    }

    public function show(Job $job) {
        return view('jobs.show', ['job' => $job]);
    }

    public function store() { 
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
    }

    public function edit(Job $job) { 
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job) { 
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
    
    }

    public function destroy(Job $job) { 
        $job->delete();
        return redirect('/jobs');
    }
}
