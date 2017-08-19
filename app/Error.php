<?php

/*
 * app/Error.php
 */
namespace App;

use Tylercd100\LERN\Models\ExceptionModel;

class Error extends ExceptionModel {

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
