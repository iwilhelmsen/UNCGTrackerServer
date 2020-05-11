<?php
require ("ModelConstants.php");

// includes area.
abstract class ModelObject
{
	protected int $id = MODELOBJECT_DEFAULT_ID;
	protected String $uuid;
	protected boolean $active = true;
	protected int $sortValue = MODELOBJECT_DEFAULT_SORTVALUE;

	function ModelObject()
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

	// ======================Setters==================/
	/**
	 *
	 * @param mixed $id
	 */
	public function setId($_id)
	{
		$this->id = $_id;
	}

	/**
	 *
	 * @param mixed $uuid
	 */
	public function setUuid($_uuid)
	{
		$this->uuid = $_uuid;
	}

	/**
	 *
	 * @param mixed $active
	 */
	public function setActive($_active)
	{
		$this->active = $_active;
	}

	/**
	 *
	 * @param mixed $sortValue
	 */
	public function setSortValue($_sortValue)
	{
		$this->sortValue = $_sortValue;
	}

	// ======================Getters==================/
	/**
	 *
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 *
	 * @return mixed
	 */
	public function getUuid()
	{
		return $this->uuid;
	}

	/**
	 *
	 * @return mixed
	 */
	public function getActive()
	{
		return $this->active;
	}

	/**
	 *
	 * @return mixed
	 */
	public function getSortValue()
	{
		return $this->sortValue;
	}
}
?>