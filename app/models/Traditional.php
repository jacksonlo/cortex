<?php

class Traditional extends Eloquent {
	
	protected $guarded = ['id'];

	protected $table = 'traditional';

	public function users()
	{
		return $this->belongsToMany('User', 'users_questions', 'traditional_id', 'user_id')
					->withPivot('id', 'created_at');
	}

}