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
 * @filesource  ./system/tomatocart/libraries/shipping/${nameAndExt}
 */

defined('BASEPATH') OR exit('No direct script access allowed');

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