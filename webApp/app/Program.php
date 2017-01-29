<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    // Uses a foreign key to show which department a program belongs to
		public function department() {
			return $this->belongsTo('App\Department');
		}
}
