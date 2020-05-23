<?php
namespace Models;
class Participant extends ModelObject
{
	private string $userName;
	private int $participantStatus;
	private array $interactions;

	function __construct()
	{
		super();
	}

	function __construct1($_id, $_uuid, $_active, $_sortValue, $_userName, $_participantStatus)
	{
		$this->setId($_id);
		$this->setUuid($_uuid);
		$this->setActive($_active);
		$this->setSortValue($_sortValue);
		$this->setUserName($_userName);
		$this->setParticipantStatus($_participantStatus);
	}

	function loadInteractions()
	{
		// TODO stubbed
	}

	function loadByUserName($_userName)
	{
		// TODO stubbed
	}

	// ======================Getters==================/
	/**
	 *
	 * @return mixed
	 */
	public function getUserName()
	{
		return $this->userName;
	}

	/**
	 *
	 * @return mixed
	 */
	public function getParticipantStatus()
	{
		return $this->participantStatus;
	}

	/**
	 *
	 * @return mixed
	 */
	public function getInteractions()
	{
		return $this->interactions;
	}

	// ======================Setters==================/
	/**
	 *
	 * @param mixed $username
	 */
	public function setUserName($_username)
	{
		$this->userName = $_username;
	}

	/**
	 *
	 * @param mixed $participantStatus
	 */
	public function setParticipantStatus($_participantStatus)
	{
		$this->participantStatus = $_participantStatus;
	}

	/**
	 *
	 * @param mixed $interactions
	 */
	public function setInteractions($_interactions)
	{
		$this->interactions = $_interactions;
	}
}
?>