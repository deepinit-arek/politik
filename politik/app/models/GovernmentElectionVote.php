<?php

/**
 * Class: GovernmentElectionVote
 *
 * @see Eloquent
 */
class GovernmentElectionVote extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'government_election_candidate';

	/**
	 * Many-to-one relationship with GovernmentElectionCandidate.
	 */
	public function candidate()
	{
		return $this->belongsTo('GovernmentElectionCandidate', 'candidate_id');
	}

	/**
	 * Many-to-one relationship with User.
	 */
	public function elector()
	{
		return $this->belongsTo('User', 'elector_id');
	}
}
