<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Junction Table: programs and requirements
class Program_Requirement extends Model
{
    // Uses foreign key to link program table with junction table
		public function programs() {
			return $this->belongsToMany("App\Program", "programs");
		}
}
