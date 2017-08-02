<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Service extends Model
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
               'source' => 'name'
           ]
       ];
    }

    protected $table = 'services';

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
    protected $fillable = ['banner_image', 'image', 'name', 'description', 'type', 'publish'];

    public function serviceitem()
    {
        return $this->hasMany('App\ServiceItem');
    }


}
