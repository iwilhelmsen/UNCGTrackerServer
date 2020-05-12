<?php

class Actor extends ModelObject
{
	private int $participantId;
	private float $distance;

	function Actor()
	{
		super();
	}

	/* function Actor(int $_id, string $_uuid, bool $_active, int $_sortValue, int $_participantId, float $_distance)
	{
		$this->setId($_id);
		$this->setUuid($_uuid);
		$this->setActive($_active);
		$this->setSortValue($_sortValue);
		$this->setParticipantId($_participantId);
		$this->setDistance($_distance);
	} */

	// ======================Getters==================/
	/**
	 *
	 * @return mixed
	 */
	public function getParticipantId()
	{
		return $this->participantId;
	}

	/**
	 *
	 * @return mixed
	 */
	public function getDistance()
	{
		return $this->distance;
	}

	// ======================Setters==================/
	/**
	 *
	 * @param mixed $participantId
	 */
	public function setParticipantId($_participantId)
	{
		$this->participantId = $_participantId;
	}

	/**
	 *
	 * @param mixed $distance
	 */
	public function setDistance($_distance)
	{
		$this->distance = $_distance;
	}
}
?>