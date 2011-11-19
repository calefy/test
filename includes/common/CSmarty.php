<?php
define('MY_FILE_DIR',str_replace('\\','/',dirname(__FILE__)) );
define('MY_SMARTY_DIR', MY_FILE_DIR.'/Smarty-3.1.5');

require_once MY_SMARTY_DIR.'/libs/Smarty.class.php';

/**
 * Copyright (c) 2011
 * All rights reserved.
 *
 * 文件名称：CSmarty.php
 * 版    本：1.0
 * 作    者：linfei
 * ready
 */
class CSmarty extends Smarty {

	 function __construct() {
			//类构造函数.创建实例的时候自动配置
		 	parent::__construct();

			$this->setTemplateDir( MY_FILE_DIR.'/../../templates/' );
			$this->setCompileDir( MY_SMARTY_DIR.'/templates_c/' );
			$this->setConfigDir( MY_SMARTY_DIR.'/configs/' );
			$this->setCacheDir( MY_SMARTY_DIR.'/cache/' ); 
			
			$this->debugging = false;
			$this->caching = 0;
			$this->cache_lifetime = 60*60*24;
			$this->left_delimiter = '{{';
			$this->right_delimiter = '}}';

	 }

}

?>
