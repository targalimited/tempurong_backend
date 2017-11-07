<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoomType extends Model
{
	use SoftDeletes;
	
	/*
     * ============================================================================================================================================
     * Settings
     * ============================================================================================================================================
     */
	protected $dates = ['deleted_at'];
	
	/*
     * ============================================================================================================================================
     * Relationships
     * ============================================================================================================================================
     */
	public function room()
	{
		return $this->hasMany('App\Models\Room');
	}
	
	public function reservationDetails()
	{
		return $this->hasMany('App\Models\ReservationDetails');
	}
}
