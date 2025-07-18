<?php
//to use parginate u may need to build a query to fetch for the jobs with  
//featured and then parginate 1.e infact recent jobs and feautured jobs should be 2 diff objects
//rember latest
//for tags let users write their own tags, in real time 
//check the db for tags alraedy available so they can choose it, checkout upworks implementation
namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use App\Models\Tag;  
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //     $job = Job::all()->groupBy("featured");

            $job = Job::with(["employer","tags"])->latest()->get()->groupBy("featured");
        return view('jobs.index',[
            "featuredJobs"=>$job[1],
            "jobs"=>$job[0],
            "tags"=>Tag::all(),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("jobs.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $attributes = $request->validate([
        "title"=>["required"],
        "salary"=>["required"],
        "location"=>["required"],
        "work_location"=>["required", Rule::in(["On-Site", "Remote"])],
        "schedule"=>["required", Rule::in(["Part Time", "Full Time"])],
        "url"=>["required","active_url"],
        "tags"=>["nullable"],
       ]);
       $attributes["featured"] = $request->has('featured');
       $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, "tags"));

       if ($attributes["tags"] ?? false){
            foreach ((explode(" ",$attributes["tags"])) as $tag) {
              $job->tag($tag);  
            }
       }
       return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
