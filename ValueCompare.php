<?php
/**
* 
*/
class ValueCompare
{

	function __construct($validate, $entity)
	{
		$this->validate = $validate;
		$this->entity = $entity;
	}
	// name
	// fieldName
	// fieldValue
	// otherName
	// otherValue
	public function validate(){
		if(array_get($this->entity, array_get($this->validate, 'fieldName')) != $this->fieldValue){
			HmsException::occur($fieldName. '必须等于', $this->fieldValue);
		}
	}
}