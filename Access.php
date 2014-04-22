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
 * @copyright   Copyright (c) 2009 - 2014, TomatoCart. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl.html
 * @link        http://tomatocart.com
 * @since       Version 2.0
 */
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * {name?capitalize} Access Modules Class
 * 
 * @package     TomatoCart
 * @subpackage  Modules
 * @category    Access
 * @author      TomatoCart Dev Team
 * @link        http://tomatocart.com
 */
class TOC_Access_${name?capitalize} extends TOC_Access {

    /**
     * Class Constructor.
     * 
     * @return  void    No value is returned.
     * 
     * @since   2.0.6
     */
    public function __construct()
    {
        parent::__construct();

        $this->group = 'misc';
        $this->module = '{name}';
        $this->sort_order = 100;

        $this->title = lang('access_configuration_title');
        $this->description = lang('access_configuration_description');
    }
}

/* End of file ${nameAndExt} */
/* Location: ./admin/system/modules/access/${nameAndExt} */