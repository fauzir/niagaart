<?php

namespace App\Console;

use App\Blog;
use App\Console\Commands\SchedulerDaemon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        SchedulerDaemon::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        if (Blog::where('published', false)->orderBy('published_at', 'asc')->count() > 0) {
            $article = Blog::where('published', false)->orderBy('published_at', 'asc')->first();
            $date = date_create(Blog::find($article->id)->published_at);
            $hour = date_format($date, 'G');
            $min = date_format($date, 'i');
            $day = date_format($date, 'j');
            $month = date_format($date, 'n');
            // $schedule->call('App\Http\Controllers\AdminBlog\BlogController@publishArticle', ['id' => $article->id])->cron($min.' '.$hour.' '.$day.' '.$month.' *')->timezone('Asia/Jakarta');
            $schedule->call('App\Http\Controllers\AdminBlog\BlogController@publishArticle', ['id' => $article->id])->dailyAt('13:33');
            $schedule->command('queue:work --once')->cron($min.' '.$hour.' '.$day.' '.$month.' *')->timezone('Asia/Jakarta');
        }
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
