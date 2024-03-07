<?php

namespace App\Listeners;

use App\Events\UpdateStudent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Student;

class UpdateARandomStudentDetails
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\UpdateStudent  $event
     * @return void
     */
    public function handle(UpdateStudent $event)
    {
        $current_timestamp = Carbon::now()->toDateTimeString();

        $student = $event->student;

        $studentData = Student::find($student->id);
        $studentData->updated_at = $current_timestamp;
        $studentData->save();

        return $studentData;
    }
}
