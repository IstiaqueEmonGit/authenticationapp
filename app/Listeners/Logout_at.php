<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Logout_at
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $user_id = auth()->id();
        $time = Carbon::now()->toDateTimeString();
        DB::table('logininfos')->where('user_id', $user_id)->update([
            'logged_out_at' => $time
            
        ]);
    }
}
