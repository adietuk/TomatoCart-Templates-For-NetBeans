<?php
/**
 * TomatoCart Open Source Shopping Cart Solution
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License v3 (2007)
 * as published by the Free Software Foundation.
 *
 * @package     TomatoCart
 * @author      TomatoCart Dev Team
 * @copyright   Copyright (c) 2009 - 2012, TomatoCart. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl.html
 * @link        http://tomatocart.com
 * @since       Version 2.0
 * @filesource  ./system/tomatocart/modules/${name}/${nameAndExt}
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_${name?capitalize} extends TOC_Module {
    
    protected $code = '${name}';
    protected $author_name = 'TomatoCart';
    protected $author_url = 'http://www.tomatocart.com';
    protected $version = '1.0';
    
    public function __construct()
    {
        parent::__construct();
        $this->title = lang('box_${name}_heading');
    }
    
    public function index()
    {
        $data = array();
        return $this->load_view('index.php', $data);
    }
}

/* End of file ${nameAndExt} */
/* Location: ./system/tomatocart/modules/${name}/${nameAndExt} */
