<?php 

class Participant extends ModelObject
{
	private string $username;
	private int $participantStatus;
	private array $interactions;

	function Participant() {
		super();
	}

	/* function Participant($_id, $_uuid, $_active, $_sortValue, $_userName, $_participantStatus) {
		$this->setId($_id);
		$this->setUuid($_uuid);
		$this->setActive($_active);
		$this->setSortValue($_sortValue);
		$this->setUsername($_username);
		$this->setParticipantStatus($_participantStatus);
	} */

	function loadInteractions()
	{
		//TODO stubbed
	}
	function loadByUserName($_userName)
	{
		//TODO stubbed
	}
	// ======================Getters==================/
	/**
	 * @return mixed
	 */
	public function getUsername()
	{
		return $this->username;
	}

	/**
	 * @return mixed
	 */
	public function getParticipantStatus()
	{
		return $this->participantStatus;
	}

	/**
	 * @return mixed
	 */
	public function getInteractions()
	{
		return $this->interactions;
	}

	// ======================Setters==================/
	/**
	 * @param mixed $username
	 */
	public function setUsername($_username)
	{
		$this->username = $_username;
	}

	/**
	 * @param mixed $participantStatus
	 */
	public function setParticipantStatus($_participantStatus)
	{
		$this->participantStatus = $_participantStatus;
	}

	/**
	 * @param mixed $interactions
	 */
	public function setInteractions($_interactions)
	{
		$this->interactions = $_interactions;
	}
}
?>