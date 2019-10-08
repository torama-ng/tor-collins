<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // Table Name 
    protected $table = 'jobs';

    // Primary Key
    public $primaryKey = 'id';

    public function user() {
        return $this->belongTo('App\User');
    }
}
