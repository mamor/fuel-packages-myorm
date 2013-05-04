# MyOrm package auto save IP address when insert and update.
---

## Install
### Setup to fuel/packages/myorm
* Use composer https://packagist.org/packages/mp-php/fuel-packages-myorm
* git submodule add
* Download zip

## Edit app/config/config.php

	'packages'  => array(
		'orm',
		'myorm',
	),

## Edit $_observers

	protected static $_observers = array(
		'MyOrm\Observer_CreatedIp'=>array('events'=>array('before_insert')),
		'MyOrm\Observer_UpdatedIp'=>array('events'=>array('before_save')),
	);

