<?php
/**
 * Base Theme class to be extended by individual themes
 *
 * PHP version 5
 * 
 * @category   WordPress_Themes
 * @package    CubicMushroom_WP
 * @subpackage Themes
 * @author     Toby Griffiths <toby@cubicmushroom.co.uk>
 * @license    http://opensource.org/licenses/MIT MIT
 * @link       http://cubicmushroom.co.uk
 **/

namespace CubicMushroom\WP\Themes;

use \CubicMushroom\WP\Core\Base;
use \CubicMushroom\WP\Exception\PostTypeRegistrationFailedException;

/**
 * Base Theme class to be extended by individual themes
 * 
 * @category   WordPress_Themes
 * @package    CubicMushroom_WP
 * @subpackage Themes
 * @author     Toby Griffiths <toby@cubicmushroom.co.uk>
 * @license    http://opensource.org/licenses/MIT MIT
 * @link       http://cubicmushroom.co.uk
 **/
class Theme extends Base
{

    /*************************
     * Non-static properties *
     *************************/

    /**
     * {@inheritdoc}
     */
    protected $hooks = array(
        'init'           => 'hookInit',
        'admin_init'     => 'hookAdminInit'
    );

} // END class FundApplicationTheme