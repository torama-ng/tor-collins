<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
        // Table Name 
        protected $table = 'resumes';

        // Primary Key
        public $primaryKey = 'id';
}
