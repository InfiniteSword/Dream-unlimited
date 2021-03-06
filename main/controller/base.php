<?php
defined('APP_PATH') or exit('Access Denied');

class base extends spController {
	// 构造函数
	public function __construct() {
		parent::__construct();

		$this->conf = $conf = spClass('m_siteConfig')->find();

		if ($conf['close']) {
			exit($conf['message']);
		} else {
			$this->__SITE = rtrim($conf['siteurl'], '/');
			$this->__RESOURCE = $this->__SITE . '/' . 'assets';

		};
	}
}