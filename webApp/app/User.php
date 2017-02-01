<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

		// Lists each user's program
		public function program() {
			return $this->belongsTo('App\Program');
		}
		
		// Lists requirements for each user depending on program. Note to self: International student requirements must be handled. Discrete statement
		public function requirements() {
			return $this->belongsToMany('App\Requirement', 'user_requirement', 'user_id', 'requirement_id');
		}
}
