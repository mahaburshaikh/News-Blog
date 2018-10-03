<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class roll extends Model
{
    public function permissions()
    {
    	return $this->belongsToMany('App\Model\admin\permission');
    }
}
