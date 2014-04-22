<?php
/**
 * Application Controller Class
 *
 * @property CI_Benchmark $benchmark
 * @property CI_Config $config
 * @property CI_Controller $controller
 * @property CI_Exceptions $exceptions
 * @property CI_Hooks $hooks
 * @property CI_Input $input
 * @property CI_Loader $loader
 * @property CI_Log $log
 * @property CI_Model $model
 * @property CI_Output $output
 * @property CI_Router $router
 * @property CI_Security $security
 * @property CI_URI $uri
 * @property CI_Utf8 $utf8
 * 
 * @property CI_DB_query_builder $db
 * @property CI_DB_forge $dbforge
 * @property CI_DB_utility $dbutil
 * 
 * @property CI_Cache $cache
 * @property CI_Calendar $calendar
 * @property CI_Cart $cart
 * @property CI_Email $email
 * @property CI_Encrypt $encrypt
 * @property CI_Encryption $encryption
 * @property CI_Form_validation $form_validation
 * @property CI_Ftp $ftp
 * @property CI_Image_lib $image_lib
 * @property CI_Javascript $javascript
 * @property CI_Jquery $jquery
 * @property CI_Pagination $pagination
 * @property CI_Parser $parser
 * @property CI_Profiler $profiler
 * @property CI_Table $table
 * @property CI_Trackback $trackback
 * @property CI_Typography $typography
 * @property CI_Unit_test $unit
 * @property CI_Upload $upload
 * @property CI_User_agent $agent
 * @property CI_Xmlrpc $xmlrpc
 * @property CI_Xmlrpcs $xmlrpcs
 * @property CI_Zip $zip
 * 
 * @property TOC_Controller $controller
 * @property TOC_Lang $lang
 * 
 * @property TOC_Access $access
 * @property TOC_Address $address
 * @property TOC_Admin $admin
 * @property TOC_Admin_image $admin_image
 * @property TOC_Category $category
 * @property TOC_Category_tree $category_tree
 * @property TOC_Compare_products $compare_products
 * @property TOC_Configuration $configuration
 * @property TOC_Currency $currency
 * @property TOC_Customer $customer
 * @property TOC_Desktop $desktop
 * @property TOC_Directory_listing $directory_listing
 * @property TOC_Email_template $email_template
 * @property TOC_File_System $file_system
 * @property TOC_Google_sitemap $google_sitemap
 * @property TOC_Image $image
 * @property TOC_Message_stack $message_stack
 * @property TOC_Navigation_history $navigation_history
 * @property TOC_Order $order
 * @property TOC_Order_total $order_total
 * @property TOC_Order_status $order_status
 * @property TOC_Payment $payment
 * @property TOC_Pdf $pdf
 * @property TOC_Portlet $portlet
 * @property TOC_Product $product
 * @property TOC_Registry $registry
 * @property TOC_Review $review
 * @property TOC_Search $search
 * @property TOC_Service $service
 * @property TOC_Shipping $shipping
 * @property TOC_Shopping_cart $shopping_cart
 * @property TOC_Tag_cloud $tag_cloud
 * @property TOC_Tax $tax
 * @property TOC_Template $template
 * @property TOC_Weight $weight
 * @property TOC_Widget $widget
 * @property TOC_Wishlist $wishlist
 * @property TOC_Xml $xml
 */
class CI_Controller {}

/**
 * Database Result Class
 */
class CI_DB_Driver {

    /**
     * Execute the query
     *
     * Accepts an SQL string as input and returns a result object upon
     * successful execution of a "read" type query.  Returns boolean TRUE
     * upon successful execution of a "write" type query. Returns boolean
     * FALSE upon failure, and if the $db_debug variable is set to TRUE
     * will raise an error.
     *
     * @access  public
     * @param   string  An SQL query string
     * @param   array   An array of binding data
     * @return  CI_DB_result
     */
    function query(){}
}

/**
 * Model Class
 *
 * @property CI_Benchmark $benchmark
 * @property CI_Config $config
 * @property CI_Controller $controller
 * @property CI_Exceptions $exceptions
 * @property CI_Hooks $hooks
 * @property CI_Input $input
 * @property CI_Loader $loader
 * @property CI_Log $log
 * @property CI_Model $model
 * @property CI_Output $output
 * @property CI_Router $router
 * @property CI_Security $security
 * @property CI_URI $uri
 * @property CI_Utf8 $utf8
 * 
 * @property CI_DB_query_builder $db
 * @property CI_DB_forge $dbforge
 * @property CI_DB_utility $dbutil
 * 
 * @property CI_Cache $cache
 * @property CI_Calendar $calendar
 * @property CI_Cart $cart
 * @property CI_Email $email
 * @property CI_Encrypt $encrypt
 * @property CI_Encryption $encryption
 * @property CI_Form_validation $form_validation
 * @property CI_Ftp $ftp
 * @property CI_Image_lib $image_lib
 * @property CI_Javascript $javascript
 * @property CI_Jquery $jquery
 * @property CI_Pagination $pagination
 * @property CI_Parser $parser
 * @property CI_Profiler $profiler
 * @property CI_Table $table
 * @property CI_Trackback $trackback
 * @property CI_Typography $typography
 * @property CI_Unit_test $unit
 * @property CI_Upload $upload
 * @property CI_User_agent $agent
 * @property CI_Xmlrpc $xmlrpc
 * @property CI_Xmlrpcs $xmlrpcs
 * @property CI_Zip $zip
 * 
 * @property TOC_Controller $controller
 * @property TOC_Lang $lang
 * 
 * @property TOC_Access $access
 * @property TOC_Address $address
 * @property TOC_Admin $admin
 * @property TOC_Admin_image $admin_image
 * @property TOC_Category $category
 * @property TOC_Category_tree $category_tree
 * @property TOC_Compare_products $compare_products
 * @property TOC_Configuration $configuration
 * @property TOC_Currency $currency
 * @property TOC_Customer $customer
 * @property TOC_Desktop $desktop
 * @property TOC_Directory_listing $directory_listing
 * @property TOC_Email_template $email_template
 * @property TOC_File_System $file_system
 * @property TOC_Google_sitemap $google_sitemap
 * @property TOC_Image $image
 * @property TOC_Message_stack $message_stack
 * @property TOC_Navigation_history $navigation_history
 * @property TOC_Order $order
 * @property TOC_Order_total $order_total
 * @property TOC_Order_status $order_status
 * @property TOC_Payment $payment
 * @property TOC_Pdf $pdf
 * @property TOC_Portlet $portlet
 * @property TOC_Product $product
 * @property TOC_Registry $registry
 * @property TOC_Review $review
 * @property TOC_Search $search
 * @property TOC_Service $service
 * @property TOC_Shipping $shipping
 * @property TOC_Shopping_cart $shopping_cart
 * @property TOC_Tag_cloud $tag_cloud
 * @property TOC_Tax $tax
 * @property TOC_Template $template
 * @property TOC_Weight $weight
 * @property TOC_Widget $widget
 * @property TOC_Wishlist $wishlist
 * @property TOC_Xml $xml
 */
class CI_Model {}

/**
 * TomatoCart Access Class
 *
 * @property CI_Benchmark $benchmark
 * @property CI_Config $config
 * @property CI_Controller $controller
 * @property CI_Exceptions $exceptions
 * @property CI_Hooks $hooks
 * @property CI_Input $input
 * @property CI_Loader $loader
 * @property CI_Log $log
 * @property CI_Model $model
 * @property CI_Output $output
 * @property CI_Router $router
 * @property CI_Security $security
 * @property CI_URI $uri
 * @property CI_Utf8 $utf8
 * 
 * @property CI_DB_query_builder $db
 * @property CI_DB_forge $dbforge
 * @property CI_DB_utility $dbutil
 * 
 * @property CI_Cache $cache
 * @property CI_Calendar $calendar
 * @property CI_Cart $cart
 * @property CI_Email $email
 * @property CI_Encrypt $encrypt
 * @property CI_Encryption $encryption
 * @property CI_Form_validation $form_validation
 * @property CI_Ftp $ftp
 * @property CI_Image_lib $image_lib
 * @property CI_Javascript $javascript
 * @property CI_Jquery $jquery
 * @property CI_Pagination $pagination
 * @property CI_Parser $parser
 * @property CI_Profiler $profiler
 * @property CI_Table $table
 * @property CI_Trackback $trackback
 * @property CI_Typography $typography
 * @property CI_Unit_test $unit
 * @property CI_Upload $upload
 * @property CI_User_agent $agent
 * @property CI_Xmlrpc $xmlrpc
 * @property CI_Xmlrpcs $xmlrpcs
 * @property CI_Zip $zip
 * 
 * @property TOC_Controller $controller
 * @property TOC_Lang $lang
 * 
 * @property TOC_Access $access
 * @property TOC_Address $address
 * @property TOC_Admin $admin
 * @property TOC_Admin_image $admin_image
 * @property TOC_Category $category
 * @property TOC_Category_tree $category_tree
 * @property TOC_Compare_products $compare_products
 * @property TOC_Configuration $configuration
 * @property TOC_Currency $currency
 * @property TOC_Customer $customer
 * @property TOC_Desktop $desktop
 * @property TOC_Directory_listing $directory_listing
 * @property TOC_Email_template $email_template
 * @property TOC_File_System $file_system
 * @property TOC_Google_sitemap $google_sitemap
 * @property TOC_Image $image
 * @property TOC_Message_stack $message_stack
 * @property TOC_Navigation_history $navigation_history
 * @property TOC_Order $order
 * @property TOC_Order_total $order_total
 * @property TOC_Order_status $order_status
 * @property TOC_Payment $payment
 * @property TOC_Pdf $pdf
 * @property TOC_Portlet $portlet
 * @property TOC_Product $product
 * @property TOC_Registry $registry
 * @property TOC_Review $review
 * @property TOC_Search $search
 * @property TOC_Service $service
 * @property TOC_Shipping $shipping
 * @property TOC_Shopping_cart $shopping_cart
 * @property TOC_Tag_cloud $tag_cloud
 * @property TOC_Tax $tax
 * @property TOC_Template $template
 * @property TOC_Weight $weight
 * @property TOC_Widget $widget
 * @property TOC_Wishlist $wishlist
 * @property TOC_Xml $xml
 */
class TOC_Access {}

/**
 * TomatoCart Application Controller Class
 *
 * @property CI_Benchmark $benchmark
 * @property CI_Config $config
 * @property CI_Controller $controller
 * @property CI_Exceptions $exceptions
 * @property CI_Hooks $hooks
 * @property CI_Input $input
 * @property CI_Loader $loader
 * @property CI_Log $log
 * @property CI_Model $model
 * @property CI_Output $output
 * @property CI_Router $router
 * @property CI_Security $security
 * @property CI_URI $uri
 * @property CI_Utf8 $utf8
 * 
 * @property CI_DB_query_builder $db
 * @property CI_DB_forge $dbforge
 * @property CI_DB_utility $dbutil
 * 
 * @property CI_Cache $cache
 * @property CI_Calendar $calendar
 * @property CI_Cart $cart
 * @property CI_Email $email
 * @property CI_Encrypt $encrypt
 * @property CI_Encryption $encryption
 * @property CI_Form_validation $form_validation
 * @property CI_Ftp $ftp
 * @property CI_Image_lib $image_lib
 * @property CI_Javascript $javascript
 * @property CI_Jquery $jquery
 * @property CI_Pagination $pagination
 * @property CI_Parser $parser
 * @property CI_Profiler $profiler
 * @property CI_Table $table
 * @property CI_Trackback $trackback
 * @property CI_Typography $typography
 * @property CI_Unit_test $unit
 * @property CI_Upload $upload
 * @property CI_User_agent $agent
 * @property CI_Xmlrpc $xmlrpc
 * @property CI_Xmlrpcs $xmlrpcs
 * @property CI_Zip $zip
 * 
 * @property TOC_Controller $controller
 * @property TOC_Lang $lang
 * 
 * @property TOC_Access $access
 * @property TOC_Address $address
 * @property TOC_Admin $admin
 * @property TOC_Admin_image $admin_image
 * @property TOC_Category $category
 * @property TOC_Category_tree $category_tree
 * @property TOC_Compare_products $compare_products
 * @property TOC_Configuration $configuration
 * @property TOC_Currency $currency
 * @property TOC_Customer $customer
 * @property TOC_Desktop $desktop
 * @property TOC_Directory_listing $directory_listing
 * @property TOC_Email_template $email_template
 * @property TOC_File_System $file_system
 * @property TOC_Google_sitemap $google_sitemap
 * @property TOC_Image $image
 * @property TOC_Message_stack $message_stack
 * @property TOC_Navigation_history $navigation_history
 * @property TOC_Order $order
 * @property TOC_Order_total $order_total
 * @property TOC_Order_status $order_status
 * @property TOC_Payment $payment
 * @property TOC_Pdf $pdf
 * @property TOC_Portlet $portlet
 * @property TOC_Product $product
 * @property TOC_Registry $registry
 * @property TOC_Review $review
 * @property TOC_Search $search
 * @property TOC_Service $service
 * @property TOC_Shipping $shipping
 * @property TOC_Shopping_cart $shopping_cart
 * @property TOC_Tag_cloud $tag_cloud
 * @property TOC_Tax $tax
 * @property TOC_Template $template
 * @property TOC_Weight $weight
 * @property TOC_Widget $widget
 * @property TOC_Wishlist $wishlist
 * @property TOC_Xml $xml
 */
class TOC_Controller {}

/**
 * TomatoCart Model Class
 *
 * @property CI_Benchmark $benchmark
 * @property CI_Config $config
 * @property CI_Controller $controller
 * @property CI_Exceptions $exceptions
 * @property CI_Hooks $hooks
 * @property CI_Input $input
 * @property CI_Loader $loader
 * @property CI_Log $log
 * @property CI_Model $model
 * @property CI_Output $output
 * @property CI_Router $router
 * @property CI_Security $security
 * @property CI_URI $uri
 * @property CI_Utf8 $utf8
 * 
 * @property CI_DB_query_builder $db
 * @property CI_DB_forge $dbforge
 * @property CI_DB_utility $dbutil
 * 
 * @property CI_Cache $cache
 * @property CI_Calendar $calendar
 * @property CI_Cart $cart
 * @property CI_Email $email
 * @property CI_Encrypt $encrypt
 * @property CI_Encryption $encryption
 * @property CI_Form_validation $form_validation
 * @property CI_Ftp $ftp
 * @property CI_Image_lib $image_lib
 * @property CI_Javascript $javascript
 * @property CI_Jquery $jquery
 * @property CI_Pagination $pagination
 * @property CI_Parser $parser
 * @property CI_Profiler $profiler
 * @property CI_Table $table
 * @property CI_Trackback $trackback
 * @property CI_Typography $typography
 * @property CI_Unit_test $unit
 * @property CI_Upload $upload
 * @property CI_User_agent $agent
 * @property CI_Xmlrpc $xmlrpc
 * @property CI_Xmlrpcs $xmlrpcs
 * @property CI_Zip $zip
 * 
 * @property TOC_Controller $controller
 * @property TOC_Lang $lang
 * 
 * @property TOC_Access $access
 * @property TOC_Address $address
 * @property TOC_Admin $admin
 * @property TOC_Admin_image $admin_image
 * @property TOC_Category $category
 * @property TOC_Category_tree $category_tree
 * @property TOC_Compare_products $compare_products
 * @property TOC_Configuration $configuration
 * @property TOC_Currency $currency
 * @property TOC_Customer $customer
 * @property TOC_Desktop $desktop
 * @property TOC_Directory_listing $directory_listing
 * @property TOC_Email_template $email_template
 * @property TOC_File_System $file_system
 * @property TOC_Google_sitemap $google_sitemap
 * @property TOC_Image $image
 * @property TOC_Message_stack $message_stack
 * @property TOC_Navigation_history $navigation_history
 * @property TOC_Order $order
 * @property TOC_Order_total $order_total
 * @property TOC_Order_status $order_status
 * @property TOC_Payment $payment
 * @property TOC_Pdf $pdf
 * @property TOC_Portlet $portlet
 * @property TOC_Product $product
 * @property TOC_Registry $registry
 * @property TOC_Review $review
 * @property TOC_Search $search
 * @property TOC_Service $service
 * @property TOC_Shipping $shipping
 * @property TOC_Shopping_cart $shopping_cart
 * @property TOC_Tag_cloud $tag_cloud
 * @property TOC_Tax $tax
 * @property TOC_Template $template
 * @property TOC_Weight $weight
 * @property TOC_Widget $widget
 * @property TOC_Wishlist $wishlist
 * @property TOC_Xml $xml
 */
class TOC_Model {}

/**
 *
 * @property CI_Benchmark $benchmark
 * @property CI_Config $config
 * @property CI_Controller $controller
 * @property CI_Exceptions $exceptions
 * @property CI_Hooks $hooks
 * @property CI_Input $input
 * @property CI_Loader $loader
 * @property CI_Log $log
 * @property CI_Model $model
 * @property CI_Output $output
 * @property CI_Router $router
 * @property CI_Security $security
 * @property CI_URI $uri
 * @property CI_Utf8 $utf8
 * 
 * @property CI_DB_query_builder $db
 * @property CI_DB_forge $dbforge
 * @property CI_DB_utility $dbutil
 * 
 * @property CI_Cache $cache
 * @property CI_Calendar $calendar
 * @property CI_Cart $cart
 * @property CI_Email $email
 * @property CI_Encrypt $encrypt
 * @property CI_Encryption $encryption
 * @property CI_Form_validation $form_validation
 * @property CI_Ftp $ftp
 * @property CI_Image_lib $image_lib
 * @property CI_Javascript $javascript
 * @property CI_Jquery $jquery
 * @property CI_Pagination $pagination
 * @property CI_Parser $parser
 * @property CI_Profiler $profiler
 * @property CI_Table $table
 * @property CI_Trackback $trackback
 * @property CI_Typography $typography
 * @property CI_Unit_test $unit
 * @property CI_Upload $upload
 * @property CI_User_agent $agent
 * @property CI_Xmlrpc $xmlrpc
 * @property CI_Xmlrpcs $xmlrpcs
 * @property CI_Zip $zip
 * 
 * @property TOC_Controller $controller
 * @property TOC_Lang $lang
 * 
 * @property TOC_Access $access
 * @property TOC_Address $address
 * @property TOC_Admin $admin
 * @property TOC_Admin_image $admin_image
 * @property TOC_Category $category
 * @property TOC_Category_tree $category_tree
 * @property TOC_Compare_products $compare_products
 * @property TOC_Configuration $configuration
 * @property TOC_Currency $currency
 * @property TOC_Customer $customer
 * @property TOC_Desktop $desktop
 * @property TOC_Directory_listing $directory_listing
 * @property TOC_Email_template $email_template
 * @property TOC_File_System $file_system
 * @property TOC_Google_sitemap $google_sitemap
 * @property TOC_Image $image
 * @property TOC_Message_stack $message_stack
 * @property TOC_Navigation_history $navigation_history
 * @property TOC_Order $order
 * @property TOC_Order_total $order_total
 * @property TOC_Order_status $order_status
 * @property TOC_Payment $payment
 * @property TOC_Pdf $pdf
 * @property TOC_Portlet $portlet
 * @property TOC_Product $product
 * @property TOC_Registry $registry
 * @property TOC_Review $review
 * @property TOC_Search $search
 * @property TOC_Service $service
 * @property TOC_Shipping $shipping
 * @property TOC_Shopping_cart $shopping_cart
 * @property TOC_Tag_cloud $tag_cloud
 * @property TOC_Tax $tax
 * @property TOC_Template $template
 * @property TOC_Weight $weight
 * @property TOC_Widget $widget
 * @property TOC_Wishlist $wishlist
 * @property TOC_Xml $xml
 */
class TOC_Portlet {}

/**
 * TomatoCart Widget Class
 *
 * @property CI_Benchmark $benchmark
 * @property CI_Config $config
 * @property CI_Controller $controller
 * @property CI_Exceptions $exceptions
 * @property CI_Hooks $hooks
 * @property CI_Input $input
 * @property CI_Loader $loader
 * @property CI_Log $log
 * @property CI_Model $model
 * @property CI_Output $output
 * @property CI_Router $router
 * @property CI_Security $security
 * @property CI_URI $uri
 * @property CI_Utf8 $utf8
 * 
 * @property CI_DB_query_builder $db
 * @property CI_DB_forge $dbforge
 * @property CI_DB_utility $dbutil
 * 
 * @property CI_Cache $cache
 * @property CI_Calendar $calendar
 * @property CI_Cart $cart
 * @property CI_Email $email
 * @property CI_Encrypt $encrypt
 * @property CI_Encryption $encryption
 * @property CI_Form_validation $form_validation
 * @property CI_Ftp $ftp
 * @property CI_Image_lib $image_lib
 * @property CI_Javascript $javascript
 * @property CI_Jquery $jquery
 * @property CI_Pagination $pagination
 * @property CI_Parser $parser
 * @property CI_Profiler $profiler
 * @property CI_Table $table
 * @property CI_Trackback $trackback
 * @property CI_Typography $typography
 * @property CI_Unit_test $unit
 * @property CI_Upload $upload
 * @property CI_User_agent $agent
 * @property CI_Xmlrpc $xmlrpc
 * @property CI_Xmlrpcs $xmlrpcs
 * @property CI_Zip $zip
 * 
 * @property TOC_Controller $controller
 * @property TOC_Lang $lang
 * 
 * @property TOC_Access $access
 * @property TOC_Address $address
 * @property TOC_Admin $admin
 * @property TOC_Admin_image $admin_image
 * @property TOC_Category $category
 * @property TOC_Category_tree $category_tree
 * @property TOC_Compare_products $compare_products
 * @property TOC_Configuration $configuration
 * @property TOC_Currency $currency
 * @property TOC_Customer $customer
 * @property TOC_Desktop $desktop
 * @property TOC_Directory_listing $directory_listing
 * @property TOC_Email_template $email_template
 * @property TOC_File_System $file_system
 * @property TOC_Google_sitemap $google_sitemap
 * @property TOC_Image $image
 * @property TOC_Message_stack $message_stack
 * @property TOC_Navigation_history $navigation_history
 * @property TOC_Order $order
 * @property TOC_Order_total $order_total
 * @property TOC_Order_status $order_status
 * @property TOC_Payment $payment
 * @property TOC_Pdf $pdf
 * @property TOC_Portlet $portlet
 * @property TOC_Product $product
 * @property TOC_Registry $registry
 * @property TOC_Review $review
 * @property TOC_Search $search
 * @property TOC_Service $service
 * @property TOC_Shipping $shipping
 * @property TOC_Shopping_cart $shopping_cart
 * @property TOC_Tag_cloud $tag_cloud
 * @property TOC_Tax $tax
 * @property TOC_Template $template
 * @property TOC_Weight $weight
 * @property TOC_Widget $widget
 * @property TOC_Wishlist $wishlist
 * @property TOC_Xml $xml
 */
class TOC_Widget {}

/**
 * @return CI_Controller
 */
function get_instance(){}