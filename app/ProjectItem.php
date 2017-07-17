<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectItem extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'project_items';

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
    protected $fillable = ['project_id', 'image', 'name', 'price'];

    public function project()
    {
      return $this->belongsTo('App\Project');
    }


}
