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
 * @since       Version 0.5
 * @filesource  ./admin/system/modules/access/${nameAndExt}
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class TOC_Access_${name?capitalize} extends TOC_Access {
    
    public function __construct()
    {
        parent::__construct();
        $this->_module = '${name}';
        $this->_group = '${name}';
        $this->_icon = '${name}.png';
        $this->_sort_order = 100;
        $this->_title = lang('access_${name}_title');
        $this->_subgroups = array();
    }
}
  
/* End of file ${nameAndExt} */
/* Location: ./admin/system/modules/access/${nameAndExt} */