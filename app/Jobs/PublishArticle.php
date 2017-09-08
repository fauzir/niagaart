<?php

namespace App\Jobs;

use App\Blog;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class PublishArticle implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $id;
    /**
     * Create a new job instance.
     *
     * @return void
     */
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
        $blog = Blog::find($this->id);
        $blog->published = true;
        $blog->published_at = '';
        // $blog->updated_at = date_format(Carbon::now(), "Y-m-d H:i:s.000");
        $blog->updated_at->toFormattedDateString();
        $blog->updated_at->format('Y-m-d H:i:s.000');
        $blog->save();
    }
}
