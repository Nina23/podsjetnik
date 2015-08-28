<?php

namespace App\Jobs;

use App;
use App\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;

class PromjenaJezika extends Job implements SelfHandling
{

    public function handle()
    {
        session()->set('locale', session('locale') == 'en' ? 'sr' : 'en');
    }
}
