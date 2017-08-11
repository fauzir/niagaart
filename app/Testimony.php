<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'testimonies';

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
    protected $fillable = ['image', 'subject', 'testimony', 'name', 'occupation'];

    
}
