<?php
/**
 * TomatoCart Open Source Shopping Cart Solution
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License v3 (2007)
 * as published by the Free Software Foundation.
 *
 * @package		TomatoCart
 * @author		TomatoCart Dev Team
 * @copyright	Copyright (c) 2009 - 2012, TomatoCart. All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl.html
 * @link		http://tomatocart.com
 * @since		Version 2.0
 * @filesource  ./system/tomatocart/controllers/account/${nameAndExt}
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class ${name?capitalize} extends TOC_Controller {
    
	public function __construct()
	{
        parent::__construct();
	}
    
	public function index()
    {
        $this->template->build('${name}/${name}');
	}
}

/* End of file ${nameAndExt} */
/* Location: ./system/tomatocart/controllers/account/${nameAndExt} */