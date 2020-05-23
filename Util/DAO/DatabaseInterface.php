<?php
namespace Util\DAO;

/**
 *	This interface governs the required functions for interacting with this code base.
 * @author Ian Wilhelmsen
 * last updated:
 */
interface DatabaseInterface
{
	function creatModelObject(object $targetClass);
	function readModelObject(array $modelObjectAttributes, object $targetClass);
	function updateModelObject(object $targetClass);
	function deleteModelObject(object $targetClass);
}