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
 * Widget {name?capitalize} Controller Class
 * 
 * @package     TomatoCart
 * @subpackage  Modules
 * @category    Access
 * @author      TomatoCart Dev Team
 * @link        http://tomatocart.com
 */
class TOC_Widget_${name?capitalize} extends TOC_Widget {

    /**
     * Widget Code
     * 
     * @var     string
     * @since   2.0.6
     */
    protected $code = '{name}';

    /**
     * Widget Version
     * 
     * @var     string
     * @since   2.0.6
     */
    protected $version = '1.0';

    /**
     * Widget Author Name
     * 
     * @var     string
     * @since   2.0.6
     */
    protected $author_name = 'TomatoCart';

    /**
     * Widget Author Email
     * 
     * @var     string
     * @since   2.0.6
     */
    protected $author_email = 'info@tomatocart.com';

    /**
     * Widget Author Website
     * 
     * @var     string
     * @since   2.0.6
     */
    protected $author_website = 'http://www.tomatocart.com';

    /**
     * Widget Options
     * 
     * @var     string
     * @since   2.0.6
     */
    protected $options = array();

    /**
     * Class Constructor.
     * 
     * @return  void    No value is returned.
     * 
     * @since   2.0.6
     */
    public function __construct($config = '')
    {
        parent::__construct();

        if ( ! empty($config) && is_string($config))
        {
            $this->config = json_decode($config, TRUE);
        }

        $this->title = lang('box_{name}_heading');
    }

    /**
     * Index Page for this controller.
     * 
     * @return  string  The content of the file, if found, else empty.
     */
    public function index()
    {
        $data = array();

        return $this->view('index', $data);
    }
}

/* End of file ${nameAndExt} */
/* Location: ./system/tomatocart/widgets/${nameAndExt} */