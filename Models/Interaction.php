<?php
namespace Models;
class Interaction extends ModelObject
{
	private array $actors;
	private string $startDate;
	private string $endDate;
	private string $location;

	function __construct()
	{
		super();
		$this->setStartDate(date("Y-m-d H:i:s"));
	}

	function __construct1(int $_id, string $_uuid, bool $_active, int $_sortValue, string $_startDate, string $_endDate, string $_location)
	{
		$this->setId($_id);
		$this->setUuid($_uuid);
		$this->setActive($_active);
		$this->setSortValue($_sortValue);
		$this->setStartDate($_startDate);
		$this->setEndDate($_endDate);
		$this->setLocation($_location);
	}

	function loadActors()
	{
		//TODO stubbed
	}

	// ======================Getters==================/
	/**
	 *
	 * @return mixed
	 */
	public function getActors()
	{
		return $this->actors;
	}

	/**
	 *
	 * @return mixed
	 */
	public function getStartDate()
	{
		return $this->startDate;
	}

	/**
	 *
	 * @return mixed
	 */
	public function getEndDate()
	{
		return $this->endDate;
	}

	/**
	 *
	 * @return mixed
	 */
	public function getLocation()
	{
		return $this->location;
	}

	// ======================Setters==================/
	/**
	 *
	 * @param mixed $actors
	 */
	public function setActors(array $_actors)
	{
		$this->actors = $_actors;
	}

	/**
	 *
	 * @param mixed $startDate
	 */
	public function setStartDate(string $_startDate)
	{
		$this->startDate = $_startDate;
	}

	/**
	 *
	 * @param mixed $endDate
	 */
	public function setEndDate(string $_endDate)
	{
		$this->endDate = $_endDate;
	}

	/**
	 *
	 * @param mixed $location
	 */
	public function setLocation(string $_location)
	{
		$this->location = $_location;
	}
}
?>