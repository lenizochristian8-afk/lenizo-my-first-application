<?php 
 
use Illuminate\Support\Facades\Route; 
use App\Models\Job; 
 
Route::get('/', function () { 
    return view('home'); 
}); 
 

Route::get('/jobs', function () {
return view('jobs.index', [ // Changed
'jobs' => \App\Models\Job::with('employer')->paginate(10)
]);
});

Route::get('/jobs/create', function () {
return view('jobs.create');
});

Route::get('/jobs/{job}', function (\App\Models\Job $job) {
return view('jobs.show', ['job' => $job]); // Changed
});

Route::post('/jobs', function () {
request()->validate([
'title' => ['required', 'min:3'],
'salary' => ['required']
]);
\App\Models\Job::create([
'title' => request('title'),
'salary' => request('salary'),
'employer_id' => 1
]);
return redirect('/jobs');
});

Route::get('/jobs/{job}/edit', function (\App\Models\Job $job) {
return view('jobs.edit', ['job' => $job]);
});
// Update a Job
Route::patch('/jobs/{job}', function (\App\Models\Job $job) {
// validation
request()->validate([
'title' => ['required', 'min:3'],
'salary' => ['required']
]);
// update
$job->update([
'title' => request('title'),
'salary' => request('salary'),
]);
// redirect
return redirect('/jobs/' . $job->id);
});

Route::delete('/jobs/{job}', function (\App\Models\Job $job) {
$job->delete();
return redirect('/jobs');
});