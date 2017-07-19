<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
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
