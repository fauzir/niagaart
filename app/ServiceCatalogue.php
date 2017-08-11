<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCatalogue extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'service_catalogues';

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
    protected $fillable = ['image_header', 'opening_title', 'opening_text'];

    
}
