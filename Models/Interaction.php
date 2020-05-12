<?php

class Interaction extends ModelObject
{
	private array $actors;
	private string $startDate;
	private string $endDate;
	private string $location;

	function function_name()
	{
		super();
		$this->setStartDate(date("Y-m-d H:i:s"));
	}

	// ======================Getters==================/
	/**
	 * @return mixed
	 */
	public function getActors()
	{
		return $this->actors;
	}

	/**
	 * @return mixed
	 */
	public function getStartDate()
	{
		return $this->startDate;
	}

	/**
	 * @return mixed
	 */
	public function getEndDate()
	{
		return $this->endDate;
	}

	/**
	 * @return mixed
	 */
	public function getLocation()
	{
		return $this->location;
	}
	// ======================Setters==================/
	/**
	 * @param mixed $actors
	 */
	public function setActors(array $_actors)
	{
		$this->actors = $_actors;
	}

	/**
	 * @param mixed $startDate
	 */
	public function setStartDate(string $_startDate)
	{
		$this->startDate = $_startDate;
	}

	/**
	 * @param mixed $endDate
	 */
	public function setEndDate(string $_endDate)
	{
		$this->endDate = $_endDate;
	}

	/**
	 * @param mixed $location
	 */
	public function setLocation(string $_location)
	{
		$this->location = $_location;
	}
}
?>