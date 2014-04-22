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

require_once 'payment_module.php';

class TOC_Payment_${name} extends TOC_Payment_Module {
    
    protected $code = '${name}';
    protected $params = array(
        // put your code here
    );
    
    public function __construct() 
    {
        parent::__construct();
        $this->title = lang('payment_${name}_title');
        $this->method_title = lang('payment_${name}_method_title');
        $this->status = '';
        $this->sort_order = '';
    }
    
    public function initialize() 
    {
        if ($this->status === TRUE) 
        {
            // put your code here
        }
    }
    
    public function selection()
    {
        return array('id' => $this->code, 'module' => $this->method_title);
    }
    
    public function confirmation() 
    {
        $confirmation = array(
            // put your code here
        );
        return $confirmation;
    }
    
    public function process() 
    {
        // put your code here
    }
}

/* End of file ${nameAndExt} */
/* Location: ./system/tomatocart/libraries/payment/${nameAndExt} */