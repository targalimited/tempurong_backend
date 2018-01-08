<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
	
	/*
	 * ============================================================================================================================================
	 * Settings
	 * ============================================================================================================================================
	 */
	
	/*
	 * ============================================================================================================================================
	 * Relationships
	 * ============================================================================================================================================
	 */
	
	
	/*
	 * ============================================================================================================================================
	 * Mutator
	 * ============================================================================================================================================
	 */
	public function getContentEnAttribute($value)
	{
		return nl2br($value);
	}
	
	public function getContentScAttribute($value)
	{
		return nl2br($value);
	}
	
	public function getSubContentEnAttribute($value)
	{
		return nl2br($value);
	}
	
	public function getSubContentScAttribute($value)
	{
		return nl2br($value);
	}
}
