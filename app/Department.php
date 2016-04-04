<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'department';
    protected $primaryKey = 'dep_id';
    public $timestamps = false;

    public function manager() {
    	return $this->belongsTo('App\Employee', 'mng_id');
    }
}
