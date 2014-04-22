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

require_once 'shipping_module.php';

class TOC_${name?capitalize} extends TOC_Shipping_Module {
    
    protected $code = '${name}';
    protected $params = array(
        // put your code here
    );
    
    public function __construct()
    {
        parent::__construct();
        $this->icon = '${name}.jpg';
        $this->title = lang('shipping_${name}_title');
        $this->description = lang('shipping_${name}_description');
        $this->status = '';
        $this->sort_order = '';
    }
    
    public function initialize()
    {
        
    }
    
    public function quote()
    {
        $this->quotes = array(
            // put your code here
        );
        return $this->quotes;
    }
}

/* End of file ${nameAndExt} */
/* Location: ./system/tomatocart/libraries/shipping/${nameAndExt} */