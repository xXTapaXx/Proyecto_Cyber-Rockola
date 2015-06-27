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

    public  $id;
    public function __construct($id)
    {
       $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        system('mplayer /home/elias/Desktop/softwareLibre/proyecto_1/Proyecto_Cyber-Rockola/public/uploads/"'.$this->id.'"');
        //system('mplayer /var/www/html/Proyecto/public/uploads/"'.$this->id.'"');
    }
}
