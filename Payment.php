<?php
/**
 * TomatoCart
 *
 * An open source application ecommerce framework
 *
 * @package     TomatoCart
 * @author      TomatoCart Dev Team
 * @copyright   Copyright (c) 2012, TomatoCart, Inc.
 * @license     http://www.gnu.org/licenses/gpl-3.0.html
 * @link        http://tomatocart.com
 * @since       Version 1.0.0
 * @filesource  ./system/tomatocart/libraries/payment/${nameAndExt}
 */

defined('BASEPATH') OR exit('No direct script access allowed');

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