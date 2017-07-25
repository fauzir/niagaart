<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blog_tags';

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
    protected $fillable = ['tag'];

    public function blog_tag()
    {
       return $this->belongsToMany('App\Blog', 'blog_tag', 'blog_id', 'tag_id');
    }

    public function tag_blog()
    {
       return $this->belongsToMany('App\Blog', 'blog_tag', 'tag_id', 'blog_id');
    }


}
