<?php
class Manage{
	/**
	 * [__construct description]
	 * @param  {[type]} $tab    [description]
	 * @param  {[type]} $entity [description]
	 * @param  {[type]} $user   [description]
	 * @return {[type]}         [description]
	 */
	public function __construct($entity,$user)
	{
		$this->entity = $entity;
		$this->user = $user;
	}

	public function execute()
	{
		$v = $this->getAllValidate();
		if(empty($v))
		{
			info('empty validate');
			return true;
		}

		foreach($v as $validate)
		{
			$validator = new $name($validate,  $this->entity);
			$validator->validate();
		}
	}

	/**
 	* [getAllValidate description]
 	* @return {[type]} [description]
 	*/
	public function getAllValidate()
	{
		$all = Validate::query()->get();
		$all = $all ? $all->toArray() : [];
	}
}