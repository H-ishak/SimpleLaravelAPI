<?php

namespace App\Observers;

use App\Events\SubmissionSaved;
use App\Models\submission;

class SubmissionObserver
{
    /**
     * Handle the submission "created" event.
     */
    public function created(submission $submission): void
    {
        event(new SubmissionSaved($submission));
    }

    /**
     * Handle the submission "updated" event.
     */
    public function updated(submission $submission): void
    {
        //
    }

    /**
     * Handle the submission "deleted" event.
     */
    public function deleted(submission $submission): void
    {
        //
    }

    /**
     * Handle the submission "restored" event.
     */
    public function restored(submission $submission): void
    {
        //
    }

    /**
     * Handle the submission "force deleted" event.
     */
    public function forceDeleted(submission $submission): void
    {
        //
    }
}
