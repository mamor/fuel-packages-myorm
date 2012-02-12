<?php
namespace MyOrm;

class Observer_UpdatedIp extends \Orm\Observer
{
	public static $property = 'updated_ip';
	protected $_property;

	public function __construct($class)
	{
		$props = $class::observers(get_class($this));
		$this->_property = isset($props['property']) ? $props['property'] : static::$property;
	}

	public function before_save(\Orm\Model $obj)
	{
		if ($obj->is_new() or $obj->is_changed())
		{
			$obj->{$this->_property} = \Input::real_ip();
		}
	}
}

// End of file createdip.php
