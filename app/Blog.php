<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Blog extends Model
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
    protected $fillable = ['title', 'category', 'image', 'content', 'author'];

    public function blog_tag()
    {
       return $this->belongsToMany('App\BlogTag', 'blog_tag', 'tag_id', 'blog_id');
    }

    public function tag_blog()
    {
       return $this->belongsToMany('App\BlogTag', 'blog_tag', 'blog_id', 'tag_id');
    }


}
