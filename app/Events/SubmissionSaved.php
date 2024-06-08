<?php

namespace App\Events;

use App\Models\Submission;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SubmissionSaved implements ShouldQueue
{
    use Dispatchable, SerializesModels;
    public Submission $submission;

    public function __construct(Submission $submission)
    {
        $this->submission = $submission;
    }

}
