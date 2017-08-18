<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogTagRel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blog_tag';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['blog_id', 'tag_id'];

}
