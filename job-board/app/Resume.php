<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
        // Table Name 
        protected $table = 'resume';

        // Primary Key
        public $primaryKey = 'id';

        public function user() {
                return $this->belongTo('App\User');
        }
}
