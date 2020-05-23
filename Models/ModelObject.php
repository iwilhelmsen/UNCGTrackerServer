<?php
namespace Models;
//require ("ModelConstants.php");

// includes area.
abstract class ModelObject
{
	protected int $id = MODELOBJECT_DEFAULT_ID;
	protected string $uuid;
	protected bool $active = true;
	protected int $sortValue = MODELOBJECT_DEFAULT_SORTVALUE;

	function __constructor()
	{
		$this->generateUUID();
	}

	public function makeActive()
	{
		if ($this->getActive()) {
			$this->setActive(false);
		} else {
			$this->setActive(true);
		}
	}

	private function generateUUID()
	{
		$this->setUuid(uniqid(MODELOBJECT_UUID_INSTANCE_PREFIX, true));
	}

	// ======================Getters==================/
	/**
	 * Returns the ID
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Returns the UUID.
	 * @return string
	 */
	public function getUuid()
	{
		return $this->uuid;
	}

	/**
	 * Returns if this object is active or not
	 * @return bool
	 */
	public function getActive()
	{
		return $this->active;
	}

	/**
	 *
	 * @return int
	 */
	public function getSortValue()
	{
		return $this->sortValue;
	}

	// ======================Setters==================/
	/**
	 *
	 * @param mixed $id
	 */
	public function setId(int $_id)
	{
		$this->id = $_id;
	}

	/**
	 *
	 * @param mixed $uuid
	 */
	public function setUuid(string $_uuid)
	{
		$this->uuid = $_uuid;
	}

	/**
	 *
	 * @param mixed $active
	 */
	public function setActive(bool $_active)
	{
		$this->active = $_active;
	}

	/**
	 *
	 * @param mixed $sortValue
	 */
	public function setSortValue(int $_sortValue)
	{
		$this->sortValue = $_sortValue;
	}
}
?>