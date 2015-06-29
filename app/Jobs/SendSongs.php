<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendSongs extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public  $song;
    public function __construct($parameter)
    {
       $this->song = $parameter;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        system('mplayer "'.public_path().'"/uploads/"'.$this->song.'"');
    }
}
