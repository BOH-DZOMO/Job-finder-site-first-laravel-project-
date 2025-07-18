<?php

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;

// it ('belongs to an employer', function () {
//     //arrange act assert
//     $employer = Employer::factory()->create();

//     $job = Job::factory()->create([
//         'employer_id' => $employer->id,  
//     ]);

//     expect($job->employer->is($employer))->toBeTrue();
// });

it ('can have tags', function () {
    //arrange act assert
    $job  = Job::factory()->create();
    // $tag = Tag::create(["name"=>"Frontend", "slug" => "Frontend"]);
    $job->tag("Frontend");
    expect($job->tags)->ToHaveCount(1);
});