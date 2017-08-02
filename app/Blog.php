<?php

namespace App;

use Spatie\Feed\FeedItem;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Blog extends Model implements FeedItem
{
    use Sluggable;
    /**
     * The database table used by the model.
     *
     * @var string
     */
     public function sluggable()
     {
         return [
             'slug' => [
                 'source' => 'title'
             ]
         ];
     }

     public function getFeedItemId()
    {
        return $this->id;
    }

    public function getFeedItemTitle() : string
    {
        return $this->title;
    }

    public function getFeedItemSummary() : string
    {
        return $this->content;
    }

    public function getFeedItemUpdated() : Carbon
    {
        return $this->updated_at;
    }

    public function getFeedItemLink() : string
    {
        return action('BlogController@detail', [$this->url]);
    }

    public function getFeedItemAuthor() : string
    {
        return $this->author;
    }

    protected $table = 'blogs';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'category', 'image', 'content', 'author', 'comment'];

    public function blog_tag()
    {
       return $this->belongsToMany('App\BlogTag', 'blog_tag', 'tag_id', 'blog_id');
    }

    public function tag_blog()
    {
       return $this->belongsToMany('App\BlogTag', 'blog_tag', 'blog_id', 'tag_id');
    }


}
