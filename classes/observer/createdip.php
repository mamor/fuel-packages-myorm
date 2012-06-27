<?php
namespace MyOrm;

class Observer_CreatedIp extends \Orm\Observer
{
	public static $property = 'created_ip';
	protected $_property;

	public function __construct($class)
	{
		$props = $class::observers(get_class($this));
		$this->_property = isset($props['property']) ? $props['property'] : static::$property;
	}

	public function before_insert(\Orm\Model $obj)
	{
		$obj->{$this->_property} = \Input::real_ip();
	}
}

// End of file createdip.php
