<?php
namespace Util\DAO;

/**
 *
 * @author Ian Wilhelmsen
 */
class MSSQLDatabaseImpl implements DatabaseInterface
{

	/**
	 */
	public function __construct()
	{}

	/**
	 */
	function __destruct()
	{}

	public function creatModelObject(object $targetClass)
	{}

	public function deleteModelObject(object $targetClass)
	{}

	public function readModelObject(array $modelObjectAttributes, object $targetClass)
	{}

	public function updateModelObject(object $targetClass)
	{}
}

