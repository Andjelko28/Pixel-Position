<?php
use App\Models\Employer;
use App\Models\Job;

test('it belongs to employer', function () {
    // AAA
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);

    // Arrange

    // Act and Assert
    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags', function () {
    $job = Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});
