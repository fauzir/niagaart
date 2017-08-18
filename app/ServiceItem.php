<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceItem extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'service_items';

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
    protected $fillable = ['service_id', 'image', 'name', 'description', 'detail'];

    public function service()
    {
        return $this->belongsTo('App\Service');
    }

    public function product()
    {
        return $this->hasMany('App\Product');
    }


}
