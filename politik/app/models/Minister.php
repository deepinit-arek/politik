<?php

/**
 * Class: Minister
 *
 * @see Eloquent
 */
class Minister extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'minister';

	/**
	 * Many-to-one relationship with User.
	 */
	public function user()
	{
		return $this->belongsTo('User', 'minister_id');
	}

	/**
	 * Many-to-on relationship with Government.
	 */
	public function government()
	{
		return $this->belongsTo('Government');
	}
}
